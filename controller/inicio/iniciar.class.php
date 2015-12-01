<?php
use FStudio\fsController as controller;
/**
 * Description of index
 *
 * @author balem
 */
class iniciar extends controller{
  public function execute() {
    $this->defineView('inicio', 'login', 'html');
  }
}
