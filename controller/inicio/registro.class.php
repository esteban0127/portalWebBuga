<?php
use FStudio\fsController as controller;
/**
 * Description of index
 *
 * @author balem
 */
class registro extends controller{
  public function execute() {
    $this->defineView('inicio', 'registro', 'html');
  }
}
