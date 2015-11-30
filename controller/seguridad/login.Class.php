<?php

require '../model/base/usaurioBaseTable.class.php';
require '../model/usuarioTable.calss.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of loginClass
 *
 * @author Usuario
 */
class loginClass extends controller implements action {

    public function execute() {

        $config = $this->getConfig();
        if (filter_has_var(INPUT_POST, 'seguridad') === true) {
            $user = filter_input_array(INPUT_POST)['seguridad']['user'];
            $pass = filter_input_array(INPUT_POST)['seguridad']['pass'];
            
            $usuario = new usuarioTable($config);
            $usuario->setUserName($user);
            $usuario->setPassword($pass);
      
            if ($id = $usuario->verificarUsario() !== false) {
                $datosUsuario = $usuario->getDatoByUsePassword();
                if ($datosUsuario !== false) {
                    $_SESSION['user']['id'] = $datosUsuario->id;
                    $_SESSION['user']['nombre'] = $datosUsuario->nombre . '' . $datosUsuario->apellidos;
                    $_SESSION['user']['imagen'] = $datosUsuario->imagen;
                } else {
                    throw new Exception('Extrañamente ocurrio un error');
                }
            }else {
                $_SESSION['usuarioInvalido'] = 'Datos de usuario invalidos';
            }
        }
        $index = $config->getUrl() . 'index.php';
        header("Location: $index");
        exit();
    }

}
