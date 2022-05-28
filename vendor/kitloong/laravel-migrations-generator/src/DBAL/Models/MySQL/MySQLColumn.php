<?php

namespace KitLoong\MigrationsGenerator\DBAL\Models\MySQL;

use Illuminate\Support\Str;
use KitLoong\MigrationsGenerator\DBAL\Models\DBALColumn;
use KitLoong\MigrationsGenerator\Enum\Migrations\Method\ColumnType;
use KitLoong\MigrationsGenerator\Repositories\MySQLRepository;
use KitLoong\MigrationsGenerator\Support\CheckMigrationMethod;

class MySQLColumn extends DBALColumn
{
    use CheckMigrationMethod;

    /**
     * @var \KitLoong\MigrationsGenerator\Repositories\MySQLRepository
     */
    private $repository;

    protected function handle(): void
    {
        $this->repository = app(MySQLRepository::class);

        switch ($this->type) {
            case ColumnType::UNSIGNED_TINY_INTEGER():
            case ColumnType::TINY_INTEGER():
                if ($this->isBoolean()) {
                    $this->type = ColumnType::BOOLEAN();
                }
                break;
            case ColumnType::ENUM():
                $this->presetValues = $this->getEnumPresetValues();
                break;
            case ColumnType::SET():
                $this->useSetOrString();
                break;
            case ColumnType::SOFT_DELETES():
            case ColumnType::SOFT_DELETES_TZ():
            case ColumnType::TIMESTAMP():
            case ColumnType::TIMESTAMP_TZ():
                $this->onUpdateCurrentTimestamp = $this->hasOnUpdateCurrentTimestamp();
                break;
            default:
        }
    }

    /**
     * Check if the column is "tinyint(1)", if yes then generate as boolean.
     *
     * @return bool
     */
    private function isBoolean(): bool
    {
        if ($this->autoincrement) {
            return false;
        }

        $showColumn = $this->repository->showColumn($this->tableName, $this->name);
        if ($showColumn === null) {
            return false;
        }

        return Str::startsWith($showColumn->getType(), 'tinyint(1)');
    }

    /**
     * Get the preset values if the column is "enum".
     *
     * @return string[]
     */
    private function getEnumPresetValues(): array
    {
        return $this->repository->getEnumPresetValues(
            $this->tableName,
            $this->name
        )->toArray();
    }

    /**
     * Get the preset values if the column is "set".
     *
     * @return string[]
     */
    private function getSetPresetValues(): array
    {
        return $this->repository->getSetPresetValues(
            $this->tableName,
            $this->name
        )->toArray();
    }

    /**
     * Check if "set" method is available, then get "set" preset values.
     * If not available, change type to string with 255 length.
     *
     * @return void
     */
    private function useSetOrString(): void
    {
        if ($this->hasSet()) {
            $this->presetValues = $this->getSetPresetValues();
            return;
        }

        $this->type   = ColumnType::STRING();
        $this->length = 255; // Framework default string length.
    }

    /**
     * Check if the column uses "on update CURRENT_TIMESTAMP".
     *
     * @return bool
     */
    private function hasOnUpdateCurrentTimestamp(): bool
    {
        return $this->repository->isOnUpdateCurrentTimestamp($this->tableName, $this->name);
    }
}
