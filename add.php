<?php
include('../config/config.php');
include('paciente.php');


if (isset($_POST) && !empty($_POST)){
    /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */
  
    $data= new ingreso(); /* LLAMO A MI LIBRO DE RECETAS */
  
    if ($_FILES['pdf']['name'] !== ''){
      $_POST['pdf'] = saveImage($_FILES);
    }
  
    $save = $data-> save($_POST); /* UTILICE LA RECETA SAVE */
    if($save){
      $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div> ';
    }else{
      $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
    }
  }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href=". .estilos.css">




    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  </head>

<body>
 
<!-- Barra de Navegación -->
<nav class="navbar navbar-expand-lg bg-body-tertiary barra">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img src="../imagenes/logo2.png " alt=""width="50px"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav letra">
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pagina1.html">Consejos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="add.php">Separa una Cita</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Servicios
            </a>
            <ul class="dropdown-menu letra">
              <li><a class="nav-link dropdown-item" href="./empresas.html">Empresas</a></li>
              <li><a class="nav-link dropdown-item" href="./particulares.html">Particulares</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container-fluid">

<?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
?>
            <h2 class="tex-center nb-2">Registrar Sesión</h2>

        <form method="POST" enctype="multipart/form-data">

            <div class="row mb-2">
            <div class="col-md-6">
                    <input type="text" name="nombres" id="nombres" placeholder="Nombres del Paciente" class="form-control" />

            </div>
            <div class="col-md-6">
                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos del Paciente" class="form-control" />

            </div>

            
            <div class="col-md-6">
                    <input type="email" name="email" id="email" placeholder="Email del Paciente" class="form-control" />

            </div>
            <div class="col-md-6">
                <input type="text" name="celular" id="celular" placeholder="Celular del Paciente" class="form-control" />

            </div>

            
            <div class="col-md-6">
                    <textarea id="enfermedades" name="enfermedades" placeholder="Enfermedades del Paciente" class="form-control"></textarea>


            </div>
            <div class="col-md-6">
                <input type="text" name="duracionsecion" id="duracionsecion" placeholder="Duracion Sesion" class="form-control" />

            </div>

            
            <div class="col-md-6">
                    <input type="datetime-local" name="fecha" id="fecha"  class="form-control" />

            </div>
            <div class="col-md-6">
                <input type="file" name="pdf" id="pdf"  class="form-control" />

            </div>
</div>
<div class="col-12">
    <button  class="btn btn-primary">Registrar</button>
  </div>
        </form>

        </div>        
        </div> 

        <a href="edit.php?id=1">Editar paciente 1</a>
    </body>
</html>




