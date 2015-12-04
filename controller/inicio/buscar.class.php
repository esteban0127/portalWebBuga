<?php
use FStudio\fsController as controller;
/**
 * Description of index
 *
 * @author balem
 */
class buscar extends controller{
  public function execute() {
    $this->defineView('inicio', 'buscar', 'html');
  }
}
