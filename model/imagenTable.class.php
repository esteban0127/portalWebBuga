<?php


use portarWebBuga\model\base\imagenBaseTable;
/**
 * Description of imagenTable
 *
 * @author lizethgiraldo
 */
class imagenTable extends imagenBaseTable {
  
  public function getAll (){
    
    $conn = $this -> getConnection ($this->config);
    $sql = 'SELECT img_id AS ID, eve_id AS EVE, sit_id AS SIT, img_ruta AS RUTA'
            . 'FROM bdp_imagen'
            . 'ORDER BY rol_created_at ASC';
    
    $answer = $conn -> prepare ($sql);
    $answer ->execute();
    return ($answer -> rowCount() > 0) ? $answer-> fetchAll (PDO::FETCH_OBJ) : false;
  }
  
  public function getById(){
   $conn = $this -> getConnection ($this->config);
    $sql = 'SELECT img_id AS ID, eve_id AS EVE, sit_id AS SIT, img_ruta AS RUTA'
            . 'FROM bdp_imagen'
            . 'AND img_id = :id';
    
    
    $params = array(':id' = $id);
    $answer = $conn -> prepare ($sql);
    $answer -> execute ($params);
    return ($answer -> rowCount() > 0) ? $answer-> fetchAll (PDO::FETCH_OBJ) : false;  
  }
  
  public function save(){
   $conn = $this -> getConnection ($this->config);
    $sql = 'INSERT INTO imagen'
            . '(img_id,  eve_id, sit_id, img_ruta)';
            . 'VALUES (:id, :eve, :sit, :ruta)';
    
    $params = array(
        ':id' => $this->getId(),
        ':eve' => $this->getEve(),
        ':sit' => $this->getSit(),
        ':ruta' => $this->getRuta(),
            );
    $answer = $conn -> prepare ($sql);
    $answer -> execute ($params);
    return $conn->lastInsertId(self::_SEQUENCE);  
  }
 
    $answer = $conn->prepare($sql);
    $answer -> execute ($params);
    return true;  
  }
  
  
}
