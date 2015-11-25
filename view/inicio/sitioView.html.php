<?php include DIR . 'view/partial/head.php' ?>
<link rel="stylesheet" href="<?php echo URL ?>css/exception.css">

<div class="container container-fluid ">
  <div>
    <div class="row">
      <div  class="col-md-12 col-sm-12 col-xs-12">

        <a class="aa" href="<?php echo URL ?>index.php/inicio/indexController" class="btn btn-danger"> <img class="img-responsive" src="<?php echo URL ?>image/banner.jpg"></a>

      </div>
    </div>
  </DIV>


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
          <a class="navbar-brand" href="<?php echo URL ?>index.php/inicio/indexController">BugaRoutes</a>
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
            <a href="<?php echo URL ?>index.php/inicio/buscarController" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></a>
          </form>

          <ul class="nav navbar-nav navbar-right">
            <div id="rr">
              <a href="<?php echo URL ?>index.php/inicio/iniciarController"  type="submit" class="btn btn-primary">Iniciar sesion</a>
            </div>
            <div  id="tt">
              <a href="<?php echo URL ?>index.php/inicio/registroController"  type="submit" class="btn btn-success">Registrate</a>
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
          <a class="navbar-brand" href="<?php echo URL ?>index.php/inicio/indexController">BugaRoutes</a>
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
            <a href="<?php echo URL ?>index.php/inicio/buscarController" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></a>
          </form>

          <ul class="nav navbar-nav navbar-right">
            <div id="rr">
              <a href="<?php echo URL ?>index.php/inicio/iniciarController"  type="submit" class="btn btn-primary">Iniciar Sesion</a>
            </div>
            <div  id="tt">
              <a href="<?php echo URL ?>index.php/inicio/registroController"  type="submit" class="btn btn-success">Registrarse</a>
            </div>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
  <div class="hotel">
    <center>
      <h1>HOTEL GUADALAJARA</h1>
    </center>
    <div class="row">
      <div class="col-sm-8 col-md-4 col-xs-12">
        <img src="<?php echo URL ?>image/ht1.jpg" width="420px" height="220px" style="margin-left: 10px;margin-bottom: 10px;" class="img-responsive">
      </div>
      <div class="col-sm-6 col-md-8 col-xs-12">
        <p class="pa1">Por su arquitectura colonial californiana, el Hotel Guadalajara es considerado patrimonio arquitectónico del Departamento del Valle del Cauca, por lo que es punto de encuentro y sitio obligado de visita para todos los vallecaucanos. Ideal para vacaciones, recreación, negocios o sencillamente para buscar paz y tranquilidad.</p>
      </div>
    </div>
  </div>
  <center>
    <div class="table-responsive hotel" >
      <div class="row">
        <div class="col-sm-6 col-md-4 col-xs-12">
          <table border="1" class="table table-bordered">
            <thead>
              <tr>
                <th colspan="2">Informacion general</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tipo:</td>
                <td>Alojamiento,Hotel</td>
              </tr> 
              <tr>
                <td>Atencion:</td>
                <td>Todos los dias</td>
              </tr> 
              <tr>
                <td>Tipo alojamiento:</td>
                <td>Habitaciones con baños privados</td>
              </tr> 
              <tr>
                <td>Reservas:</td>
                <td>Habitaciones con baños privados</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-sm-6 col-md-4">
          <table  border="1" class="table table-hover table-striped table-bordered">
            <thead>
              <tr>
                <th colspan="2">Servicios</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Habitaciones Jr Suite</td>
                <td>Sauna</td>
              </tr> 
              <tr>
                <td>Habitaciones Estándar</td>
                <td>spa</td>
              </tr>
              <tr>
                <td>Baño Privado</td>
                <td>Aire acondicionado</td>
              </tr>
              <tr>
                <td>Baño Privado</td>
                <td>Aire acondicionado</td>
              </tr>
              <tr>
                <td>Baño Privado</td>
                <td>Aire acondicionado</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-sm-6 col-md-4">
          <table  border="1" class="table table-hover table-striped table-bordered">
            <thead>
              <tr>
                <th colspan="2">Ubicacion de contacto</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Direccion: </td>
                <td>Calle 1 No. 13 - 33</td>
              </tr> 
              <tr>
                <td>Telefono: </td>
                <td>(+57) (2) 236 11 11</td>
              </tr>
              <tr>
                <td>Baño Privado</td>
                <td>Aire acondicionado</td>
              </tr>
              <tr>
                <td>Baño Privado</td>
                <td>Aire acondicionado</td>
              </tr>
              <tr>
                <td>Baño Privado</td>
                <td>Aire acondicionado</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </center>
</div>
<?php include DIR . 'view/partial/foot.php' ?>