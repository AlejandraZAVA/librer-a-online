<?php
include('db.php');

if(isset($_POST['save_task']))
{
$title=$_POST['title'];
$description=$_POST['description'];
$contador=0;

$query="INSERT INTO task(title,description) VALUES ('$title','$description')";
$result=mysqli_query($conn,$query);
if(!$result)
{
    die("query failed");
}
$_SESSION['message']='Libro cargado correctamente';
$_SESSION['message_type']='success';
$contador++;

header("Location:index.php");
}
?>