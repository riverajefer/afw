@extends('layouts/default')
@section('content')


<div class="row" align="center">
	<div class="col-xs-12 col-sm-12 col-md-12">
	{{ Form::open( [ 'url' => 'selfie/subir', 'method' => 'post', 'files' => true ] ) }}
			<ul>
				@foreach($errors->all() as $error)
					<li class="error">{{ $error }}</li>
				@endforeach
			</ul>
			
			<?php $para_file= array('required'=>'required')?>
			{{ Form::file('image',  null, $para_file) }} 
			<hr>
            <div style="margin-bottom: 25px" class="input-group">
                <?php $parametros1= array('class'=>'form-control', 'placeholder'=>'Mensaje','required'=>'required')?>
                  {{ Form::textarea('mensaje', null, $parametros1 ) }}
			</div>
		<hr>
			<input type="submit" value ="Subir Selfie">
		{{ Form::close() }}
	</div>	
</div>

@stop
