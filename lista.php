<?php include('db.php');?>
<?php include('includes/header.php');?>
<?include('save_task.php');?>




    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="text-center">Lista de Libros Activos</h3>
                </div>
                <div class="card-body" style="max-height: 300px; overflow-y: auto;">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Título</th>
                                <th>Descripción</th>
                                <th>Creado en</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM task";
                            $result_task = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_array($result_task)) { ?>
                                <tr>
                                    <td><?php echo $row['title'] ?></td>
                                    <td><?php echo $row['description'] ?></td>
                                    <td><?php echo $row['created_at'] ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary btn-sm">
                                            <i class="fa fa-marker"></i>
                                        </a>
                                        <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php');?>



