<?php
use FStudio\fsController as controller;
/**
 * Description of index
 *
 * @author balem
 */
class panelSitio extends controller{
  public function execute() {
    $this->defineView('inicio', 'panelSitio', 'html');
  }
}