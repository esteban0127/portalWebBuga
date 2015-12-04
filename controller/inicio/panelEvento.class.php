<?php
use FStudio\fsController as controller;
/**
 * Description of index
 *
 * @author balem
 */
class panelEvento extends controller{
  public function execute() {
    $this->defineView('inicio', 'panelEvento', 'html');
  }
}