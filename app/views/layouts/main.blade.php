<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THE TIME ROCK</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
  </head>
  <body style="" background="/assets/fondo_web.jpg">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div align="center">
          <img src="/assets/logo.png" height="300" width="400">
        </div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">The time rock</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><font color="red"><strong>Inicio</font></strong></a>
        </div>
        <div class="collapse navbar-collapse main-menu" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="red"><strong>Noticias </strong></font><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="http://localhost:8000/reports">Mis noticias</a></li>
                <li><a href="#">Agregar Noticia</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="red"><strong>Eventos</strong></font><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="http://localhost:8000/events">Mis eventos</a></li>
                <li><a href="#">Agregar evento</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="red"><strong>Discografía</strong></font><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="http://localhost:8000/discographyes">Mis discografias</a></li>
                <li><a href="#">Agregar discografia</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Buscar">
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="red"><strong>Cuenta</strong></font><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="http://localhost:8000/users">Mi cuenta</a></li>
                <li><a href="#">Configuración</a></li>
                <li class="divider"></li>
                <li><a href="#">Salir</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
    	<div class="row">
        	<div class="col-md-6" align="center"><font color="white">
    		        @yield('main')
    		    </font></div>
    		    <div class="col-md-1">
    		    </div>
    		    <div class="col-md-4">
    		    </div>
    	</div>
    </div>
	   <script src="/assets/js/jquery-1.11.1.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>

