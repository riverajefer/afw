@extends('layouts/default')
@section('content')


{{--
@if (!empty($data))
    <h3>Hola: {{ $data['first_name'] }} {{ $data['last_name'] }}</h3> <hr>
    <img src="{{ $data['photo']}}" height="80px">
    <hr>
    <br>
@endif

--}}

<div class="row" align="center" id="marco">
	<div class="col-xs-12 col-sm-12 col-md-12" id="terminos">
		<img src='{{ asset('images/nofan_home.png') }}'class="img-responsive">
		<br><br>
	</div>
</div>

@stop
{{-- Titulo --}}
@section('title')
@parent
.:: Inicio ::.
@stop

