<?php
use FStudio\fsController as controller;
/**
 * Description of index
 *
 * @author balem
 */
class itine extends controller{
  public function execute() {
    $this->defineView('inicio', 'intinerario', 'html');
  }
}

