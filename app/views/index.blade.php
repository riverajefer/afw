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
<div class="row" align="center">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<img src="{{asset('images/nofan.png')}}" class="img-responsive">    	
	</div>
</div>

<div class="fb-share-button" data-href="http://localhost/afw/public/"></div>



@stop
{{-- Titulo --}}
@section('title')
@parent
.:: Inicio ::.
@stop

