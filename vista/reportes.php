<?php
include "header.php";
include "asside.php";
include "../modelo/funciones.php";
        $rows = mostrarDatos();
?>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
<div class="d-flex justify-content-between mb-3">
    <h1>Registro de entradas</h1>
    <h2>Total de registros <?=mysqli_num_rows($rows);?></h2>
    <button class="btn btn-success btn-lg ">Generar Reporte</button>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Clave</th>
            <th>Producto</th>
            <th>Folio</th>
            <th>Lote</th>
            <th>Movimiento</th>
            <th>Costo Unitario</th>
            <th>Fecha Caducidad</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($rows)) { ?>
        <tr>
            <td><?=$row['clave'];?></td>
            <td><?=$row['descripcion'];?></td>
            <td><?=$row['folio'];?></td>
            <td><?=$row['numLote'];?></td>
            <td><?=$row['movimiento'];?></td>
            <td><?='$'.$row['costo_unitario'];?></td>
            <td>
                <?php if ($row['fecha_caducidad'] == '0000-00-00 00:00:00') {
            echo 'S/C';
        } else {
            echo date('d-m-Y',strtotime($row['fecha_caducidad']));
        } ?>
            </td>
        </tr>
        <?php }?>
    </tbody>
    <tfoot>
        <tr>
            <th>Clave</th>
            <th>Producto</th>
            <th>Folio</th>
            <th>Lote</th>
            <th>Movimiento</th>
            <th>Costo Unitario</th>
            <th>Fecha Caducidad</th>
        </tr>
    </tfoot>
</table>
<?php include 'footer.php'; ?>