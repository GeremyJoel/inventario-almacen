<?php
$tipo = $_REQUEST['t'];
$fechaI = $_REQUEST['fi'];
$fechaF = $_REQUEST['ff'];
include('../../modelo/conexion.php');
include('../../assets/mpdf/mpdf.php');
$mpdf = new mPDF();
$anio = date("Y");
$html='
<div style="text-align:center;"><h3>SERVICIOS DE SALUD DE VERACRUZ DIRECCIÓN ADMINISTRATIVA SUBDIRECCIÓN DE RECURSOS FINANCIEROS DESCRIPCIÓN DE PARTIDAS EJERCICIO '.$anio.'</h3></div>

<table style="margin-top:20px;" border="1">
<tr>
<td width="150px" style="font-size:20px"><strong>Partida Actual</strong></td>
<td width="450px" style="font-size:20px"><strong>Descripcion</strong></td>
</tr>';?>
<?php
    $sql = "SELECT * FROM partida";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result))
    {
        $html .= '<tr>
        <td>'.$row['numPartida'].'</td>   
        <td>'.$row['nombre'].'</td> 
        </tr>';
    }

$html.='</table>';
//echo $html;
$segunda = "<h2>Este es otro H</h2>";
$pdf = new mPDF('c');
$pdf-> writeHTML($html,2);
$pdf->Output();
exit;
?>