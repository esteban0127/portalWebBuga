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
  
     public function _construct(config $config, $id = null, $nombre = null, $created_at = null, $update_at = null) {
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
    
 
    public function getCreatedAt(){
        return $this->created_at;
    }
    
    public function getUpdateAt(){
        return $this->update_at;
    }
    
      public function setId($est_id){
       $this->id = $est_id;
    }
    
      public function setNombre($est_nombre){
       $this->nombre = $est_nombre;
    }
    
      public function setCreatedAt($est_created_at){
       $this->created = $est_created_at;
    }
      public function setUpdateAt($est_update_at){
       $this->update = $est_update_at;
    }
}