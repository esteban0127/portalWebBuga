<?php

namespace portarWebBuga\model\base;

use portarWebBuga\fsModel as model;
use portarWebBuga\myConfig as config;

/**
 * Description of itinerarioTable
 *
 * @author lizethgiraldo
 */
class itinerarioTable extends model{
  
  const ID = 'iti_id';
  const USUARIO = 'usu_id';
  const SIT = 'sit_id';
  const POSICION = 'iti_posicion';
  const CREATED_AT = 'iti_created_at';
  const UPDATED_AT = 'iti_updated_at';
  const DELETED_AT = 'iti_deleted_at';
  
  
  /**
   * Configuración del sistema
   * @var config
   */
  
  protected $config;
  private $id;
  private $usuario;
  private $sit;
  private $posicion;
  private $created_at;
  private $updated_at;
  private $deleted_at;
  
public function _construct(config $config, $id = null, $usuario = null, $sit = null, $posicion = null, $created_at = null, $updated_at = null, $deleted_at = null){
  
  $this-> config = $config;
  $this-> id = $id;
  $this-> usuario = $usuario;
  $this-> sit = $sit;
  $this-> posicion = $posicion;
  $this-> created_at = $created_at;
  $this-> updated_at = $updated_at;
  $this-> deleted_at = $deleted_at;
  
  }
 
  public function getId(){
    return $this-> id;
  }
  
  public function getUsuario(){
    return $this-> usuario;
  }
  
  public function getSit(){
    return $this-> sit;
  }
  
  public function getPosicion(){
    return $this-> posicion;
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
  
  public function setUsuario($usuario){
    $this-> usuario = $usuario;
  }
  
  public function setSit($sit){
    $this-> sit = $sit;
  }
  
  public function setPosicion($posicion){
    $this-> posicion = $posicion;
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
