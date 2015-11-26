<?php


/**
 * Description of usuarioBaseTable
 *
 * @author Harold
 */
namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

class usuarioBaseTable extends model {
  const ID = 'usu_id';
  const USUARIO='usu_usuario';
  const USUARIO_LENGTH=20;
  const PASSWORD = 'usu_password';
  const PASSWORD_LENGTH=32;
  const ACTIVADO='usu_activado';
  const ROL_ID='rol_id';
  const CREATED_AT='usu_created_at';
  const UPDATED_AT='usu_updated_at';
  const DELETED_AT='usu_deleted_at';
  const _TABLE ='bdp_usuario';


  /**
   * Configuración del sistema
   * @var config
   */
  
  protected $config;
  private $id;
  private $usuario;
  private $password;
  private $activado;
  private $rol_id;
  private $created_at;
  private $update_at;
  private $deletd_at;
  
  function __construct(config $config, $id = null, $usuario = null, $password = null, $activado = null, $rol_id = null, $created_at = null, $update_at = null, $deletd_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->usuario = $usuario;
    $this->password = $password;
    $this->activado = $activado;
    $this->rol_id = $rol_id;
    $this->created_at = $created_at;
    $this->update_at = $update_at;
    $this->deletd_at = $deletd_at;
  }

  function getId() {
    return $this->id;
  }

  function getUsuario() {
    return $this->usuario;
  }

  function getPassword() {
    return $this->password;
  }

  function getActivado() {
    return $this->activado;
  }

  function getRol_id() {
    return $this->rol_id;
  }

  function getCreated_at() {
    return $this->created_at;
  }

  function getUpdate_at() {
    return $this->update_at;
  }

  function getDeletd_at() {
    return $this->deletd_at;
  }

  function setId($id) {
    $this->id = $id;
  }

  function setUsuario($usuario) {
    $this->usuario = $usuario;
  }

  function setPassword($password) {
    $this->password = $password;
  }

  function setActivado($activado) {
    $this->activado = $activado;
  }

  function setRol_id($rol_id) {
    $this->rol_id = $rol_id;
  }

  function setCreated_at($created_at) {
    $this->created_at = $created_at;
  }

  function setUpdate_at($update_at) {
    $this->update_at = $update_at;
  }

  function setDeletd_at($deletd_at) {
    $this->deletd_at = $deletd_at;
  }


  
  
}
