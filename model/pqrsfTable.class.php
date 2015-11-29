<?php


use FSstudio\model\base\usuarioBaseTable;



/**
 * Description of pqrsfTable
 *
 * @author Usuario
 */
class pqrsfTable {
     public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT  pqsrf_id as id, usu_id as id, est_id as id,'
                . 'pqrsf_mensaje as mensaje, pqrsf_created_at as created,'
                .'pqrsf_update_at as update, pqrsf_delete-at as delete'
                .'FROM bd_estado'
                .'WHERE pqrsf_update is null'
                .'ORDER by pqrsf_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FECTH_OBJ) : false;
    }
      public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT  pqsrf_id as id, usu_id as id, est_id as id,'
                . 'pqrsf_mensaje as mensaje, pqrsf_created_at as created,'
                .'pqrsf_update_at as update, pqrsf_delete-at as delete'
                .'FROM bd_estado'
                .'WHERE pqrsf_update_at is null'
                .'AND pqrsf_id = :id';
    $params = array(
        ':id' => ($pqsrf_id !== null) ? $cat_id : $this->getpqsrf_id()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
    
    public function save() {
        $conn =  $this->getAllConnection($this->config);
        $sql = 'INSERT INTO id'
                 . '(pqsrf_id, usu_id, pqrsf_update_at) '
            . 'VALUES (:pqrsf_id, :usu_id,:pqrsf_update)';
        $params = array(
          ':id'=> $this->getest_pqrsf_id(),
        ':usu'=>$this->getest_usu_id(),
          ':update'=>$this->getest_pqsrf_update()  
        );
        
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId;
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }
    
    
      
public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'update bd_pqrsf SET'
              .'pqrsf_id = :id,'
              .'usu_id = :usu_id,'
              .'pqrsf_update = :update';
      $params = array(
          ':id'=> $this->getest_id(),
        ':usu_id'=>$this->getest_usu_id(),
          ':pqsrf_update'=>$this->getest_update()  
        );
       
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
         ':id'=> $this->getest_id(),
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bd_pqrsf set pqrsf_id_delete = now () WHERE pqsrf_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bd_pqrsf WHERE pqsrf_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }
}
