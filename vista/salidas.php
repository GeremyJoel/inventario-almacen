<?php
    include "../modelo/funciones.php";
    require_once('../modelo/producto.php');
    $prod = new Producto();
    $pr = $prod->getProductos();
    include 'header.php';
    include "asside.php";
?>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
<div class="row">
    <div class="col-md-6">
        <div class="uk-card uk-card-large uk-card-default uk-card-body">
            <h3 class="uk-card-title">Salidas</h3>
            <div class="row">
                <div class="col-6">
                    <label for="">Productos</label>
                    <select name="" id="producto" class="form-control">
                        <option value="">Seleccione Producto</option>

                        <?php
                    foreach ($pr as $r) {
                        ?>
                        <option value="<?= $r['idProducto']; ?>"><?= $r['descripcion']; ?></option>
                        <?php
                    }
                ?>
                    </select>
                </div>
                <div class="col-6">
                <label for="">Cantidad</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">#</div>
                        </div>
                        <input type="number" class="form-control" id="cantidad" placeholder="Cantidad">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button id="btn-add" class="btn btn-secondary btn-lg" onclick="agregar();">Salida</button>
            </div>
        </div>
    </div>
    <div class="col-md-6" id="tabla-reg">
        
    </div>
</div>

<script src="../assets/js/salidas.js"></script>
<?php
    include 'footer.php';
?>