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
                        <td><?= '$ '.$row['importe'];?></td>
                        <td>
                            <button class="btn btn-warning"><span uk-icon="icon: pencil"></span></button>
                            <button class="btn btn-danger"><span uk-icon="icon: trash"></span></button>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>