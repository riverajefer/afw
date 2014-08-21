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
		<div class="col-xs-6 col-sm-6 col-md-6">
			<a href="{{URL::to('terminos_y_condiciones')}}" class="btn btn-success btn-lg">
			<i class="fa fa-user"></i> Participar</a>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
			<a href="{{URL::to('selfie/galeria')}}" class="btn btn-primary btn-lg">
			<i class="fa fa-thumbs-o-up"></i> Votar</a>
		</div>	
	</div>	
</div>
@stop
{{-- Titulo --}}
@section('title')
@parent
.:: Inicio ::.
@stop

