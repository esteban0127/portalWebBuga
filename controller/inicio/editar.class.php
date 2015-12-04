<?php
use FStudio\fsController as controller;
/**
 * Description of index
 *
 * @author balem
 */
class editar extends controller{
  public function execute() {
    $this->defineView('inicio', 'editar', 'html');
  }
}