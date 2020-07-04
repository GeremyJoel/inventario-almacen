<?php
include "header.php";
include "asside.php";
require_once('../modelo/financiamiento.php');

?>
<div class="uk-card uk-card-large uk-card-default uk-card-body">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Fuentes de Financiamiento</h1>
            </div>
            <div class="col-md-3 d-none d-lg-block">
                <label class="sr-only" for="inlineFormInputGroup">Buscador</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><span uk-icon="search"></span></div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Buscador">
                </div>
            </div>
            <div class="col-md-3">
                <button uk-toggle="target: #modal-add" class="btn btn-primary btn-block">Agregar</button>
            </div>
        </div>
        <div id="tabla-contenido"></div>
    </div>
</div>
<div id="modal-add" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Agrega Fuente</h2>
        </div>
        <div class="uk-modal-body">
            <div class="mt-2">
                <div>
                    <label for="">Fuente de financiamiento</label>
                </div>
                <div>
                    <input type="text" class="form-control" id="nombre"
                        placeholder="Nombre de la fuente de financiamiento">
                </div>
            </div>
        </div>
        <div class="uk-modal-footer">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="form-row">
                        <div class="col">
                            <button class="btn btn-lg btn-success" onclick="agregar();">Agregar</button>
                        </div>
                        <div class="col">
                            <button class="btn btn-lg btn-danger uk-modal-close">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../assets/js/financiamiento.js"></script>
<?php include 'footer.php'; ?>