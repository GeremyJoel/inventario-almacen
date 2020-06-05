<div class="table-responsive mt-1">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Numero de<br> partida<br>presupuestal</th>
                        <th scope="col">Nombre de la partida presupuestal</th>
                        <th scope="col">Importe por<br>partida <br> presupuestal</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php $con=1; foreach($rows as $row){?>
                    <tr>
                        <th scope="row"><?=$con++;?></th>
                        <td><?php echo $row['numPartida'];?></td>
                        <td><?php echo $row['nombre'];?></td>
                        <td><?php echo '$ '.$row['importe'];?></td>
                        <td><span uk-icon="pencil" class="btn btn-success"></span><span class="btn btn-danger" uk-icon="trash"></span></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>