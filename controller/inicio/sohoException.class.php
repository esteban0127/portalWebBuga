<?php


class sohoException extends controller {

  static public function main(PDOException $exc) {
    $variables = array(
        'exc' => $exc
    );
    view::definirVista('inicio', 'exception', $variables, 'html');
  }

}
