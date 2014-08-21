@extends('layouts/default')
@section('content')

<?php
$foto = $selfie->foto;
$ruta = 'uploads/'.$foto;
?>

<div class="row" align="center" id="marco">
	<div class="col-xs-12 col-sm-12 col-md-6" id="foto">
		<h3><i class="fa fa-thumbs-o-up"></i> Votos (45)</h3>
		<img src='{{ asset($ruta) }}' width="400px" class="img-responsive img-thumbnail">		
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6" id="mensaje">
	<p>
		{{$selfie->mensaje}}
		<div id="enviar_voto">
			<a href="#" class="votar_hover" id="votar">
				<img src='{{ asset('images/btn_votar.png') }}'  class="img-responsive">		
		    </a>
		</div>
	</div>	
</div>

<!-- Modal Alerta de Registro-->
<div class="modal fade" id="myModalA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Hola, debes estar registrado para votar !!!</h3>
        <a href="{{URL::to('login_face/'.$selfie->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o"></i> Registrar </a> 
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Alerta de Completar Registro-->
<div class="modal fade" id="myModalR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Completa tu Registro</h3>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<script>
/**** Envio de  Voto Like Me Gusta **/
<?php
if(Sentry::Check())
{
	$user_id = Sentry::getUser()->id;
	$registro = User::Find($user_id)->registro_completo;
	
	if($registro=='0')
	{
		?>
			$('#myModalR').modal('show')
		<?php
	}
}
?>
</script>


<script>
/**** Envio de  Voto Like Me Gusta **/
$('#votar').click(function () {
<?php
if(Sentry::Check())
{
	?>
	 alert("Voto Enviado");
	<?php 
}
else{ 
?> 

$('#myModalA').modal('show')	

<?php } ?>

});
</script>


@stop
