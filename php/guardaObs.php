<?php 
include('main.class.php');
$kardex = new tutoria;

if(isset($_POST['idkardexT'])){
    $idkardex = $_POST['idkardexT'];
    $observacion = $_POST['observacionT'];
    $fila = $_POST['filaT'];
    
    if($fila == 'obser1t'){
        $query = "UPDATE kardex SET obser1t = '$observacion' WHERE idkardex = $idkardex";
        $kardex->sqlArray($query);
        echo json_encode('CORRECTO OBSER1');
    }
    else if($fila == 'obser2t' ){
        $query = "UPDATE kardex SET obser2t = '$observacion' WHERE idkardex = $idkardex";
        $kardex->sqlArray($query);
        echo json_encode('CORRECTO OBSER2');
    }
    else if($fila == 'obser3t' ){
        $query = "UPDATE kardex SET obser3t = '$observacion' WHERE idkardex = $idkardex";
        $kardex->sqlArray($query);
        echo json_encode('CORRECTO OBSER3');
    }
    else if($fila == 'obser4t' ){
        $query = "UPDATE kardex SET obser4t = '$observacion' WHERE idkardex = $idkardex";
        $kardex->sqlArray($query);
        echo json_encode('CORRECTO OBSER4');
    }
    else{
        echo json_encode('INCORRECTO ALV T');
    }
}else {
    $idkardex = $_POST['idkardex'];
    $observacion = $_POST['observacion'];
    $fila = $_POST['fila'];

    if($fila == 'obser1' ){
        $query = "UPDATE kardex SET obser1= '$observacion' WHERE idkardex = $idkardex";
        $kardex->sqlArray($query);
        echo json_encode('CORRECTO OBSER1');
    }
    else if($fila == 'obser2' ){
        $query = "UPDATE kardex SET obser2= '$observacion' WHERE idkardex = $idkardex";
        $kardex->sqlArray($query);
        echo json_encode('CORRECTO OBSER2');
    }
    else if($fila == 'obser3' ){
        $query = "UPDATE kardex SET obser3= '$observacion' WHERE idkardex = $idkardex";
        $kardex->sqlArray($query);
        echo json_encode('CORRECTO OBSER3');
    }
    else if($fila == 'obser4' ){
        $query = "UPDATE kardex SET obser4= '$observacion' WHERE idkardex = $idkardex";
        $kardex->sqlArray($query);
        echo json_encode('CORRECTO OBSER4');
    }
    else{
        echo json_encode('INCORRECTO ALV M');
    }
}

?>