<?php

namespace FSstudio\model\base;

use FStudio\fsmodel as model;
use FStudio\myConfig as config;


/**
 * Description of estadoBaseTable
 *
 * @author Usuario
 */
class estadoBaseTable extends model{
    const ID = 'est_id';
    const NOMBRE = 'est_nombre';
    const NOMBRE_LENGTH = '50';
    const CREATED= 'est_created_at';
    const UPDATE= 'est_update_at';
    
     /** 
     * Configuracion del sistema
     * @var config
     */

    protected $config;
    private $id;
    private $nombre;
    private $created_at;
    private $update_at;
  
     public function _construct(config $config, $id = null, $nombre = null, $created_at = null, $updated_at = null) {
        $this->config = $config;
        $this->id = $id;
        $this->nombre = $nombre;
        $this->created_at = $created_at;
        $this->update_at = $update_at;
       
 
}

 public function getId(){
        return $this->id;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
 
    public function getCreated_at(){
        return $this->created_at;
    }
    
    public function getUpdate_at(){
        return $this->update_at;
    }
    
      public function setId($id){
       $this->id = $est_id;
    }
    
      public function setNombre($nombre){
       $this->nombre = $est_nombre;
    }
    
      public function setCreated_at($created_at){
       $this->created = $est_created_at;
    }
      public function setUpdate_at($update_at){
       $this->update = $est_update_at;
    }
      