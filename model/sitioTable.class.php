<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sitioTable
 *
 * @author Harold
 */

use FSstudio\model\base\sitioBaseTable;


class sitioTable extends sitioBaseTable {
  public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT  sit_id as id, sit_nombre as nombre,'
                .'sit_descripcion as descripcion,cat_id as categoria_id,'
                .'sit_direccion as direccion,sit_telefono as telefono,'
                .'sit_latitud as latitud,sit_longitud as longitud,'
                .'est_id as estado_id,sit_facebook as facebook,'
                .'sit_twitter as twitter,sit_google as google,'
                .'sit_created_at as created_at,sit_update_at as update,'
                .'sit_delete_at as deleted,usu_id as usuario_id,'
                .'FROM bdp_sitio'
                .'WHERE sit_delete is null'
                .'ORDER by sit_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute();
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FECTH_OBJ) : false;
    }
      public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT  sit_id as id, sit_nombre as nombre,'
                .'sit_descripcion as descripcion,cat_id as categoria_id,'
                .'sit_direccion as direccion,sit_telefono as telefono,'
                .'sit_latitud as latitud,sit_longitud as longitud,'
                .'est_id as estado_id,sit_facebook as facebook,'
                .'sit_twitter as twitter,sit_google as google,'
                .'sit_created_at as created_at,sit_update_at as update,'
                .'sit_delete_at as deleted,usu_id as usuario_id,'
                .'FROM bdp_sitio'
                .'WHERE sit_delete is null'
                .'AND sit_id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getsit_id()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
    
    public function save() {
        $conn =  $this->getAllConnection($this->config);
        $sql = 'INSERT INTO id'
                 . '(sit_id, sit_nombre, sit_descripcion) '
            . 'VALUES (:id, :nombre,:descripcion)';
        $params = array(
          ':id'=> $this->getId(),
        ':nombre'=>$this->getNombre(),
          ':activo'=>$this->getcActivo()  
        );
        
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId;
         return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }
    
    

public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'update bdp_sitio SET'
              .'sit_id = :id,'
              .'sit_nombre = :nombre,'
              .'sit_descripcion = :descripcion';
      $params = array(
          ':id'=> $this->getcId(),
        ':nombre'=>$this->getNombre(),
          ':activo'=>$this->getActivo()  
        );
       
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
         ':id'=> $this->getId(),
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bdp_sitio set sit_deleted_at = now () WHERE sit_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bdp_sitio WHERE sit_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}