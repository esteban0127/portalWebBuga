<?php

namespace portarWebBuga\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of rolBaseTable
 *
 * @author lizethgiraldo
 */
class rolBaseTable extends model {
   
  const ID = 'rol_id';
  const ROL = 'rol_rol';
  const ROL_LENGTH = 30;
  const CREATED_AT = 'rol_created_at';
  const UPDATED_AT = 'rol_updated_at';
  const DELETED_AT = 'rol_deleted_at';
 
  
  /**
   * Configuración del sistema
   * @var config
   */
  
  protected $config;
  private $id;
  private $rol;
  private $created_at;
  private $updated_at;
  private $deleted_at;
  
public function _construct(config $config, $id = null, $rol = null, $created_at = null, $updated_at = null, $deleted_at = null){
  
  $this-> config = $config;
  $this-> id = $id;
  $this-> rol = $rol;
  $this-> created_at = $created_at;
  $this-> updated_at = $updated_at;
  $this-> deleted_at = $deleted_at;
 
  }
 
  public function getId(){
    return $this-> id;
  }
  
  public function getRol(){
    return $this-> rol;
  }
  
  public function getCreatedAt(){
    return $this-> created_at;
  }
 
  public function getUpdatedAt(){
    return $this-> updated_at;
  }
  
  public function getDeletedAt(){
    return $this-> deleted_at;
  }
  
  public function setId($id){
    $this-> id = $id;
  }
  
  public function setRol($rol){
    $this-> rol = $rol;
  }
  
  public function setCreatedAt($created_at){
    $this-> created_at = $created_at;
  }
  
   public function setUpdated_at($updated_at){
    $this-> updated_at = $updated_at;
  }
  
  public function setDeleted_at($deleted_at){
    $this-> deleted_at = $deleted_at;
  }
  
}

