<div class="uk-card uk-card-hover uk-card-default uk-card-body">
    <h3 class="uk-card-title">Lista de Productos</h3>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th><strong>Clave</strong></th>
                    <th><strong>Descripción</strong></th>
                    <th><strong>Unidad Medida</strong></th>
                    <th><strong>Existencia</strong></th>
                    <th><strong>Acciones</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($datos as $dato) {
                        ?>
                <tr>
                    <td><?php echo $dato["clave"]; ?></td>
                    <td><?php echo $dato["descripcion"]; ?> </td>
                    <td><?php echo $dato["unidad_medida"]; ?> </td>
                    <td><?php echo $dato["existencia"]; ?> </td>
                    <td> <button type="button" class="btn btn-warning">Editar</button>
                        <button type="button" class="btn btn-danger"
                            uk-toggle="target: #modelId-<?php echo $dato['idProducto']?>">Eliminar</button>
                    </td>


                    <div id="modelId-<?php echo $dato['idProducto']?>" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body">
                            <h2 class="uk-modal-title">Seguro Desea Eliminar <?php echo $dato['descripcion']?>
                            </h2>
                            <div class="uk-modal-body">
                            </div>
                            <div class="uk-modal-footer justity-content-rigth">
                                <button class="btn btn-success" type="button"
                                    onclick="eliminarDato(<?php echo $dato['idProducto'];?>)">Si, ELiminar</button>
                                <button class="uk-modal-close btn btn-warning" type="button">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </tr>

                <?php
                    }
                    ?>
            </tbody>
        </table>
    </div>
</div>