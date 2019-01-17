<?php 
include("main.class.php");
$alumno = new tutoria;
$consulta = "SELECT a.nombre as NombreAlumno, a.NumControl, t.nombre as NombreTutor, m.nombre as NombreMateria, m.idmateria from kardex as k
                join alumnos a on k.NumControl = a.NumControl
                join tutores t on a.idtutor = t.idtutor
                join clases c on k.idclase = c.idclase
                join materias m on c.idmateria = m.idmateria GROUP BY a.NumControl";
$arreglo = $alumno -> sqlArray($consulta);
echo json_encode($arreglo)


?>