<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViSecRolxmenuxsubmenuView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vi_sec_rolxmenuxsubmenu` AS select `a`.`idrol` AS `idrol`,`a3`.`rolnom` AS `rol`,`a`.`idmenu` AS `idmenu`,`a4`.`orden` AS `menu_orden`,`a4`.`nombre` AS `menu_nombre`,`a4`.`descripcion` AS `menu_descripcion`,concat(`a4`.`nombre`,' (',`a4`.`descripcion`,')') AS `menu`,`a`.`idsubmenu` AS `idsubmenu`,`a5`.`orden` AS `submenu_orden`,`a5`.`nombre` AS `submenu_nombre`,`a5`.`descripcion` AS `submenu_descripcion`,concat(`a5`.`nombre`,' (',`a5`.`descripcion`,')') AS `submenu`,`a5`.`ismenu` AS `ismenu`,`a`.`activo` AS `activo`,concat(date_format(`a`.`fechreg`,'%d/%m/%Y'),' ',right(`a`.`fechreg`,8),' ',`a1`.`usuario`) AS `fechreg`,concat(date_format(`a`.`fechact`,'%d/%m/%Y'),' ',right(`a`.`fechact`,8),' ',`a1`.`usuario`) AS `fechact` from (((((`db_dincors`.`sec_rolxmenuxsubmenu` `a` join `db_dincors`.`sec_usuario` `a1` on((`a`.`codusureg` = `a1`.`id`))) join `db_dincors`.`sec_usuario` `a2` on((`a`.`codusureg` = `a2`.`id`))) join `db_dincors`.`sec_rol` `a3` on((`a`.`idrol` = `a3`.`idrol`))) join `db_dincors`.`sec_menu` `a4` on((`a`.`idmenu` = `a4`.`idmenu`))) join `db_dincors`.`sec_submenu` `a5` on((`a`.`idsubmenu` = `a5`.`idsubmenu`)))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vi_sec_rolxmenuxsubmenu`");
    }
}
