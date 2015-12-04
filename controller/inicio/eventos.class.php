<?php
use FStudio\fsController as controller;
/**
 * Description of index
 *
 * @author balem
 */
class eventos extends controller{
  public function execute() {
    $this->defineView('inicio', 'eventos', 'html');
  }
}
