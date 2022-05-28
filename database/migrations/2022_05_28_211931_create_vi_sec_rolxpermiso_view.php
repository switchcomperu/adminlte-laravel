<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViSecRolxpermisoView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vi_sec_rolxpermiso` AS select `a`.`idrol` AS `idrol`,`b`.`rolnom` AS `rol`,`c`.`idmodulo` AS `idmodulo`,`c1`.`modulonom` AS `modulo`,`a`.`idpermiso` AS `idpermiso`,`c`.`nombre` AS `permiso`,`a`.`isactivo` AS `isactivo`,concat(date_format(`a`.`fechreg`,'%d/%m/%Y'),' ',right(`a`.`fechreg`,8),' ',`a1`.`usuario`) AS `fechreg`,concat(date_format(`a`.`fechact`,'%d/%m/%Y'),' ',right(`a`.`fechact`,8),' ',`a2`.`usuario`) AS `fechact` from (((((`db_dincors`.`sec_rolxpermiso` `a` join `db_dincors`.`sec_usuario` `a1` on((`a`.`codusureg` = `a1`.`id`))) join `db_dincors`.`sec_usuario` `a2` on((`a`.`codusuact` = `a2`.`id`))) join `db_dincors`.`sec_rol` `b` on((`b`.`idrol` = `a`.`idrol`))) join `db_dincors`.`sec_permiso` `c` on((`a`.`idpermiso` = `c`.`idpermiso`))) join `db_dincors`.`sec_modulo` `c1` on((`c`.`idmodulo` = `c1`.`idmodulo`)))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vi_sec_rolxpermiso`");
    }
}
