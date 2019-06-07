<?php
session_start();   
if(!isset($_SESSION['usuario'])){
    header("location: ../index.php");
}elseif($_SESSION['rol'] != "admin"){
    if($_SESSION['rol'] == 'cliente'){
      header("location: ../clientes/index.php");
    }else{
      header("location: ../negocios/index.php");
    }
}
require_once("../includes/header.php");
require_once("../clases/baseDatos.php");
require_once("funciones.php");
$objBD = new baseDatos("localhost","line_commerce","root","mysql");
$noleidos = contar_mensajes($_SESSION['usuario'],$objBD);
?>
<!-- Menú Principal -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">
    <img src="../img/icono.png" width="32" height="32" class="d-inline-block align-top" alt="">
    Line Commerce
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Categorías
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?pg=categorias">Administrar Categorías</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?pg=subcategorias">Administrar Subcategorías</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?pg=admins">Administradores</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?pg=negocios">Negocios</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?pg=clientes">Clientes</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?pg=lista_productos">Listar Productos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?pg=gestion_productos">Gestionar Productos</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Index.php?pg=mensajes">Mensajes (<?php echo $noleidos ?>)</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Cerrar Sesión</a>
      </li>
    </ul>
  </div>
</nav>
<!-- Pie de Página -->
<?php
require_once("../includes/scripts.php");
?>
<?php
if(isset($_GET['pg'])){
    require_once($_GET['pg'].".php");
}else{
  $admins = contar("administrador",$objBD);
  $negocios = contar("vendedor",$objBD);
  $clientes = contar("cliente",$objBD);
  $categorias = contar("categoria",$objBD);
  $subcategorias = contar("sub_categoria",$objBD);
  $productos = contar("producto",$objBD);
  $pendientes = contar_pedidos(1,$objBD);
  $proceso = contar_pedidos(2,$objBD);
  $finalizados = contar_pedidos(3,$objBD);
  ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 mb-4">
      <div class="text-center">
        <h1 class="display-4">Bienvenido <?php echo $_SESSION['usuario'] ?></h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3">
      <div class="card text-white bg-primary mb-3">
        <div class="card-header">Usuarios</div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $admins ?> Administradores</h5>
          <h5 class="card-title"><?php echo $negocios ?> Negocios</h5>
          <h5 class="card-title"><?php echo $clientes ?> Clientes</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card text-white bg-danger mb-3">
        <div class="card-header">Productos</div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $categorias ?> Categorías</h5>
          <h5 class="card-title"><?php echo $subcategorias ?> Subcategorías</h5>
          <h5 class="card-title"><?php echo $productos ?> Productos</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card text-white bg-success mb-3">
        <div class="card-header">Pedidos</div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $pendientes ?> Pendientes</h5>
          <h5 class="card-title"><?php echo $proceso ?> En proceso</h5>
          <h5 class="card-title"><?php echo $finalizados ?> Finalizados</h5>          
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card text-white bg-warning mb-3">
        <div class="card-header">Mensajes</div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $noleidos ?> Sin leer</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
?>