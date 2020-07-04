<div id="modelEdit-<?php echo $dato['idProducto']?>" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body">
                            <h2 class="uk-modal-title">Editar Producto <?php echo $dato['descripcion']?>
                            </h2>
                            <div class="uk-modal-body">
                                <div class="col-auto">
                                    <label class="sr-only" for="">Clave</label>
                                    <div class="input-group mb-2">
                                        <div class="d-none d-md-block input-group-prepend ">
                                            <div class="input-group-text" style="padding-right:83px;">Clave</div>
                                        </div>
                                        <input type="text" class="form-control" id=""
                                            placeholder="Clave">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <label class="sr-only" for="">Unidad Medida</label>
                                    <div class="input-group mb-2">
                                        <div class="d-none d-md-block input-group-prepend">
                                            <div class="input-group-text">Unidad Medida</div>
                                        </div>
                                        <input type="text" class="form-control" id=""
                                            placeholder="Unidad Medida">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <label class="sr-only" for="">Descripcion</label>
                                    <div class="input-group mb-2">
                                        <div class="d-none d-md-block input-group-prepend">
                                            <div class="input-group-text" style="padding-right:39px;">Descripcion</div>
                                        </div>
                                        <input type="text" class="form-control" id=""
                                            placeholder="Descripcion">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-modal-footer justity-content-rigth">
                                <button class="btn btn-success" type="button"
                                    onclick="eliminarDato(<?php echo $dato['idProducto']; ?>)">Si, ELiminar</button>
                                <button class="uk-modal-close btn btn-warning" type="button">Cancelar</button>
                            </div>
                        </div>
                    </div>