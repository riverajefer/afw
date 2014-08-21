@extends('layouts/default')
@section('content')

<div id="marco">
<div class="row" align="center">
	<div class="col-xs-12 col-sm-12 col-md-12">

	<img src="{{ asset('images/selfie_subir.png') }}" class="img-responsive">
	{{ Form::open( [ 'url' => 'selfie/subir', 'method' => 'post', 'files' => true ] ) }}
			<ul>
				@foreach($errors->all() as $error)
					<li class="error">{{ $error }}</li>
				@endforeach
			</ul>
			
			<div class="fileUpload">
			    <input id="uploadBtn" type="file" name="image" class="upload" required/>
			</div>
			<input id="uploadFile" placeholder="No hay foto" disabled="disabled" />

            <div style="margin-bottom: 25px" class="input-group">
                <?php $parametros1= array('class'=>'form-control mensaje', 'rows'=>'1', 'cols'=>'70', 'placeholder'=>'Mensaje','required'=>'required')?>
                 {{ Form::textarea('mensaje', null, $parametros1 ) }}
			</div>
			<input type="image" src="{{ asset('images/btn_siguiente.png') }}" class="img-responsive">
		{{ Form::close() }}
	</div>	
</div>
</div>
<script>
document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};
</script>
@stop
