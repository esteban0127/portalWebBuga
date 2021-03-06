<?php

namespace FSstudio\model\base;

use FStudio\fsmodel as model;
use FStudio\myConfig as config;

/**
 * Description of bdpcategoria
 *
 * @author Usuario
 */
class categoriaBaseTable extends model{

    const ID = 'cant_id';
    const NOMBRE = 'cat_nombre';
    const NOMBRE_LENGTH = '30';
    const ACTIVO = 'cat_activo';
    const CAT = 'cat_cat';
    const CREATED_AT = 'cat_created_at';
    const UPDATE_AT = ' cat_uptade_at';
    const DELETED_AT = 'cat_delete_at';

    /** 
     * Configuracion del sistema
     * @var config
     */

    protected $config;
    private $id;
    private $nombre;
    private $activo;
    private $cat;
    private $created_at;
    private $update_at;
    private $delete_at;
    
    public function _construct(config $config, $id = null, $nombre =null, $activo = null, $cat = null, $created_at = null, $update_at = null, $delete_at = null) {
        $this->config = $config;
        $this->id = $id;
        $this->nombre = $nombre;
        $this->activo = $activo;
        $this->cat = $cat;
        $this->created_at = $created_at;
        $this->update_at = $update_at;
        $this->delete_at = $delete_at;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getActivo(){
        return $this->activo;
    }
    
    public function getCat(){
        return $this->cat;
    }
    
    public function getCreatedAt(){
        return $this->created_at;
    }
    
    public function getUpdateAt(){
        return $this->update_at;
    }
    
    public function getDeleteAt(){
        return $this->delete_at;
    }
    
      public function setId($id){
       $this->id;
    }
    
      public function setNombre($nombre){
       $this->nombre = $nombre;
    }
      public function setActivo($activo){
       $this->activo = $activo;
    }
      public function setCat($cat){
       $this->cat = $cat;
    }
      public function setCreatedAt($created_at){
       $this->created_at = $created_at;
    }
      public function setUpdateAt($update_at){
       $this->update = $update_at;
    }
      public function setDeleteAt($delete_At){
       $this->delete_at = $delete_At;
    }
}

