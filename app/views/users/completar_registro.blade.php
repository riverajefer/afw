@extends('layouts/default')
@section('content')

<div align="center" id="marco5">
<br><br>
	<div class="row" >
		<div class="col-xs-12 col-sm-12 col-md-12">
			{{--<img src='{{ asset('images/registro.jpg') }}'class="img-responsive">--}}

	<form class="form-horizontal validar_form" role="form" method="POST" action="{{URL::to('registro/completar')}}">
			<ul>
				@foreach($errors->all() as $error)
					<li class="error">{{ $error }}</li>
				@endforeach
			</ul>

		  <div class="form-group">
		    <label for="nombre" class="col-sm-2 control-label">Nombre y apellido</label>
		    <div class="col-sm-6">
		      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y apellido" value="{{$usuario->first_name }}  {{$usuario->last_name }}" required>
		    </div>
		  </div>		
		  <div class="form-group">
		    <label for="email" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-6">
		      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$usuario->email}}" required> 
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="tel" class="col-sm-2 control-label">Teléfono</label>
		    <div class="col-sm-6">
		      <input type="number" class="form-control" name="telefono" id="tel" placeholder="Teléfono" value="{{$usuario->celular}}" required >
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="tel" class="col-sm-2 control-label">Estudias con Nosotros</label>
		    <div class="col-sm-2">
		    <p class="bg-danger" style="display:none" id="error_radio">Marca una Opción</p>
  			  <label>
		      	<input type="radio" name="estudia" id="radio_estudia" class="si" value="si" required>SI &nbsp;&nbsp;
		      </label>
		      <label>
	   	      	<input type="radio" name="estudia" id="radio_estudia" value="no">No
	   	      </label>
		    </div>
		  </div>

		<!-- Que estudia -->

		 <div class="form-group" id="idioma" style="display:none">
		    <label for="tel" class="col-sm-2 control-label">Idioma</label>
		    <div class="col-sm-2">
		    <p class="bg-danger" style="display:none" id="error_idioma">Marca una Opción</p>
  			  <label>
		      	<input type="radio" name="idioma" id="radio_idioma"  value="Inglés" >Inglés &nbsp;&nbsp;
		      </label>
		      <label>
	   	      	<input type="radio" name="idioma" id="radio_idioma" value="Francés">Francés
	   	      </label>
		    </div>
		  </div>	

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default" id="enviar">Sign in</button>
		    </div>
		  </div>
		</form>

		</div>
	</div>
</div>
<script>

$(document).ready(function(){  
  
$(".validar_form").submit( function(){
       var radio = $("input[id='radio_estudia']:checked").length;
       if(radio == ""){
            $('#error_radio').show();
            return false;
        }
   });

$(".si").click(function() {
	$("#idioma").show('slow');

$(".validar_form").submit( function(){
       var radio = $("input[id='radio_idioma']:checked").length;
       if(radio == ""){
            $('#error_idioma').show();
            return false;
        }

   });


});
  
});  
</script>
@stop
{{-- Titulo --}}
@section('title')
@parent
.:: Completar Registro ::.
@stop

