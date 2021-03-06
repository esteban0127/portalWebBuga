<?php

use FSstudio\model\base\usuarioBaseTable;

/**
 * Description of categoriaTable
 *
 * @author Usuario
 */
class categoriaTable extends categoriaTable {
    public function getAll() {
        $conn = $this->getConnection($this->config);
        $sql = 'SELECT  est_id as id, est_nombre as nombre,'
                . 'est_created as created, est_update_at as update,'
                .'FROM bd_sitios'
                .'WHERE est_update is null'
                .'ORDER by est_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FECTH_OBJ) : false;
    }
      public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT  est_id as id, est_nombre as nombre,'
                . 'est_created as created, est_update_at as update,'
                .'FROM bd_sitios'
                .'WHERE est_update is null'
                .'AND est_id = :id';
    $params = array(
       ':id' => ($id !== null) ? $id : $this->getest_id()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
    
    public function save() {
        $conn =  $this->getAllConnection($this->config);
        $sql = 'INSERT INTO id'
                 . '(est_id, est_nombre, est_update) '
            . 'VALUES (:est_id, :nombre,:update)';
        $params = array(
          ':id'=> $this->getest_id(),
        ':nombre'=>$this->getest_nombre(),
          ':update'=>$this->getest_update()  
        );
        
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId;
         return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }
    
    

public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'update bd_sitio SET'
              .'est_id = :id,'
              .'est_nombre = :nombre,'
              .'est_update = :update';
      $params = array(
          ':id'=> $this->getest_id(),
        ':nombre'=>$this->getest_nombre(),
          ':update'=>$this->getest_update()  
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
        $sql = 'UPDATE bd_sitio set est_id_delete = now () WHERE est_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bd_sitio WHERE est_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}