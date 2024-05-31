<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería online</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- FONT AWESOME -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   
</head>

<style>
        .menu {
    background-color:#554800; /* Color con opacidad */
    padding: 15px;
    height: 100vh;
    overflow-y: auto;
    color: white;
    border-right: 1px solid #dee2e6;
}
.navbar-custom {
    background-color: #073155; /* Color #343a40 con opacidad */
    color: white;
}
.content {
    padding: 20px;
    opacity: 0.95; /* Ajusta la opacidad del contenido */
}
.menu-header {
    font-size: 1.2rem;
    margin-bottom: 1rem;
    font-weight: bold;
}
.menu-item, .menu-divider {
    margin-bottom: 1rem;
}
.menu-link {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px 15px;
    border-radius: 4px;
}
.menu-link:hover, .menu-link:focus {
    background-color: #D4C56A;
    text-decoration: none;
    color: white;
}
.menu-submenu {
    padding-left: 20px;
}
.menu-caret {
    float: right;
}
.menu-divider {
    border-top: 1px solid #dee2e6;
}
.button-right button {
    margin-left: 10px;
}

#encabezado
{
  margin:0px;
  padding:0px;
  color:black;
}

#icono_usuario
{
height: 20px;
width: 20px;

}

#cerrar_sesion
{
height: 20px;
width: 20px;
margin: 10px;
}

#navbar-brand
{
    margin-left: 200px;
    color: #000000;
    font-family: sans-serif;
    font-size: 36px;
    
}


</style>
<div class="container-fluid" id="card">
    <div class="row">
        <nav class="col-md-2 col-sm-12 menu">
            <div class="menu-header">
            <i class="fas fa-book"></i>
                <span class="menu-text">Oasis de Tinta y Papel</span>
            </div>
            <div class="menu-item">
                <a href="inicio.php" class="menu-link">
                    <i class="fas fa-home"></i>
                    <span class="menu-text">Inicio</span>
                </a>
            </div>
            <div class="menu-divider"></div>
            <div class="menu-header">
            <i class="fas fa-book-open"></i>
                <span class="menu-text">Libros</span>
            </div>
            <div class="menu-item">
                <a href="index.php" class="menu-link">
                <i class="fa-solid fa-book-open-reader"></i><span class="menu-text">Crear Nuevo</span>
                </a>
                <a href="lista.php" class="menu-link">
                    <i class="fas fa-search"></i>
                    <span class="menu-text">Buscar</span>
                </a>
            </div>
            
            <div class="menu-divider"></div>
            <div class="menu-header">
                <i class="fas fa-sign-out-alt"></i>
                <span class="menu-text">Cerrar Sesión</span>
            </div>
            <div class="menu-item">
                <a href="#" class="menu-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="menu-text">Salir del Sistema</span>
                </a>
            </div>
        </nav>
        <div class="col-md-10 col-sm-12" id="encabezado">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <a href="#" class="navbar-brand" id="navbar-brand">Oasis de Tinta y Papel - librería online</a>
                    <div class="user-info">
                        <h6><i class="fas fa-user" id="icono_usuario"></i>  Alejandra Zapién Vázquez</h6>
                        <h6>zapienvazqueza@gmail.com</h6>
                    </div>
                </div>
            </div>
            <br>
