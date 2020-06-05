<?php
    include 'header.php';
    include 'asside.php';
    require_once('../modelo/programa.php');
    $prog = new Programa();
    $pro = $prog->getPrograma();
    require_once('../modelo/producto.php');
    $prod = new Producto();
    $pr = $prod->getProductos();
    require_once('../modelo/financiamiento.php');
    $finan = new Financiamiento();
    $fin = $finan->getFinanciamiento();

    ?>
<div class="container">
    <div class="uk-card uk-card-hover uk-card-default uk-card-body">
        <h3 class="uk-card-title">Entradas</h3>
        <div class="row">
            <div class="col-md-2">
                <label for="">Folio</label>
                <input type="text" class="form-control" placeholder="" id="folio">
            </div>
            <div class="col-md-3">
                <label for="">Tipo Movimiento</label>
                <select class="form-control" id="tipo">
                    <option value="">Seleccione Movimiento</option>
                    <option value="Transferencia">Transferencia</option>
                    <option value="Donacion">Donacion</option>
                    <option value="Compra Directa">Compra Directa</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="">Programa</label>
                <select name="" id="programa" class="form-control">
                    <option value="">Seleccione Programa</option>

                    <?php
                    foreach ($pro as $r) {
                        ?>
                    <option value="<?= $r['idPrograma']; ?>"><?= $r['nomPrograma']; ?></option>
                    <?php
                    }
                ?>
                </select>
            </div>
            <div class="col-md-2">
                <label for="">Numero de Lote</label>
                <input type="text" name="" id="lote" class="form-control" placeholder="">
            </div>
            <div class="col-md-4">
                <label for="">Fuente Financiamiento</label>
                <select class="form-control" id="fuente">
                    <option value="">Seleccione Fuente</option>
                    <?php
                    foreach ($fin as $f) {
                        ?>
                    <option value="<?= $f['idFuente']; ?>"><?= $f['descripcion']; ?></option>
                    <?php
                    }
                ?>
                </select>
            </div>

            <div class="col-md-4">
                <label for="">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" placeholder="">
            </div>
            <div class="col-md-4">
                <label for="">Costo Unitario</label>
                <input type="number" class="form-control" id="costo" placeholder="">
            </div>
            <div class="col-md-7">
                <label for="">Producto</label>
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
            <div class="col-md-3">
                <label for="">Fecha Caducidad</label>
                <input type="date" class="form-control" id="fecha" placeholder="">
            </div>
            <div class="col-md-2">
                <button class="btn btn-success btn-block mt-4" onclick="addEntrada();">Nueva Entrada</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-3">
            <div id="mostrar_entradas"></div>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<div class="container">
    <div class="col-md-12">
        <div id="mostrar"></div>
    </div>
</div>
<script src="../assets/js/entrada.js"></script>
<?php
    include "footer.php";
?>