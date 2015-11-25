<?php include DIR . 'view/partial/head.php' ?>
<link rel="stylesheet" href="<?php echo URL ?>css/exception.css">
<div class="container container-fluid margen">
  <div class="jumbotron">
    <h1>Ocurrió un error!!!</h1>
    <p>
      <b>Error: </b> <?php echo $exc->getMessage() ?>
    </p>
    <p>
      <b>Traza: </b>
    </p>
    <?php if (extension_loaded('xdebug') === true): ?>
      <?php var_dump($exc->getTrace()) ?>
    <?php else: ?>
      <pre>
        <?php print_r($exc->getTrace()) ?>
      </pre>
    <?php endif ?>
    <div class="text-right">
      <a href="javascript:window.history.back()" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i>&nbsp;&nbsp;Volver</a>
    </div>
  </div>
</div>
<?php include DIR . 'view/partial/foot.php' ?>