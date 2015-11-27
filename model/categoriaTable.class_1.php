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
        $sql = 'SELECT  cat_id as id, cat_nombre as cat_id,'
                . 'cat_activo as activo as cat_cat_id as activo,'
                .'cat_cat_id as id as cat_created_at as cat_id,'
                .'cat_update as update as cat_delete as update,'
                .'FROM bd_sitios'
                .'WHERE cat_delete is null'
                .'ORDER by cat_created_at ASC';
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FECTH_OBJ) : false;
    }
      public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT  cat_id as id, cat_nombre as cat_id,'
                . 'cat_activo as activo as cat_cat_id as activo,'
                .'cat_cat_id as id as cat_created_at as cat_id,'
                .'cat_update as update as cat_delete as update,'
                .'FROM bd_sitios'
                .'WHERE cat_delete is null'
                .'AND cat_id = :id';
    $params = array(
        ':id' => ($cat_id !== null) ? $cat_id : $this->getCat_id()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
    
    public function save() {
        $conn =  $this->getAllConnection($this->config);
        $sql = 'INSERT INTO id'
                 . '(cat_id, cat_nombre, cat_activado) '
            . 'VALUES (:cat_id, :nombre,:activado)';
        $params = array(
          ':id'=> $this->getcat_id(),
        ':nombre'=>$this->getcat_nombre(),
          ':activo'=>$this->getcat_activo()  
        );
        
        $answer = $conn->prepare($sql);
        $answer->execute($params);
        $this->setId;
         return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
    }
    
    
}
public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'update bd_sitio SET'
              .'cat_id = :cat_id,'
              .'cat_nombre = :nombre,'
              .'cat_activo = :activo';
      $params = array(
          ':id'=> $this->getcat_id(),
        ':nombre'=>$this->getcat_nombre(),
          ':activo'=>$this->getcat_activo()  
        );
       
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
         ':id'=> $this->getcat_id(),
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bd_sitio set cat_id_delete = now () WHERE cat_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bd_sitio WHERE cat_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}