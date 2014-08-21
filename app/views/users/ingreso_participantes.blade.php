@extends('layouts/default')
@section('content')

<div align="center" id="marco">
	<div class="row" >
		<div class="col-xs-12 col-sm-12 col-md-12">
			<img src='{{ asset('images/titulo_home.png') }}'class="img-responsive">
			<br><br>
		</div>
	</div>
	<div class="row" >
		<div class="col-xs-12 col-sm-12 col-md-12">
			<a href="{{URL::to('login_face/0')}}" class="btn btn-primary btn-lg">
			<i class="fa fa-facebook"></i> Ingresar con Facebook</a>
		</div>	
	</div>	
</div>
@stop
{{-- Titulo --}}
@section('title')
@parent
.:: Inicio ::.
@stop

