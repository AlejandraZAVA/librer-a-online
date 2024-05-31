<?php include('db.php');?>
<?php include('includes/header.php');?>
<?php include('includes/footer.php');?>

<?include('save_task.php');?>

<h2 style="margin-left:400px">Novedades Recientes</h2>

<style>
    .main {
        max-height: 400px; /* Tamaño fijo */
        overflow-y: auto; /* Agrega scroll cuando el contenido excede la altura */
        margin-left:350px;
    }
</style>
<div class="main">
    <?php
    $query = "SELECT * FROM task";
    $result_task = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($result_task)) { ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-8">
                        <h6><?php echo $row['title'] ?> - Fecha de creación: <?php echo $row['created_at'] ?></h6>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title'] ?></h5>
                            <p class="card-text"><?php echo $row['description'] ?></p>
                        </div>
                    </div>
                </div>
                <!-- Repite esta estructura para cada libro -->
            </div>
        </div>
    <?php } ?>

</div>
<i class="fas fa-arrow-alt-circle-down" style="margin-left:900px">Abajo para ver más...</i>

    

    
