<table id="registros" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Producto</th>
            <th>No. Productos salidos</th>
            <th>Fecha de Salida</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($rows as $row) { ?>
        <tr>
            <td><?=$row['descripcion'];?></td>
            <td><?=$row['cantidad'];?></td>
            <td>
                <?php if ($row['fecha'] == '0000-00-00 00:00:00') {
            echo 'S/C';
        } else {
            echo date('d-m-Y',strtotime($row['fecha']));
        } ?>
            </td>
        </tr>
        <?php }?>
    </tbody>
    <tfoot>
        <tr>
            <th>Producto</th>
            <th>No. Productos salidos</th>
            <th>Fecha de Salida</th>
        </tr>
    </tfoot>
</table>