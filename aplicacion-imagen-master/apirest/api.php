<?php

class Api{

public function getImagenes(){

   $vector = array();
   $conexion = new Conexion();
   $db = $conexion->getConexion();
   $sql = "SELECT * FROM galeria";
   $consulta = $db->prepare($sql);
   $consulta->execute();
   while($fila = $consulta->fetch()) {
       $vector[] = array(
         "id" => $fila['id'],
         "descripcion" => $fila['descripcion'],
         "imagen" =>  base64_encode($fila['imagen']));
         }//fin del ciclo while 

   return $vector;
}


public function addImagen($descripcion, $imagen){
  
  $conexion = new Conexion();
  $db = $conexion->getConexion();
  $sql = "INSERT INTO galeria (descripcion, imagen) VALUES (:descripcion,:imagen)";
  $consulta = $db->prepare($sql);
  $consulta->bindParam(':descripcion', $descripcion);
  $consulta->bindParam(':imagen', $imagen);
  $consulta->execute();

  return '{"msg":"imagen agregada"}';
}

public function deleteImagen($id){
  
  $conexion = new Conexion();
  $db = $conexion->getConexion();
  $sql = "DELETE FROM galeria WHERE id=:id";
  $consulta = $db->prepare($sql);
  $consulta->bindParam(':id', $id); 
  $consulta->execute();

  return '{"msg":"imagen eliminada"}';
}




}

?>