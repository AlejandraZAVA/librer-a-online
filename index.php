<?php include('db.php');?>
<?php include('includes/header.php');?>
<?include('save_task.php');?>
<?php include('includes/footer.php');?>

<div class="container mt-5">
    <?php if(isset($_SESSION['message'])){?>
        <div class="alert alert-<?=$_SESSION['message_type'] ?> alert-dismissible fade show " role="alert">
            <?=$_SESSION['message'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php session_unset(); } ?>
     <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Escribe el Título..." autofocus required>
                    </div>
                    <div class="form-group">
                        <textarea name="description" row="2" class="form-control" placeholder="Escribe la descripción..."autofocus required></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Guardar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div style="max-height: 300px; overflow-y: auto;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Fecha de registro</th>
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
                                        <i class="far fa-trash-alt "></i> 
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
