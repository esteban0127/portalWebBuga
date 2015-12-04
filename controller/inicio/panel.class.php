<?php
use FStudio\fsController as controller;
/**
 * Description of index
 *
 * @author balem
 */
class panel extends controller{
  public function execute() {
    $this->defineView('inicio', 'panel', 'html');
  }
}

