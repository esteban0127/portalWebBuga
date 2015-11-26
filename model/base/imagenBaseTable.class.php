<?php

namespace portarWebBuga\model\base;

use portarWebBuga\fsModel as model;
use portarWebBuga\myConfig as config;

/**
 * Description of imagenBaseTable
 *
 * @author lizethgiraldo
 */
class imagenBaseTable extends model {
  
  const ID = 'img_id';
  const EVE = 'eve_id';
  const SIT = 'sit_id';
  const RUTA = 'img_ruta';
  const CREATED_AT = 'img_created_at';
  
  
  /**
   * Configuración del sistema
   * @var config
   */
  
  protected $config;
  private $id;
  private $eve;
  private $sit;
  private $ruta;
  private $created_at;
  
public function _construct(config $config, $id = null, $eve = null, $sit = null, $ruta = null, $created_at = null){
  
  $this-> config = $config;
  $this-> id = $id;
  $this-> eve = $eve;
  $this-> sit = $sit;
  $this-> ruta = $ruta;
  $this-> created_at = $created_at;
  
  }
 
  public function getId(){
    return $this-> id;
  }
  
  public function getEve(){
    return $this-> eve;
  }
  
  public function getSit(){
    return $this-> sit;
  }
  
  public function getRuta(){
    return $this-> ruta;
  }
  
  public function getCreatedAt(){
    return $this-> created_at;
  }
  
  public function setId($id){
    $this-> id = $id;
  }
  
  public function setEve($eve){
    $this-> eve = $eve;
  }
  
  public function setSit($sit){
    $this-> sit = $sit;
  }
  
  public function setRuta($ruta){
    $this-> ruta = $ruta;
  }
    
  public function setCreatedAt($created_at){
    $this-> created_at = $created_at;
  }
  
}
