<?php

/**
 * Description of etiquetaBaseTables
 *
 * @author Harold
 */
namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

class etiquetaBaseTables extends model {
  const ID = 'eti_id';
  const NOMBRE = 'eti_nombre';
  const NOMBRE_LENGTH = 80;
  const SITO_ID = 'sit_id';
  const EVENTO_ID = 'eve_id';
  const CREATED_AT = 'eti_created_at';
  const UPDATED_AT = 'eti_update_at';
  const DELETED_AT = 'eti_deleted_at';
  const _TABLE = 'bdp_etiqueta';
  
    /**
   * Configuración del sistema
   * @var config
   */
  
    protected $config;
    private $id;
    private $nombre;
    private $sitio_id;
    private $evento_id;
    private $created_at;
    private $updated_at;
    private $deleted_at;
    
    function __construct(config $config, $id=null, $nombre=null, $sitio_id=null, $evento_id=null, $created_at=null, $updated_at=null, $deleted_at=null) {
      $this->config = $config;
      $this->id = $id;
      $this->nombre = $nombre;
      $this->sitio_id = $sitio_id;
      $this->evento_id = $evento_id;
      $this->created_at = $created_at;
      $this->updated_at = $updated_at;
      $this->deleted_at = $deleted_at;
    }
    
    function getId() {
      return $this->id;
    }

    function getNombre() {
      return $this->nombre;
    }

    function getSitioId() {
      return $this->sitio_id;
    }

    function getEventoId() {
      return $this->evento_id;
    }

    function getCreatedAt() {
      return $this->created_at;
    }

    function getUpdatedAt() {
      return $this->updated_at;
    }

    function getDeletedAt() {
      return $this->deleted_at;
    }

    function setId($id) {
      $this->id = $id;
    }

    function setNombre($nombre) {
      $this->nombre = $nombre;
    }

    function setSitioId($sitio_id) {
      $this->sitio_id = $sitio_id;
    }

    function setEventoId($evento_id) {
      $this->evento_id = $evento_id;
    }

    function setCreatedAt($created_at) {
      $this->created_at = $created_at;
    }

    function setUpdatedAt($updated_at) {
      $this->updated_at = $updated_at;
    }

    function setDeletedAt($deleted_at) {
      $this->deleted_at = $deleted_at;
    }



}
