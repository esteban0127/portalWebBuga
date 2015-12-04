<?php
use FStudio\fsController as controller;
/**
 * Description of index
 *
 * @author balem
 */
class sitio extends controller{
  public function execute() {
    $this->defineView('inicio', 'sitio', 'html');
  }
}
