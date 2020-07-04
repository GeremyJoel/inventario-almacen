<div class="uk-card uk-card-hover uk-card-default uk-card-body">
    <h3 class="uk-card-title">Lista de Productos</h3>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th><strong>Clave</strong></th>
                    <th><strong>Nombre</strong></th>
                    <th><strong>Unidad Medida</strong></th>
                    <th><strong>Existencia</strong></th>
                    <th><strong>Acciones</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($datos as $dato) {
                        ?>
                <tr>
                    <td><?php echo $dato["clave"]; ?></td>
                    <td><?php echo $dato["descripcion"]; ?> </td>
                    <td><?php echo $dato["unidad_medida"]; ?> </td>
                    <td><?php echo $dato["existencia"]; ?> </td>
                    <td> <button type="button" class="btn btn-warning"
                            uk-toggle="target: #modelEdit-<?php echo $dato['idProducto'];?>">Editar</button>
                        <button type="button" class="btn btn-danger"
                            uk-toggle="target: #modelId-<?php echo $dato['idProducto'];?>">Eliminar</button>
                            <div id="modelId-<?php echo $dato['idProducto']?>" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body">
                            <h2 class="uk-modal-title">Seguro Desea Eliminar <?php echo $dato['descripcion']?>
                            </h2>
                            <div class="uk-modal-body">
                            </div>
                            <div class="uk-modal-footer justity-content-rigth">
                                <button class="btn btn-success" type="button"
                                    onclick="eliminarDato(<?php echo $dato['idProducto']; ?>)">Si, ELiminar</button>
                                <button class="uk-modal-close btn btn-warning" type="button">Cancelar</button>
                            </div>
                        </div>
                    </div>


                    <!--MODAL PARA EDISTAR-->
                    <div id="modelEdit-<?php echo $dato['idProducto'];?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-modal-header">
                                <h2 class="uk-modal-title">Editar Producto</h2>
                            </div>
                            <div class="uk-modal-body">
                                <form action="../controlador/ctrlProducto.php" method="POST">
                                    <div class="row form-group">
                                        <input type="hidden" name="accion" value="editar">
                                        <input type="hidden" name="valor" value="<?=$dato['idProducto'];?>">
                                        <div class="col-4">
                                            <label for="">Clave</label>
                                        </div>
                                        <div class="col-7">
                                            <input type="text" name="clave" class="form-control" value="<?= $dato['clave'];?>">
                                        </div>
                                        <div class="col-4 mt-4">
                                            <label for="">Unidad Medida</label>
                                        </div>
                                        <div class="col-7 mt-4">
                                            <input type="text" name="UM" class="form-control" value="<?= $dato['unidad_medida'];?>">
                                        </div>
                                        <div class="col-4 mt-4">
                                            <label for="">Nombre</label>
                                        </div>
                                        <div class="col-7 mt-4">
                                            <input type="text" name="nombre" class="form-control" value="<?= $dato['descripcion'];?>"> 
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
                    </td>
                </tr>

                <?php
                    }
                    ?>
            </tbody>
        </table>
    </div>
</div>