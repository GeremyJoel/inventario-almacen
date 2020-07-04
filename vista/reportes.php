<?php
include "header.php";
include "asside.php";
include "../modelo/financiamiento.php";
        $finan = new Financiamiento();
        $datos = $finan->getFinanciamiento();
include "../modelo/funciones.php";
        $rows = mostrarDatos();
?>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
<div class="row mb-3">
    <div class="col-md-4 d-flex justify-content-center">
        <h1 class="">Registro de entradas</h1>
    </div>
    <div class="col-md-4">
        <h2 class="d-none d-md-block">Total de registros <?=mysqli_num_rows($rows);?></h2>
    </div>
    <div class="col-md-4 d-flex justify-content-center">
        <button class="btn btn-success btn-lg" uk-toggle="target: #modal-report">Generar Reporte</button>
    </div>



</div>
<div class="table-responsive">
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
</div>

<!-- This is the modal -->
<div id="modal-rep" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title"></h2>
        Este es el modal
        <button class="uk-modal-close uk-button-primary" type="button">Mostrar reporte</button>
    </div>
</div>


<div id="modal-report" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Este mejor</h2>
        </div>
        <form action="../controlador/ctrlReporte.php" method="post">
            <div class="uk-modal-body">
                <div class="form-group row">
                    <h4 for="" class="col-md-5">Tipo de reporte</h4>
                    <select class="form-control col-md-7" name="tipo" id="tipo">
                        <option value="programas">Programas</option>
                        <option value="partidas">Partidas</option>
                        <option value="financiamiento">Fuentes de financiamiento</option>
                        <option value="inventario">Inventario de existencias</option>
                        <?php foreach($datos as $dato){ ?>
                        <option value="$dato['descripcion'];?>"><?=$dato['descripcion'];?></option>
                        <?php } ?>
                    </select>
                    <h4>Fechas:</h4>
                    <input type="date" name="fechaI" id="fechaI" class="form-control">
                    <h4> hasta </h4>
                    <input type="date" name="fechaF" id="fechaF" class="form-control">
                </div>
            </div>
            <div class="uk-modal-footer">
                <button type="submit" target="_blank" class="btn btn-info">Enviar</button>
            </div>
        </form>

    </div>
</div>
<?php include 'footer.php'; ?>