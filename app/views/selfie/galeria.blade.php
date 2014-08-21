@extends('layouts/default')
@section('content')


<div class="row" id="marco">
	<h1>GALERÍA</h1>
	@if(empty($selfies))
		<h1>No Hay Registros</h1>
	@else
	@foreach ($selfies as $selfie)
		<div class="col-xs-6 col-sm-3 col-md-3">
			<?php
				$foto = $selfie->foto;
				$ruta = 'uploads/thumbnail/'.$foto;
			?>
			<a href="{{URL::to('selfie/'.$selfie->id)}}" id="enlace_selfie">
				<img src="{{ asset($ruta) }}" class="thumb" alt="Votar" width="300" height="300" />
			</a>
			<p id="votos_galeria"><i class="fa fa-thumbs-o-up"></i> Votos (34)</p>
		</div>
	@endforeach
	@endif
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$(".thumb").thumbs();
	});
</script>


@stop
