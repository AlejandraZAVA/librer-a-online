<?php include('db.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="DELETE FROM task WHERE id=$id";
   $result= mysqli_query($conn,$query);
    if(!result)
    {
        die('query failed');
    }
    $_SESSION['message']='Eliminado correctamente';
    $_SESSION['message_type']='danger';
    header('location:lista.php');
}
?>
<?php include('includes/header.php');?>