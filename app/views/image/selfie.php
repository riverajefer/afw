@extends('layouts/default')
@section('content')


<div class="row" align="center">
	<div class="col-xs-12 col-sm-12 col-md-12">
	{{ Form::open( [ 'url' => 'selfie/subir', 'method' => 'post', 'files' => true ] ) }}
		<!--<form  enctype="multipart/form-data" method="post" action="{{ url('selfie/subir') }}" autocomplete="off">-->
			<ul>
				@foreach($errors->all() as $error)
					<li class="error">{{ $error }}</li>
				@endforeach
			</ul>
			
			<input type="file" name="image" required /> 
		    {{ Form::label('mensaje', 'mensaje') }}
		    {{ Form::textarea('mensaje', 'Best field ever!') }}
<hr>
			<input type="submit" value ="Subir Selfie">
		{{form::close}}
	</div>	
</div>

@stop
