<?php


use portarWebBuga\model\base\imagenBaseTable;
/**
 * Description of imagenTable
 *
 * @author lizethgiraldo
 */
class imagenTable extends imagenBaseTable {
 public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT img_id AS ID, eve_id AS EVE, sit_id AS SIT, img_ruta AS RUTA'
            . 'FROM bdp_imagen'
            . 'ORDER BY rol_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
  
   public function getById($id = null){
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT img_id AS ID, eve_id AS EVE, sit_id AS SIT, img_ruta AS RUTA';
    $params = array(
        ':id' => ($id !== null) ? $id : $this ->getId());
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
  
   public function save() {
     $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO imagen'
            . '(img_id,  eve_id, sit_id, img_ruta)'
            . 'VALUES (:id, :eve, :sit, :ruta)';

    $params = array(
        ':id' => $this->getId(),
        ':eve' => $this->getEve(),
        ':sit' => $this->getSit(),
        ':ruta' => $this->getRuta(),
            );

    $answer = $conn->prepare($sql);
    $answer -> execute ($params);
    $this->setId($conn->lastInsertId());
    return true;
   }
   
   public function update() {
    $conn = $this->getConnection($this->config);
    //dudas con el update si va o no??
    $sql = '';
    $params = array(
        ':id' => $this->getId(),
        ':eve' => $this->getEve(),
        ':sit' => $this->getSit(),
        ':ruta' => $this->getRuta(),
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
        //dudas respecto a esto!!
        $sql = '';
        break;
      case false:
        $sql = '';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  } 
 
  
 }

