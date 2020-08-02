<?php
$tipo = $_REQUEST['t'];
$fechaI = $_REQUEST['fi'];
$fechaF = $_REQUEST['ff'];
include('../../modelo/conexion.php');
include('../../assets/mpdf/mpdf.php');
$mpdf = new mPDF();
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
<td width="150px">No. PROGRESIVO</td>
<td width="400px">DESCRIPCION DE LA FUENTE DE FINANCIAMIENTO</td>
<td width="150px">IMPORTE POR FUENTE DE FINANCIAMIENTO</td>
</tr>';?>
<?php
    $sql = "SELECT * FROM ffinanciamiento";
    $result = mysqli_query($conn,$sql);
   // echo var_dump($result);
    //echo "select sum(costo_unitario) as suma from entradas as en inner join entradaproducto as ep on en.identrada = ep.entrada where numPrograma = ".$row['idPrograma']." AND fecha > '$fechaI' AND fecha < '$fechaF'";
    while($row = mysqli_fetch_array($result))
    {
        $val = mysqli_query($conn,"select sum(costo_unitario) as suma from entradas as en inner join entradaproducto as ep on en.identrada = ep.entrada where fFinanciamiento = ".$row['idFuente']." AND fecha > '$fechaI' AND fecha < '$fechaF'");
        $valu = mysqli_fetch_array($val);
        if($valu['suma'] == NULL){
            $dat = "0.00";
        }else{
            $dat = $valu['suma'];
        } 
        $html .= '<tr>
        <td>'.$row['numFuente'].'</td>   
        <td>'.$row['descripcion'].'</td> 
        <td>$ '.$dat.'</td> 
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