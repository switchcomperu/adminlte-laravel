<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViSecSubmenuView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vi_sec_submenu` AS select `a`.`idsubmenu` AS `idsubmenu`,`a`.`nombre` AS `nombre`,`a`.`orden` AS `orden`,`a`.`pagina` AS `pagina`,`a`.`ismenu` AS `ismenu`,`a`.`descripcion` AS `descripcion`,`a`.`idmenu` AS `idmenu`,`a2`.`nombre` AS `menu`,concat(date_format(`a`.`fechact`,'%d/%m/%Y'),' ',right(`a`.`fechact`,8),' ',`a1`.`usuario`) AS `fechact` from ((`db_dincors`.`sec_submenu` `a` join `db_dincors`.`sec_usuario` `a1` on((`a`.`codusureg` = `a1`.`id`))) join `db_dincors`.`sec_submenu` `a2` on((`a`.`idsubmenu` = `a2`.`idsubmenu`)))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vi_sec_submenu`");
    }
}
