<?php
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of registro
 *
 * @author lizethgiraldo
 */
class registro extends controller implements action {
  
  public function execute(){
    
    $config = $this->getConfig();
    if (isset($_SESSION['user']) === true){
      $index = $config->getUrl() . 'index.php';
      header("Location: $index");
      exit();
    }
    
    $this->titulo = 'Registro de usuario';
    $this->btCSS = $config->getUrl() . 'css/bootstrap.min.css';
    $this->bttCSS = $config->getUrl() . 'css/bootstrap-theme.min.css';
    $this->registroCSS = $config->getUrl() . 'css/registro.css';        
    $this->jqJS = $config->getUrl() . 'js/jquery-1.11.3.min.js';
    $this->btJs = $config->getUrl() . 'js/bootstrap.min.js';
    $this->homeURL = $config->getUrl() . 'index.php';
    $this->defineView('usuario', 'registroForm','html');
    }
    
  
}
