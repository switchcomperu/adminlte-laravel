<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViSecMenuView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vi_sec_menu` AS select `a`.`idmenu` AS `idmenu`,`a`.`nombre` AS `nombre`,`a`.`orden` AS `orden`,`a`.`descripcion` AS `descripcion`,concat(date_format(`a`.`fechact`,'%d/%m/%Y'),' ',right(`a`.`fechact`,8),' ',`a1`.`usuario`) AS `fechact` from (`db_dincors`.`sec_menu` `a` join `db_dincors`.`sec_usuario` `a1` on((`a`.`codusureg` = `a1`.`id`)))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vi_sec_menu`");
    }
}
