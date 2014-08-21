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

<style>
.fileUpload {
	position: relative;
	overflow: hidden;
	margin: 10px;
}
.fileUpload input.upload {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
</style>



<div class="row" align="center" id="marco">
	<div class="col-xs-12 col-sm-12 col-md-12" id="terminos">
		<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
		<div class="fileUpload btn btn-primary">
		    <span>Upload</span>
		    <input id="uploadBtn" type="file" class="upload" />
		</div>
	</div>
</div>
<script>
document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};
</script>
@stop
{{-- Titulo --}}
@section('title')
@parent
.:: Inicio ::.
@stop

