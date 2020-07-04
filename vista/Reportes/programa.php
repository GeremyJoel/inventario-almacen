<?php
$tipo = $_REQUEST['t'];
$fechaI = $_REQUEST['fi'];
$fechaF = $_REQUEST['ff'];
require('../../modelo/conexion.php');
require('../../modelo/funciones.php');
require('../../assets/mpdf/mpdf.php');
$html='
<div style="text-align:center;"><h3>IMPORTE DE LOS INVENTARIOS DE BIENES DE CONSUMO DE LAS UNIDADES APLICATIVAS REPORTADOS DEL '.$fechaI.' HASTA '.$fechaF.'</h3></div>
<table style="margin-top:10px;" border="1">
<tr>
<td width="100px">Nombre de la unidad aplicativa</td>
<td width="400px">HOSPITAL</td>
</tr>
<tr></tr>
<tr></tr>
</table>

<table style="margin-top:20px;" border="1">
<tr>
<td width="15fmgfh0px">Numero del programa presupuestal</td>
<td width="400px">Nombre del programa presupuestal</td>
<td width="150px">Importe por programa presupuestal</td>
</tr>
<tr></tr>
<tr></tr>
</table>
';
$segunda = "<h2>Este es otro H</h2>";
$pdf = new mPDF('c');
$pdf-> writeHTML($html);
$pdf->Output();
exit;
?>