@extends('layouts/default')
@section('content')

<div id="marco">
<div class="row" align="center" >
	<div class="col-xs-12 col-sm-12 col-md-12" id="terminos">
		<img src='{{ asset('images/instrucciones.png') }}'class="img-responsive">
		<br><br>
		<img src='{{ asset('images/titulo_terminos.png') }}'class="img-responsive">
		<p>
		Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
		Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
 		cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una 
 		galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
		</p>
		<p>
		 No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.			
		</p>
		<p>
		 No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, 	
		</p>	
		<p>
		Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
		Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
 		cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una 
 		galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
		</p>
		<p>
		 No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.			
		</p>
		<p>
		 No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, 	
		</p>			
		<hr>
	
	</div>
</div>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="checkbox">
			    <label>
			      <input type="checkbox" id="checkbox" checked> 
			      <span id="t_acepto">ACEPTO TÉRMINOS Y CONDICIONES</span>
			    </label>
			 </div>	
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
			<p class="votar_hover">
			<img src='{{ asset('images/btn_siguiente.png') }}'class="img-responsive" id="acepto" style="cursor:pointer">
			</p>
		</div>		
	</div>
</div>
<script>
$(document).ready(function(){  
  
    $("#acepto").click(function() {  
        if($("#checkbox").is(':checked')) {  
        	window.location ="{{URL::to('ingreso_participantes')}}";
        } else {  
            alert("Debe Aceptar los Terminos y Condiciones");  
        }  
    });  
  
});
</script>

@stop
{{-- Titulo --}}
@section('title')
@parent
.:: Términos y Condiciones ::.
@stop

