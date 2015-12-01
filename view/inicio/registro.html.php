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
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/registro"  type="submit" class="btn btn-success invisible">Registrate</a>
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
          <a class="navbar-brand" href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/indexController">BugaRoutes</a>
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
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/registro"  type="submit" class="btn btn-success invisible">Registrarse</a>
            </div>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>

  <div class="row hotel" >
    <div class="col-md-12 col-sm-12 col-xs-12">
      <center>
        <div>
          <div id="registro2">
            <h1>REGISTRO</h1>
            <form>
              <div class="form-group">
                <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="usu_usuario">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="pass" placeholder="Password" name="usu_password">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="dus_nombre">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="dus_apellido">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="correo" placeholder="Correo"name="dus_correo">
              </div>
              <form>
                <p class="genero">
                  Elija Genero:
                  <select name="genero">
                    <option>Hombre</option>
                    <option>Mujer</option>
                   
                  </select>
                </p>
              </form>
              <div class="form-group">
                <input type="date" class="form-control" id="fecha_nacimiento" placeholder="Fecha de Nacimiento" name="dus_fecha_nacimiento">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="facebook" placeholder="Facebook" name="dus_facebook">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="twitter" placeholder="Twitter" name="dus_twitter">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="googlePlus" placeholder="Google Plus" name="dus_google_plus">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="avatar" placeholder="Avatar" name="dus_avatar">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
              </div>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/iniciar" class="btn btn-success">Enviar</a>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/inicio/index" class="btn btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </center>
    </div>
  </div>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>