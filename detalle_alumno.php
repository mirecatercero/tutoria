<?php
  include("php/main.class.php");
  $numControl = $_GET['nc'];
  $idmateria = $_GET['idmateria'];
  $alumno = new tutoria;
  $consulta = "SELECT a.nombre as nombreAlumno, a.NumControl as NumControl, m.nombre as NombreMateria, k.idkardex, k.parcial1, k.parcial2, k.parcial3, k.parcial4, k.obser1, k.obser2, k.obser3, k.obser4 from kardex as k
                join alumnos a on k.NumControl = a.NumControl
                join tutores t on a.idtutor = t.idtutor
                join clases c on k.idclase = c.idclase
                join materias m on c.idmateria = m.idmateria 
                where a.NumControl = $numControl and m.idmateria = $idmateria ";
  $array = $alumno -> sqlArray($consulta);
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aplicación Tutoría</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome/css/all.css">
    <link rel="" href="/css/sweetalert2.css">

  </head>
  <body>
    
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
  <div class="col-md-8" style="background-color:#008ccd; margin:30px auto;"><h2 class="titulo1"><i class="fas fa-user" style="color:white; font-size:18px;"></i><?php echo $array[0]['nombreAlumno']; ?></h2></div>
  <div class="row justify-content-md-center" style="width:100%;">
      <div class="col-md-2 text-center"><label><img src="img/students/<?php echo $array[0]['NumControl']; ?>%20.JPG" alt="" style="width:170px;height:140px;"></label></div>
      <div class="col-md-4">
          <label><?php echo $array[0]['NumControl']; ?></label><br>
          <label>Especialidad: Ingenieria en Sistemas Computacionales</label><br>
          <label>Inscrito: Sí</label><br>
          <label>Estatus: VI-Vigente</label> 
      </div>
      <div class="col-md-2">
          <img src="img/logotec.png" style="width:98%;">
      </div>
  </div>
  <div class="col-md-8" style="background-color:#008ccd; margin:30px auto;"><h2 class="titulo1"><i class="fa fa-table" style="color:white; font-size:18px;"></i>   Materia: <?php echo $array[0]['NombreMateria'] ?></h2></div>

<div class="table-responsive text-center col-md-8 justify-content-md-center" style="margin:30px auto;">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
              <thead style="background-color:#00537c;color:white;">
                <tr>
                  <th>Parcial</th>
                  <th>Calificación</th>
                  <th>Insertar observación al alumno</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><?php echo $array[0]['parcial1'] ?></td>
                  <td class="form-inline"><input type="text" class="form-control" style="width:90%;" placeholder="Insertar Observación" value="<?php echo $array[0]['obser1'] ?>" id="obser1"> <a onclick="guardaObs('obser1','<?php echo $array[0]['idkardex']?>')"><i class="far fa-save" style="font-size:35px;color:gray;"></i></a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><?php echo $array[0]['parcial2'] ?></td>
                  <td class="form-inline"><input type="text" class="form-control" style="width:90%;" placeholder="Insertar Observación" value="<?php echo $array[0]['obser2'] ?>" id="obser2"> <a onclick="guardaObs('obser2','<?php echo $array[0]['idkardex']?>')"><i class="far fa-save" style="font-size:35px;color:gray;"></i></a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><?php echo $array[0]['parcial3'] ?></td>
                  <td class="form-inline"><input type="text" class="form-control" style="width:90%;" placeholder="Insertar Observación" value="<?php echo $array[0]['obser3'] ?>" id="obser3"><a onclick="guardaObs('obser3','<?php echo $array[0]['idkardex']?>')"> <i class="far fa-save" style="font-size:35px;color:gray;"></i></a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><?php echo $array[0]['parcial4'] ?></td>
                  <td class="form-inline"><input type="text" class="form-control" style="width:90%;" placeholder="Insertar Observación" value="<?php echo $array[0]['obser4'] ?>" id="obser4"> <a onclick="guardaObs('obser4','<?php echo $array[0]['idkardex']?>')"><i class="far fa-save" style="font-size:35px;color:gray;"></i></a></td>
                </tr>
              </tbody>
            </table>
</div>
<div>

</div>

<div class="card-footer small text-muted text-center">Developed by @TercerMireca.</div>
<script src="js/sweetalert2.all.min.js"></script>
<script src="js/funciones.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
  </body>
</html>