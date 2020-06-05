<?php
include "header.php";
include "asside.php";
require_once('../modelo/partida.php');

?>
<div class="uk-card uk-card-large uk-card-default uk-card-body">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Partidas</h1>
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
        <div id="tabla-content"></div>
    </div>
</div>
<div id="modal-add" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Agrega partida</h2>
        </div>
        <div class="uk-modal-body">
            <div class="form-row">
                <div class="col">
                    <div>
                        <label for=""><b>Numero de partida</b> </label>
                    </div>
                    <div>
                        <input type="number" class="form-control" id="numero" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div>
                        <label for=""><b>Importe de la partida</b> </label>
                    </div>
                    <div>
                        <input type="text" class="form-control" id="importe" placeholder="">

                    </div>
                </div>
            </div>
            <div class="mt-2">
                <div>
                    <label for=""><b>Nombre de la partida</b> </label>
                </div>
                <div>
                    <input type="text" class="form-control" id="nombre" placeholder="">
                </div>
            </div>
        </div>
        <div class="uk-modal-footer">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="form-row">
                        <div class="col">
                            <button class="btn btn-lg btn-success" onclick="addPartida();">Agregar</button>
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

<script src="../assets/js/partidas.js"></script>
<?php include 'footer.php'; ?>