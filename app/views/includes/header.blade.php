<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li> <a href="{{URL::to('home')}}">Home</a></li>
        <li> <a href="{{URL::to('logout')}}">Salir</a></li>
        <li><a href="{{URL::to('selfie/subir')}}">Subir Selfie</a></li>
      	<li><a href="{{URL::to('selfie/galeria')}}">Galeria</a></li>
      	<li><a href="{{URL::to('terminos')}}">Términos</a></li>

        @if (Sentry::check())
          <li><a href="#">Usuario: {{ Sentry::getUser()->first_name }}</a></li>
        @endif

        
      </ul>

      <ul class="nav navbar-nav navbar-right">

        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="row" align="center">
	<div class="col-xs-12 col-sm-12 col-md-12">
		{{--<img src="{{asset('images/menu.png')}}" class="img-responsive">--}}
	</div>
</div>
