<?php
include "header.php";
include "asside.php";
require_once('../modelo/producto.php'); 
?>
<div class="container">
    <div uk-grid>
        <div class="row">
            <form action="../controlador/ctrlProducto.php" method="post">
                <div class="uk-card uk-card-default uk-card-body">
                    <h1>Registro - Productos</h1>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="accion" value="agregar">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <label for="clave">
                                        <h4>Clave</h4>
                                    </label>
                                    <input type="text" class="form-control" name="clave">
                                </div>
                                <div class="col-md-6">
                                    <label for="Umedida">
                                        <h4>Unidad Medida</h4>
                                    </label>
                                    <input type="text" class="form-control" name="unidad">
                                </div>
                                <div class="col-md-12">
                                    <label for="nombre">
                                        <h4>Nombre</h4>
                                    </label>
                                    <input type="text" class="form-control" name="descripcion">
                                </div>
                                
                            </div>

                        </div>
                    </div>
                    <hr>
                    <!-- Button trigger modal -->
                    <button type="submit" class="btn btn-success btn-lg">
                        Agregar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="lista-productos" class="mt-3"></div>
</div>


<script src="../assets/js/producto.js"></script>
<?php
include "footer.php";
?>