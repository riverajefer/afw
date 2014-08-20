@extends('layouts/default')
@section('content')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=838876096136151&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<h1>Ver</h1>
<?php
$foto = $selfie->foto;
$ruta = 'uploads/'.$foto;
?>
<div class="row" align="center">
	<div class="col-xs-12 col-sm-12 col-md-12">
		ID: {{$selfie->id}}
		<hr>
		<p>Imagen: <img src='{{ asset($ruta) }}' width="100px" ></p>
		<p>Mensaje: {{$selfie->mensaje}}</p>
		<p>URL: {{URL::full()}}</p>
		
	</div>
</div>
<div class="fb-share-button" data-href="http://localhost/afw/public/"></div>


@stop
