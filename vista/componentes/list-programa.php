<div class="table-responsive mt-1">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Numero del<br> programa<br>presupuestal</th>
                        <th scope="col">Nombre del programa presupuestal</th>
                        <th scope="col">Importe por<br>programa<br> presupuestal</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($rows as $row){?>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $row['numPrograma'];?></td>
                        <td><?php echo $row['nomPrograma'];?></td>
                        <td><?php echo '$ '.$row['importe'];?></td>
                        <td><span uk-icon="pencil" class="btn btn-success" uk-toggle="target: #modal-edit-<?=$row['idPrograma'];?>" ></span>
                        <span class="btn btn-danger" uk-icon="trash" uk-toggle="target: #modalDel-<?=$row['idPrograma'];?>" ></span>
                        
                        <!--MODAL PARA EDISTAR-->
                    <div id="modal-edit-<?=$row['idPrograma'];?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-modal-header">
                                <h2 class="uk-modal-title">Editar Programa</h2>
                            </div>
                            <div class="uk-modal-body">
                                <form action="../controlador/ctrlPrograma.php" method="POST">
                                    <div class="row form-group">
                                        <input type="hidden" name="accion" value="editar">
                                        <input type="hidden" name="valor" value="<?=$row['idPrograma'];?>">
                                        <div class="col-4">
                                            <label for="">Numero Programa</label>
                                        </div>
                                        <div class="col-7">
                                            <input type="number" name="numero" class="form-control" value="<?= $row['numPrograma'];?>">
                                        </div>
                                        <div class="col-4 mt-4">
                                            <label for="">Nombre Programa</label>
                                        </div>
                                        <div class="col-7 mt-4">
                                            <input type="text" name="nombre" class="form-control" value="<?= $row['nomPrograma'];?>"> 
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
                    <div id="modalDel-<?=$row['idPrograma'];?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-modal-header">
                                <h2 class="uk-modal-title">Eliminar Programa</h2>
                            </div>
                            <div class="uk-modal-body">
                               <h4><strong>Desea eliminar <i><?=$row['nomPrograma'];?></i> </strong> </h4>
                            </div>
                            <div class="uk-modal-footer d-flex justify-content-end">
                                <button class="btn btn-lg btn-warning" onclick="delPar(<?=$row['idPrograma'];?>);">Eliminar</button>
                                <button class="btn btn-lg btn-danger ml-4 uk-modal-close">Cancelar</button>
                            </div>
                        </div>
                    </div>
                    
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>