<?php

require_once '../model/base/usuarioBaseTable.class.php';
require_once '../model/usuarioTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of loginClass
 *
 * @author Usuario
 */
class login extends controller implements action {

    public function execute() {

        $config = $this->getConfig();
        
        if (filter_has_var(INPUT_POST, 'seguridad') === true) {
            $usuario = filter_input_array(INPUT_POST)['seguridad']['usuario'];
            $password = filter_input_array(INPUT_POST)['seguridad']['password'];
         
            $usuario2 = new usuarioTable($config);
            $usuario2->setUsuario($usuario);
            $usuario2->setPassword($password);
      
            if ($id=$usuario2->verificarUsuario() !== FALSE) {
                $datosUsuario = $usuario2->getById($id);//etDataByUserPassword();
                if ($datosUsuario !== false) {
                    $_SESSION['user']['id'] = $datosUsuario->id;
                    $_SESSION['user']['nombre'] = $datosUsuario->nombre;
                } else {
                    throw new Exception('Extrañamente ocurrio un error');
                }
            }else {
                $_SESSION['usuarioInvalido'] = 'Datos de usuario invalidos';
                header("Location:" . $config->getUrl() . "index.php/seguridad/login");
                exit();
            }
        }
        $index = $config->getUrl() . 'index.php/inicio/index';
        header("Location: $index");
        exit();
    }

}
