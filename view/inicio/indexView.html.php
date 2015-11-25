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

  <div id="carro" >
    <div>
      <div id="carousel-example-generic" class=" col-lg-12 carousel slide container" class="slider" data-ride="carousel"  >
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" >
          <div class="item active">
            <center>
              <a href="<?php echo URL ?>index.php/inicio/eventosController"> <img class="img-responsive" src="<?php echo URL ?>image/3.jpg" width="1000px" height="390px"> </a>
            </center>
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <center>
              <a href="<?php echo URL ?>index.php/inicio/eventosController"> <img  class="img-responsive" src="<?php echo URL ?>image/1.jpg" width="1000px" height="390px"> </a>
            </center>
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <center>
              <a href="<?php echo URL ?>index.php/inicio/eventosController"><img class="img-responsive" src="<?php echo URL ?>image/2.jpg" width="1000px" height="390px"></a>
            </center>
            <div class="carousel-caption">
            </div>
          </div>
        </div>


        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <div>
    <center>
      <div class="hidden-xs hidden-md">
        <div class="col-sm-9 col-md-4 col-xs-12">
          <div class="thumbnail">
            <img src="<?php echo URL ?>image/CULTURA.png" width="100px" height="100px">
            <div class="caption">
              <h3>Cultura</h3>
              <p><a href="<?php echo URL ?>index.php/inicio/categoriaController" class="btn btn-primary" role="button">Ver mas</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-9 col-md-4 col-xs-12">
          <div class="thumbnail">
            <img src="<?php echo URL ?>image/DEPORTE.png" width="100px" height="100px">
            <div class="caption">
              <h3>Deporte</h3>
              <p><a href="<?php echo URL ?>index.php/inicio/categoriaController" class="btn btn-primary" role="button">Ver mas</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-9 col-md-4 col-xs-12">
          <div class="thumbnail">
            <img src="<?php echo URL ?>image/HISTORIA.png" width="100px" height="100px">
            <div class="caption">
              <h3>Historia</h3>
              <p><a href="<?php echo URL ?>index.php/inicio/categoriaController" class="btn btn-primary" role="button">Ver mas</a></p>
            </div>
          </div>
        </div>
      </div>
    </center>
    <center>
      <div class="visible-xs visible-md">
        <div class="col-sm-12 col-md-4 col-xs-12">
          <div class="thumbnail">
            <img src="<?php echo URL ?>image/CULTURA.png" width="100px" height="100px">
            <div class="caption">
              <h3>Cultura</h3>
              <p><a href="<?php echo URL ?>index.php/inicio/categoriaController" class="btn btn-primary" role="button">Ver mas</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-xs-12">
          <div class="thumbnail">
            <img src="<?php echo URL ?>image/DEPORTE.png" width="100px" height="100px">
            <div class="caption">
              <h3>Deporte</h3>
              <p><a href="<?php echo URL ?>index.php/inicio/categoriaController" class="btn btn-primary" role="button">Ver mas</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-xs-12">
          <div class="thumbnail">
            <img src="<?php echo URL ?>image/HISTORIA.png" width="100px" height="100px">
            <div class="caption">
              <h3>Historia</h3>
              <p><a href="<?php echo URL ?>index.php/inicio/categoriaController" class="btn btn-primary" role="button">Ver mas</a></p>
            </div>
          </div>
        </div>
      </div>
    </center>
  </div>

</div>
</div>
<?php include DIR . 'view/partial/foot.php' ?>
