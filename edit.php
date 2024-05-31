<?php 
include('db.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['description'];
    }
    
    if(isset($_POST['update'])) {
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $query = "UPDATE task SET title = '$title', description = '$description' WHERE id = $id";
        mysqli_query($conn, $query);
        $_SESSION['message'] = 'Libro editado correctamente';
        $_SESSION['message_type'] = 'warning';
        header('location:index.php');
    }
}
?>

<?php include('includes/header.php'); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Actualizar Libro</h4>
                </div>
                <div class="card-body">
                    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Título</label>
                            <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" id="title" placeholder="Actualiza el título">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descripción</label>
                            <textarea name="description" rows="2" class="form-control" id="description" placeholder="Actualiza la descripción"><?php echo $description; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" name="update">Guardar Cambios</button>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
