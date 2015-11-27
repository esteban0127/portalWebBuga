<?php

use portarWebBuga\model\base\itinerarioTable;

/**
 * Description of itinerarioTable
 *
 * @author lizethgiraldo
 */
class itinerarioTable extends itinerarioTable {
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT  iti_id AS id , usu_id AS usuario , sit_id AS sit , iti_posicion AS posicion'
            . 'iti_created_at AS created_at , iti_update_at AS update_at ,'
            . 'iti_delete_at AS delete_at '
            . 'FROM bdp_itinerario'
            . 'WHERE iti_deleted_at IS NULL'
            . 'ORDER BY created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
  
   public function getById($id =null){
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT  iti_id AS id , usu_id AS usuario , sit_id AS sit , iti_posicion AS posicion'          
            . 'iti_created_at AS created_at , iti_update_at AS update_at ,'
            . 'iti_delete_at AS delete_at '
            . 'FROM bdp_itinerario'
            . 'WHERE iti_deleted_at IS NULL  '
            . 'AND iti_id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this ->getId());
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
  
   public function save() {
     $conn = $this->getConnection($this->config);
    $sql = 'INSER INTO bdp_itinerario'
            . '(iti_id, iti_usuario, sit_id, eve_id)'
            . 'VALUES (:id, :usuario,:sit_id, :iti_posicion)';
    $params = array(
        ':usuario'=>  $this->getUsuario(),
        ':sit_id' => $this->getSit(),
        ':iti_posicion' => $this->getPosicion()
    );
    $answer = $conn->prepare($sql);
    $answer -> execute ($params);
    $this->setId($conn->lastInsertId());
    return true;
   }
   
   public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bdp_itinerario SET iti_usuario = :usuario, sit_id = :sit_id,'
            . 'iti_posicion= :iti_posicion'
            . 'WHERE iti_id = :id';
    $params = array(
        ':usuario' => $this->getUsuario(),
        ':sit_id' => $this->getSit(),
        ':iti_posicion' => $this->getPosicion(),
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }
  
  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bdp_itinerario SET iti_deleted_at = now() WHERE iti_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bdp_itinerario WHERE iti_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }
}
