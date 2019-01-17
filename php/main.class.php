<?php


class tutoria {
  var $db = NULL;
  function conexion(){
    $usuario="root";
    $contraseña="mirecatres3";
    $dbname="proyecto_tutoria";
    $sgbd="mysql";
    $host="localhost";
    $this->db= new PDO($sgbd.':host='.$host.';dbname='.$dbname,$usuario,$contraseña,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
  }
  function sqlArray($sql){
    if(!Empty($sql)){
    $this->conexion();
    header('Content-Type: text/html; charset=utf-8');
    $datos=array();
    foreach($this-> db->query($sql)->fetchAll(PDO::FETCH_ASSOC) as $fila) {
           array_push($datos, $fila);
       }
       return $datos;
    }
    else{
      die('Es necesario definir una consulta');
    }
  }



}
 ?>