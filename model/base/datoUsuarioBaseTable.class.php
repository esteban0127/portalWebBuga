<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of datoUsuarioBaseTable
 *
 * @author Harold
 */
namespace portalWebBuga\model\base;

use portalWebBuga\fsModel as model;
use portalWebBuga\myConfig as config;

class datoUsuarioBaseTable extends model {
  const ID='dus_id';
  const USUARIO_ID='usu_id';
  const NOMBRE='dus_nombre';
  const NOMBRE_LENGTH=80;
  const APELLIDOS='dus_apellidos';
  const APELLIDOS_LENGTH=80;
  const CORREO='dus_correo';
  const CORREO_LENGTH=100;
  const GENERO='dus_genero';
  const FECHA_NACIMIENTO='dus_fecha_nacimiento';
  const FACEBOOK='dus_facebook';
  const FACEBOOK_LENGTH=80;
  const TWITTER='dus_twitter';
  const TWITTER_LENGTH=80;
  const GOOGLE_PLUS='dus_google_plus';
  const GOOGLE_PLUS_LENGTH=80;
  const AVATAR='dus_avatar';
  const AVATAR_LENGTH=100;
  const CREATED_AT = 'dus_created_at';
  const UPDATED_AT = 'dus_update_at';
  const DELETED_AT = 'dus_deleted_at';
  const _TABLE = 'bdp_dato_usuario';
  
  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $usuario_id;
  private $nombre;
  private $apellidos;
  private $correo;
  private $genero;
  private $fecha_nacimiento;
  private $facebook;
  private $twitter;
  private $google_plus;
  private $avatar;
  private $created_at;
  private $update_at;
  private $deleted_at;

  function __construct(config $config, $id = null, $usuario_id = null, $nombre = null, $apellidos= null, $correo= null, $genero= null, $fecha_nacimiento= null, $facebook= null, $twitter= null, $google_plus= null, $avatar= null, $created_at= null, $update_at= null, $deleted_at= null) {
    $this->config = $config;
    $this->id = $id;
    $this->usuario_id = $usuario_id;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->correo = $correo;
    $this->genero = $genero;
    $this->fecha_nacimiento = $fecha_nacimiento;
    $this->facebook = $facebook;
    $this->twitter = $twitter;
    $this->google_plus = $google_plus;
    $this->avatar = $avatar;
    $this->created_at = $created_at;
    $this->update_at = $update_at;
    $this->deleted_at = $deleted_at;
  }
  
  function getId() {
    return $this->id;
  }

  function getUsuario_id() {
    return $this->usuario_id;
  }

  function getNombre() {
    return $this->nombre;
  }

  function getApellidos() {
    return $this->apellidos;
  }

  function getCorreo() {
    return $this->correo;
  }

  function getGenero() {
    return $this->genero;
  }

  function getFecha_nacimiento() {
    return $this->fecha_nacimiento;
  }

  function getFacebook() {
    return $this->facebook;
  }

  function getTwitter() {
    return $this->twitter;
  }

  function getGoogle_plus() {
    return $this->google_plus;
  }

  function getAvatar() {
    return $this->avatar;
  }

  function getCreated_at() {
    return $this->created_at;
  }

  function getUpdate_at() {
    return $this->update_at;
  }

  function getDeleted_at() {
    return $this->deleted_at;
  }

  function setId($id) {
    $this->id = $id;
  }

  function setUsuario_id($usuario_id) {
    $this->usuario_id = $usuario_id;
  }

  function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  function setApellidos($apellidos) {
    $this->apellidos = $apellidos;
  }

  function setCorreo($correo) {
    $this->correo = $correo;
  }

  function setGenero($genero) {
    $this->genero = $genero;
  }

  function setFecha_nacimiento($fecha_nacimiento) {
    $this->fecha_nacimiento = $fecha_nacimiento;
  }

  function setFacebook($facebook) {
    $this->facebook = $facebook;
  }

  function setTwitter($twitter) {
    $this->twitter = $twitter;
  }

  function setGoogle_plus($google_plus) {
    $this->google_plus = $google_plus;
  }

  function setAvatar($avatar) {
    $this->avatar = $avatar;
  }

  function setCreated_at($created_at) {
    $this->created_at = $created_at;
  }

  function setUpdate_at($update_at) {
    $this->update_at = $update_at;
  }

  function setDeleted_at($deleted_at) {
    $this->deleted_at = $deleted_at;
  }



  
  
}
