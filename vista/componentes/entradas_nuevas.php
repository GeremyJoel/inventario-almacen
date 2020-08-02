<div class="uk-card uk-card-large uk-card-default uk-card-body">
    <h3 class="uk-card-title">Ultimo Registro</h3>
    <div class="table-responsive mt-1">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Clave</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Movimiento</th>
                    <th scope="col">Caducidad</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">#</th>
                    <td><?php echo $datos['folio'];?></td>
                    <td><?php echo $datos['cantidad'];?></td>
                    <td><?php echo $datos['descripcion'];?></td>
                    <td><?php echo $datos['movimiento'];?></td>
                    <td><?php echo date('d-m-Y',strtotime($datos['fecha_caducidad']));?></td>
                    <td><span uk-icon="pencil" uk-toggle="target: #my-modal" class="btn btn-success"></span>
                        <span class="btn btn-danger" uk-toggle="target: #modal-del" uk-icon="trash"></span></td>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- This is the modal -->
    <div id="my-modal" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title">Editar la entrada</h2>
            <div class="row">
                <div class="col-3 mt-3">
                    <label for="">Clave</label>
                </div>
                <div class="col-9 mt-3">
                    <input type="text" value="<?=$datos['folio'];?>" class="form-control" id="Efolio">
                </div>
                <div class="col-3 mt-3">
                    <label for="">Movimiento</label>
                </div>
                <div class="col-9 mt-3">
                    <input type="text" value="<?=$datos['movimiento'];?>" class="form-control" id="Etipo">
                </div>
                <div class="col-3 mt-3">
                    <label for="">Programa</label></div>
                <div class="col-9 mt-3">
                    <select name="" id="Eprograma" class="form-control">
                        <option value="<?=$datos['numPrograma'];?>">Seleccione Programa</option>
                        <?php
                    foreach ($pro as $r) {
                        ?>
                        <option value="<?= $r['idPrograma']; ?>"><?= $r['nomPrograma']; ?></option>
                        <?php
                    }
                ?>
                    </select>
                </div>
                <div class="col-3 mt-3">
                    <label for="">Num. Lote</label>
                </div>
                <div class="col-9 mt-3">
                    <input type="text" value="<?=$datos['numLote'];?>" class="form-control" id="Elote"></div>
                <div class="col-3 mt-3">
                    <label for="">Financiamiento</label>
                </div>
                <div class="col-9 mt-3">
                    <select class="form-control" id="Efuente">
                        <option value="<?=$datos['fFinanciamiento'];?>">Seleccione Fuente</option>
                        <?php
                    foreach ($fin as $f) {
                        ?>
                        <option value="<?= $f['idFuente']; ?>"><?= $f['descripcion']; ?></option>
                        <?php
                    }
                ?>
                    </select>
                </div>
                <div class="col-3 mt-3">
                    <label for="">Cantidad</label>
                </div>
                <div class="col-9 mt-3">
                    <input type="text" value="<?=$datos['cantidad'];?>" class="form-control" id="Ecantidad">
                </div>
                <div class="col-3 mt-3">
                    <label for="">Costo Unitario</label>
                </div>
                <div class="col-9 mt-3">
                    <input type="text" value="<?=$datos['costo_unitario'];?>" class="form-control" id="Ecosto">
                </div>
                <div class="col-3 mt-3">
                    <label for="">Producto</label>
                </div>
                <div class="col-9 mt-3">
                    <select name="" id="Eproducto" class="form-control">
                        <option value="<?=$datos['idProducto']?>"><?=$datos['descripcion'];?></option>

                        <?php
                    foreach ($pr as $r) {
                        ?>
                        <option value="<?= $r['idProducto']; ?>"><?= $r['descripcion']; ?></option>
                        <?php
                    }
                ?>
                    </select>
                </div>
                <div class="col-3 mt-3">
                    <label for="">Fecha Caducidad</label>
                </div>
                <div class="col-9 mt-3">
                    <input type="date" value="<?=date('Y-m-d',strtotime($datos['fecha_caducidad']));?>"
                        class="form-control" id="Efecha">
                </div>
                <div class="col-12" style="display:flex;justify-content:flex-end">
                    <button class="btn btn-success btn-lg"
                        onclick="setEntrada(<?=$datos['idEntrada'];?>);">Guardar</button>
                    <button class="btn btn-danger btn-lg uk-modal-close">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-del" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-body">
                <h2>Desea eliminar la entrada <?=$datos['folio'];?></h2>
                <button class="btn btn-secondary btn-lg" onclick="delen(<?=$datos['idEntrada'];?>);">
                    Si
                </button>
                <button class="btn btn-warning btn-lg uk-modal-close">
                    no
                </button>
            </div>
                
        </div>
    </div>
</div>