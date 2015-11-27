<?php

use portalWebBuga\model\base\pqrsf_respuestaBaseTable;
/**
 * Description of pqrsf_respuestaTable
 *
 * @author Angel
 */
class pqrsf_respuestaTable extends pqrsf_respuestaTable  {
 public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT  res_id AS id , pqrsf_id AS pqrsf , usu_id AS usuario ,'
            . 'res_created_at AS created_at , res_update_at AS update_at ,'
            . 'res_delete_at AS delete_at '
            . 'FROM bdp_pqrsf_respuesta'
            . 'WHERE res_deleted_at IS NULL  '
            . 'ORDER BY created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
  
   public function getById($id = null){
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT  res_id AS id , pqrsf_id AS pqrsf , usu_id AS usuario ,'
            . 'res_created_at AS created_at , res_update_at AS update_at ,'
            . 'res_delete_at AS delete_at '
            . 'FROM bdp_pqrsf_respuesta'
            . 'WHERE res_deleted_at IS NULL  '
            . 'AND res_id = :id';
    $params = array(
        ':id' => $id
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
  
   public function save() {
     $conn = $this->getConnection($this->config);
    $sql = 'INSER INTO bdp_pqrsf_respuesta'
            . '(res_id, res_pqrsf_id,usu_id)'
            . 'VALUES (:id,:pqrsf,:usuario)';
    $params = array(
        ':pqrsf'=>  $this->getId(),
        ':usuario' => $this->getUsuario(),
        );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
   }
   
   public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bdp_pqrsf_respuesta SET usu_id = :usuario, res_id = :res_id,'
            . 'WHERE res_id = :id';
    $params = array(
        ':pqrsf'=>  $this->getId(),
        ':usuario' => $this->getUsuario(),
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
        $sql = 'UPDATE bdp_pqrsf_respuesta SET res_deleted_at = now() WHERE res_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bdp_pqrsf_respuesta WHERE res_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }
}
