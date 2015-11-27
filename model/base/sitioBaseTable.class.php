<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sitioBaseTable
 *
 * @author Harold
 */

namespace portalWebBuga\model\base;

use portalWebBuga\fsModel as model;
use portalWebBuga\myConfig as config;

class sitioBaseTable extends model{
  const ID = 'sit_id';
  const NOMBRE = 'sit_nombre';
  const NOMBRE_LENGTH=80;
  const DESCRIPCION ='sit_descripcion';
  const CATEGORIA_ID = 'cat_id';
  const DIRECCION = 'sit_direccion';
  const DIRECCION_LENGTH=100;
  const TELEFONO = 'sit_telefono';
  const TELEFONO_LENGTH=40;
  const LATITUD = 'sit_latitud';
  const LATITUD_LENGTH=70;
  const LONGITUD = 'sit_longitud';
  const LONGITUD_LENGTH=70;
  const ESTADO_ID = 'est_id';
  const FACEBOOK='sit_facebook';
  const FACEBOOK_LENGTH=80;
  const TWITTER='sit_twitter';
  const TWITTER_LENGTH=80;
  const GOOGLE_PLUS='sit_google_plus';
  const GOOGLE_PLUS_LENGTH=80;
  const CREATED_AT = 'sit_created_at';
  const UPDATED_AT = 'sit_update_at';
  const DELETED_AT = 'sit_deleted_at';
  const _TABLE = 'bdp_sitio';
  
  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $nombre;
  private $descripcion;
  private $categoria_id;
  private $direccion;
  private $telefono;
  private $latitud;
  private $longitud;
  private $estado_id;
  private $facebook;
  private $twitter;
  private $google_plus;
  private $created_at;
  private $update_at;
  private $deleted_at;
  
  function __construct(config $config, $id=null, $nombre=null, $descripcion=null, $categoria_id=null, $direccion=null, $telefono=null, $latitud=null, $longitud=null, $estado_id=null, $facebook=null, $twitter=null, $google_plus=null, $created_at=null, $update_at=null, $deleted_at=null) {
    $this->config = $config;
    $this->id = $id;
    $this->nombre = $nombre;
    $this->descripcion = $descripcion;
    $this->categoria_id = $categoria_id;
    $this->direccion = $direccion;
    $this->telefono = $telefono;
    $this->latitud = $latitud;
    $this->longitud = $longitud;
    $this->estado_id = $estado_id;
    $this->facebook = $facebook;
    $this->twitter = $twitter;
    $this->google_plus = $google_plus;
    $this->created_at = $created_at;
    $this->update_at = $update_at;
    $this->deleted_at = $deleted_at;
  }
  
  function getId() {
    return $this->id;
  }

  function getNombre() {
    return $this->nombre;
  }

  function getDescripcion() {
    return $this->descripcion;
  }

  function getCategoria_id() {
    return $this->categoria_id;
  }

  function getDireccion() {
    return $this->direccion;
  }

  function getTelefono() {
    return $this->telefono;
  }

  function getLatitud() {
    return $this->latitud;
  }

  function getLongitud() {
    return $this->longitud;
  }

  function getEstado_id() {
    return $this->estado_id;
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

  function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  function setCategoria_id($categoria_id) {
    $this->categoria_id = $categoria_id;
  }

  function setDireccion($direccion) {
    $this->direccion = $direccion;
  }

  function setTelefono($telefono) {
    $this->telefono = $telefono;
  }

  function setLatitud($latitud) {
    $this->latitud = $latitud;
  }

  function setLongitud($longitud) {
    $this->longitud = $longitud;
  }

  function setEstado_id($estado_id) {
    $this->estado_id = $estado_id;
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
