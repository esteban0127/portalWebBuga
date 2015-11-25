<?php include DIR . 'view/partial/head.php' ?>
<link rel="stylesheet" href="<?php echo URL ?>css/exception.css">




<div class="container container-fluid ">
    <div>
        <div class="row">
            <div  class="col-md-12 col-sm-12 col-xs-12">
                
              <a class="aa" href="<?php echo URL ?>index.php/inicio/inicioUsuarioController" class="btn btn-danger"> <img class="img-responsive" src="<?php echo URL ?>image/banner.jpg"></a>
                
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
                <a class="navbar-brand" href="<?php echo URL ?>index.php/inicio/inicioUsuarioController">BugaRoutes</a>
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
                    <a href="<?php echo URL ?>index.php/inicio/buscarUsuarioController" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></a>
                </form>

               <ul class="nav navbar-nav navbar-right">
                    <div id="rr">
                        <a href="<?php echo URL ?>index.php/inicio/indexController"  type="submit" class="btn btn-primary">Cerrar sesion</a>
                    </div>
                    <div  id="tt">
                        <a href="<?php echo URL ?>index.php/inicio/editarController"  type="submit" class="btn btn-success">Editar datos</a>
                    </div>
                     <div  id="tt2">
                        <a href="<?php echo URL ?>index.php/inicio/panelController"  type="submit" class="btn btn-info">Panel De Control</a>
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
                <a class="navbar-brand" href="<?php echo URL ?>index.php/inicio/inicioUsuarioController">BugaRoutes</a>
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
                    <a href="<?php echo URL ?>index.php/inicio/buscarUsuarioController" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></a>
                </form>

               <ul class="nav navbar-nav navbar-right">
                    <div id="rr">
                        <a href="<?php echo URL ?>index.php/inicio/indexController"  type="submit" class="btn btn-primary">Cerrar Sesion</a>
                    </div>
                    <div  id="tt">
                        <a href="<?php echo URL ?>index.php/inicio/editarController"  type="submit" class="btn btn-success">Editar datos</a>
                    </div>
                     <div  id="tt2">
                        <a href="<?php echo URL ?>index.php/inicio/panelController"  type="submit" class="btn btn-info">Panel De Control</a>
                    </div>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
  </div>
    <div>
                <div class="container hotel">
                  <center><h2>MI ITINERARIO</h2></center>
            <div class="row">
                <div class="col-md-5 col-md-offset-10">
                    <div class="btn-group">
                        
                    </div>
                </div>
            </div>

            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Sitio</th>
                        
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                
                <td>Treato municipal</td>
                <td class="text-center">
                    <a href="" class="btn btn-primary btn-xs">Enalace a sitio</a> 
                    <a href="" class="btn btn-success btn-xs">Dar por cumplido</a> 
                    <a href="#" class="btn btn-danger btn-xs">Eliminar</a>
                </td>
                
                </tbody>

            </table>

        </div>
    </div>

  <?php include DIR . 'view/partial/foot.php' ?>