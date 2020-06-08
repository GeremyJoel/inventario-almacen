<div class="uk-card uk-card-large uk-card-default uk-card-body">
    <h3 class="uk-card-title">Ultimo Registro</h3>
    <div class="table-responsive mt-1">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Folio</th>
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
                    <td><span uk-icon="pencil" class="btn btn-success"></span><span class="btn btn-danger"
                            uk-icon="trash"></span></td>
                </tr>

            </tbody>
        </table>
    </div>

</div>