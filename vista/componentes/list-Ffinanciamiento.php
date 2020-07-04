<div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Numero<br> progresivo</th>
                        <th scope="col">Descripcion de la fuente de financiamiento</th>
                        <th scope="col">Importe por<br>fuente de<br> financiamiento</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($rows as $row){?>
                    <tr name="lisa">
                        <td><?= $row['numFuente'];?></td>
                        <td><?= $row['descripcion'];?></td>
                        <td><?= ($row['importe'] == NULL) ? "$ 0.00" : "$ ".$row['importe'];?></td>
                        <td>
                            <button class="btn btn-warning" uk-toggle="target: #modal-edit-<?=$row['idFuente'];?>" ><span uk-icon="icon: pencil"></span></button>
                            <button class="btn btn-danger" uk-toggle="target: #modalDel-<?=$row['idFuente'];?>" ><span uk-icon="icon: trash"></span></button>
                            <!--MODAL PARA EDISTAR-->
                    <div id="modal-edit-<?=$row['idFuente'];?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-modal-header">
                                <h2 class="uk-modal-title">Editar Fuente Financiamiento</h2>
                            </div>
                            <div class="uk-modal-body">
                                <form action="../controlador/ctrlFinanciamiento.php" method="POST">
                                    <div class="row form-group">
                                        <input type="hidden" name="accion" value="editar">
                                        <input type="hidden" name="valor" value="<?=$row['idFuente'];?>">
                                        <div class="col-4">
                                            <label for="">Numero Fuente</label>
                                        </div>
                                        <div class="col-7">
                                            <input type="number" name="numero" class="form-control" value="<?=$row['numFuente'];?>">
                                        </div>
                                        <div class="col-4 mt-4">
                                            <label for="">Nombre Fuente</label>
                                        </div>
                                        <div class="col-7 mt-4">
                                            <input type="text" name="nombre" class="form-control" value="<?=$row['descripcion'];?>"> 
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-lg btn-secondary" type="submit">Aceptar</button>
                                        <button class="btn btn-lg btn-danger ml-3 uk-modal-close">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--MODAL PARA ELIMINAR-->
                    <div id="modalDel-<?=$row['idFuente'];?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-modal-header">
                                <h2 class="uk-modal-title">Eliminar Fuente</h2>
                            </div>
                            <div class="uk-modal-body">
                               <h4><strong>Desea eliminar <i><?=$row['descripcion'];?></i> </strong> </h4>
                            </div>
                            <div class="uk-modal-footer d-flex justify-content-end">
                                <button class="btn btn-lg btn-warning" onclick="delFin(<?=$row['idFuente'];?>);">Eliminar</button>
                                <button class="btn btn-lg btn-danger ml-4 uk-modal-close">Cancelar</button>
                            </div>
                        </div>
                    </div>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>