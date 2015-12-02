<?php

require_once '../model/base/datoUsuarioBaseTable.class.php';
require_once '../model/datoUsuarioTable.class.php';
require_once '../model/base/usuarioBaseTable.class.php';
require_once '../model/usuarioTable.class.php';


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;


/**
 * Description of registrar
 *
 * @author lizethgiraldo
 */
class registrar extends controller implements action {

  public function execute(){
  $config = $this->getConfig();
  $index = $config->getUrl() . 'index.php';
  if(isset($_SESSION['user']) === true){
    header("Location: $index");
    exit();
  }elseif (filter_has_var(INPUT_POST, 'registro') === true) {
    $registro = filter_input_array(INPUT_POST) ['registro'];
    var_dump($registro);
    //$this->validateInsert($registro);
    $usuario = new usuarioTable($config);
    $usuario->setId($usuario->nextId());
    $usuario->setUsuario($registro['usuario']);
    $usuario->setPassword($registro['password']);
    $usuario->setActivado(1);
    $usuario->setRolId(1);
    $usuario->save();
    $datoUsuario = new datoUsuarioTable($config);
    $datoUsuario->setId($datoUsuario->nextId2());
    $datoUsuario->setUsuarioId($usuario->getId());
    $datoUsuario->setNombre($registro['nombre']);
    $datoUsuario->setApellidos($registro['apellido']);
    $datoUsuario->setCorreo($registro['correo']);
    $datoUsuario->setGenero($registro['genero']);
    $datoUsuario->setFechaNacimiento($registro['fecha']);
    $datoUsuario->setFacebook($registro['facebook']);
    $datoUsuario->setTwitter($registro['twitter']);
    $datoUsuario->setGooglePlus($registro['google']);
    $datoUsuario->setAvatar($registro['avatar']);
    $datoUsuario->save();
    $_SESSION['registroSuccess']='El usuario fue registrado exitosamente';
  }
  header("Location:". $config->getUrl() . "index.php/inicio/iniciar");
  exit();
  }
  
}
