<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aplicación Tutoría</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome/css/all.css">
    <script> src="js/funciones.js"</script>
  </head>
  <body onload="insertTable()">
    
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
        <div class="navbar-header">
            <img src="img/LogoItc.png" alt="logo" id="logoitc">
            <p class="navbar-brand titulo1">Instituto tecnológico de Celaya</p>
        </div>
            
        <div class="col-md-2 text-center" style="">
        <i class="fas fa-bell" style="color:white; font-size:25px;"></i>
        <i class="fas fa-dot-circle" style="color:white; font-size:20px; margin-right:50px;"></i>
        <i class="fas fa-user" style="color:white; font-size:25px;"></i>
        <i class="fas fa-caret-down" style="color:white; font-size:20px;"></i>
        </div>
  </div>
</nav>
<div class="col-md-8" style="background-color:#428bca; margin:30px auto;"><h2 class="titulo1"><i class="fas fa-user" style="color:white; font-size:22px;"></i>  Elso Garcia Torres</h2></div>
<div class="col-md-8 form-inline" style="margin: 15px auto;">
<select name="materiaProfesor" class="form-control" style="width:40%;" id="selectMateria" onchange = "filtrarMateria()">
  <option value="">--Filtrar por materia--</option>
  <option value="1">Sistemas Programables</option>
  <option value="2">Arquitectura de Computadoras</option>
  <option value="3">Principios Eléctricos</option>
  <option value="4">Matematicas Discretas</option>
</select>
<select name="tutor" class="form-control" style="width:40%;display:block; margin-left:20%;" id="selectTutor" onchange = "filtrarTutor()">
  <option value="">--Filtrar por tutor--</option>
  <option value="1">Elda Ramírez González</option>
  <option value="2">Norma Veronica</option>
  <option value="3">Ricardo Gonzalez Gonzalez</option>
  <option value="4">Claudia Mayela Alcaraz</option>
</select>
<div class="card-body">
          <div class="table-responsive text-center">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Foto</th>
                  <th>Nombre</th>
                  <th>Núm Control</th>
                  <th>Nombre del Tutor</th>
                  <th>Ver</th>               
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>Foto</th>
                  <th>Nombre</th>
                  <th>Núm Control</th>
                  <th>Nombre del Tutor</th>
                  <th>Ver</th>
                </tr>
              </tfoot>
              <tbody id="setTable">
              
              </tbody>
            </table>
          </div>
        </div>
</div>
<div class="card-footer small text-muted text-center">Developed by @TercerMireca.</div>
<script src="js/funciones.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

  </body>
</html>