<?php
if (isset($_SESSION['user']) === FALSE) {
  header("Location:index");
  exit();
} else {
  ?>
  <?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
  <link rel="stylesheet" href="<?php echo $fsConfig->getUrl() ?>css/exception.css">
  <div class="container container-fluid ">
    <div>
      <div class="row">
        <div  class="col-md-12 col-sm-12 col-xs-12">

          <a class="aa" href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/index" class="btn btn-danger"> <img class="img-responsive" src="<?php echo $fsConfig->getUrl() ?>image/banner.jpg"></a>

        </div>
      </div>
    </DIV>
    <?php if (isset($_SESSION['user']) === FALSE): ?>
      <div class="hidden-lg visible-md visible-xs visible-sm">
        <nav class="navbar navbar-inverse ">
          <div class="container-fluid col-md-12 col-sm-12 col-xs-12 col-lg-12" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/index">BugaRoutes</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Deportes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Entrenimiento</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Cultura</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Hisotria</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/buscar" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></a>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <div id="rr">
                  <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/iniciar"  type="submit" class="btn btn-primary">Iniciar sesion</a>
                </div>
                <div  id="tt">
                  <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/registro"  type="submit" class="btn btn-success">Registrate</a>
                </div>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>

      <div class="visible-lg hidden-md hidden-sm hidden-xs">
        <nav class="navbar navbar-inverse ">
          <div class="container-fluid col-md-12 col-sm-12 col-xs-12 col-lg-12" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/index">BugaRoutes</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Deportes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Entrenimiento</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Cultura</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Hisotria</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/buscar" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></a>
              </form>

              <ul class="nav navbar-nav navbar-right">
                <div id="rr">
                  <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/iniciar"  type="submit" class="btn btn-primary">Iniciar Sesion</a>
                </div>
                <div  id="tt">
                  <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/registro"  type="submit" class="btn btn-success">Registrarse</a>
                </div>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['user']) === TRUE): ?>
      <div class="hidden-lg visible-md visible-xs visible-sm">
        <nav class="navbar navbar-inverse ">
          <div class="container-fluid col-md-12 col-sm-12 col-xs-12 col-lg-12" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/index">BugaRoutes</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Deportes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Entrenimiento</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Cultura</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Hisotria</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/buscar" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></a>
              </form>

              <ul class="nav navbar-nav navbar-right">
                <div id="rr">
                  <a href="<?php echo $fsConfig->getUrl() ?>index.php/seguridad/logout"  type="submit" class="btn btn-primary">Cerrar Sesion</a>
                </div>
                <div  id="tt">
                  <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/editar"  type="submit" class="btn btn-success">Editar datos</a>
                </div>
                <div  id="tt2">
                  <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/panel"  type="submit" class="btn btn-info">Panel De Control</a>
                </div>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>

      <div class="visible-lg hidden-md hidden-sm hidden-xs">
        <nav class="navbar navbar-inverse ">
          <div class="container-fluid col-md-12 col-sm-12 col-xs-12 col-lg-12" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/index">BugaRoutes</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Deportes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Entrenimiento</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Cultura</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Hisotria</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/buscar" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></a>
              </form>

              <ul class="nav navbar-nav navbar-right">
                <div id="rr">
                  <a href="<?php echo $fsConfig->getUrl() ?>index.php/seguridad/logout"  type="submit" class="btn btn-primary">Cerrar Sesion</a>
                </div>
                <div  id="tt">
                  <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/editar"  type="submit" class="btn btn-success">Editar datos</a>
                </div>
                <div  id="tt2">
                  <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/panel"  type="submit" class="btn btn-info">Panel De Control</a>
                </div>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>
    <?php endif ?>
    <div class=" fondo container-fluid">
      <div class="row col-lg-12">
        <CENTER>
          <h2>PANEL DE CONTROL </h2>
          <div>
            <a href="" type="submit" class="btn btn-success">Nuevo sitio</a>
          </div>
          <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12" style="margin-top: 12px">
            <ul class=" menu nav nav-pills nav-stacked">
              <li role="presentation"><a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/panel">Home</a></li>
              <li role="presentation" class="active"><a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/panelSitio">Sitios</a></li>
              <li role="presentation"><a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/panelEvento">Eventos</a></li>  
            </ul>
          </div>
          <div>
            <table border="1" class=" col-lg-10 table-responsive" style="margin-top: 10px">
              <thead>
                <tr>
                  <th colspan="2">
                    Administrar Sitios
                  </th>
                </tr>
                <tr>
                  <th>Sitio</th>
                  <th>Acciones</th>
                </tr>            
              </thead>
              <tbody>
                <tr>
                  <td>Basilica del señor de los milagros</td>
                  <td>
                    <a href="" class="btn btn-warning btn-xs " data-toggle="tooltip" data-placement="bottom" title="Editar sitio">Editar sitio</a>
                    <a href="" class="btn btn-primary btn-xs " data-toggle="tooltip" data-placement="bottom" title="Desactivar sitio">Desactivar sitio</a>
                    <a href="" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Eliminar sitio">Eliminar sitio</a></td>
                </tr>
                <tr>
                  <td>El faro</td>
                  <td>
                    <a href="" class="btn btn-warning btn-xs " data-toggle="tooltip" data-placement="bottom" title="Editar sitio">Editar sitio</a>
                    <a href="" class="btn btn-primary btn-xs " data-toggle="tooltip" data-placement="bottom" title="Desactivar sitio">Desactivar sitio</a>
                    <a href="" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Eliminar sitio">Eliminar sitio</a></td>
                </tr>

              </tbody>
            </table>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/index" class="btn btn-info" style="margin-top: 20px;">Volver</a>
          </div>
        </center>
      </div>
    </div>
  </div>
 <?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>
<?php } ?>
