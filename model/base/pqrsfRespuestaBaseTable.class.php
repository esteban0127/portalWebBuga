<?php

namespace portarWebBuga\model\base;

use portarWebBuga\fsModel as model;
use portarWebBuga\myConfig as config;

/**
 * Description of pqrsf_respuesta
 *
 * @author Angel
 */
class pqrsfRespuesta extends model {
 
  const ID = 'res_id';
  const PQRSF = 'pqrsf_id';
  const USUARIO = 'usu_id';
  const RESPUESTA = 'res_respuesta';
  const CREATED_AT = 'res_created_at';
  const UPDATED_AT = 'res_update_at';
  const DELETED_AT = 'res_deleted_at';
  const _TABLE = 'bdp_pqrsf_respuesta';
  
    /**
   * Configuración del sistema
   * @var config
   */
  
    protected $config;
    private $id;
    private $pqrsf;
    private $usuario;
    private $respuesta;
    private $created_at;
    private $updated_at;
    private $deleted_at;
    
    function __construct(config $config, $id=null, $pqrsf=null, $usuario=null, $respuesta=null, $created_at=null, $updated_at=null, $deleted_at=null) {
      $this->config = $config;
      $this->id = $id;
      $this->pqrsf = $pqrsf;
      $this->usuario = $usuario;
      $this->respuesta = $respuesta;
      $this->created_at = $created_at;
      $this->updated_at = $updated_at;
      $this->deleted_at = $deleted_at;
    }
    
    function getId() {
      return $this->id;
    }

    function getPqrsf() {
      return $this->pqrsf;
    }

    function getUsuario() {
      return $this->usuario;
    }

    function getRespuesta() {
      return $this->respuesta;
    }

    function getCreated_at() {
      return $this->created_at;
    }

    function getUpdated_at() {
      return $this->updated_at;
    }

    function getDeleted_at() {
      return $this->deleted_at;
    }

    function setId($id) {
      $this->id = $id;
    }

    function setNombre($pqrsf) {
      $this->pqrsf = $pqrsf;
    }
    
    function setEvento_id($usuario) {
      $this->usuario = $usuario;
    }


    function setSitio_id($respuesta) {
      $this->respuesta = $respuesta;
    }

    function setCreated_at($created_at) {
      $this->created_at = $created_at;
    }

    function setUpdated_at($updated_at) {
      $this->updated_at = $updated_at;
    }

    function setDeleted_at($deleted_at) {
      $this->deleted_at = $deleted_at;
    }

  
  
  
}
