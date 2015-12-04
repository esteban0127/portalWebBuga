<?php
use FStudio\fsController as controller;
/**
 * Description of index
 *
 * @author balem
 */
class categoria extends controller{
  public function execute() {
    $this->defineView('inicio', 'categoria', 'html');
  }
}