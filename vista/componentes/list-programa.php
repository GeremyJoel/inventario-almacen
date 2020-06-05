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
                        <td><span uk-icon="pencil" class="btn btn-success"></span><span class="btn btn-danger" uk-icon="trash"></span></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>