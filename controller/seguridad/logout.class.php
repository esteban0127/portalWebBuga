<?php


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
    


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of logout
 *
 * @author Usuario
 */
class logout extends controller implements action {
    
public function execute(){
    if(isset($_SESSION['user']) === true){
        unset($_SESSION['user']);
    }
    $config = $this->getConfig();
    $index = $config->getUrl() . 'index.php';
    header("LOcation: $index");
    exit();
    
}
}