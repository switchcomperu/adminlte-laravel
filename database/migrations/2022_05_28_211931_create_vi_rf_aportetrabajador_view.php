<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViRfAportetrabajadorView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vi_rf_aportetrabajador` AS select `a`.`idaportetrabajador` AS `idaportetrabajador`,`a`.`aporte_idestado` AS `aporte_idestado`,`b1`.`estnom` AS `aporte_estado`,`a`.`aporte_idperiodo` AS `aporte_idperiodo`,concat(substr(`a`.`aporte_idperiodo`,5,2),'/',substr(`a`.`aporte_idperiodo`,1,4)) AS `aporte_periodo`,`a`.`aporte_fechemi` AS `aporte_fechemi`,date_format(`a`.`aporte_fechemi`,'%d/%m/%Y') AS `aporte_fechemi_format`,`a`.`aporte_fechven` AS `aporte_fechven`,date_format(`a`.`aporte_fechven`,'%d/%m/%Y') AS `aporte_fechven_format`,`a`.`aporte_codigo` AS `aporte_codigo`,`a`.`idregimenpension` AS `idregimenpension`,`c`.`parnom` AS `regimenpension`,`a`.`aporte_ticket` AS `aporte_ticket`,`a`.`aporte_importe` AS `aporte_importe`,`a`.`aporte_obs` AS `aporte_obs`,`a`.`mora_fecha` AS `mora_fecha`,date_format(`a`.`mora_fecha`,'%d/%m/%Y') AS `mora_fecha_format`,`a`.`mora_importe` AS `mora_importe`,`a`.`multa_fecha` AS `multa_fecha`,date_format(`a`.`multa_fecha`,'%d/%m/%Y') AS `multa_fecha_format`,`a`.`multa_importe` AS `multa_importe`,`a`.`idempresa` AS `idempresa`,concat(date_format(`a`.`fechreg`,'%d/%m/%Y'),' ',right(`a`.`fechreg`,8),' ',`a1`.`usuario`) AS `registro`,concat(date_format(`a`.`fechact`,'%d/%m/%Y'),' ',right(`a`.`fechact`,8),' ',`a2`.`usuario`) AS `actualizacion` from ((((`db_dincors`.`rf_aportetrabajador` `a` join `db_dincors`.`sec_usuario` `a1` on((`a`.`codusureg` = `a1`.`id`))) join `db_dincors`.`sec_usuario` `a2` on((`a`.`codusureg` = `a2`.`id`))) join `db_dincors`.`rf_aportetrabajador_estado` `b1` on((`b1`.`idestado` = `a`.`aporte_idestado`))) join `db_dincors`.`tp_regimenpension` `c` on((`c`.`idregimenpension` = `a`.`idregimenpension`)))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vi_rf_aportetrabajador`");
    }
}
