<div class="form-group">
	{!! Form::label('nome', 'Nome:') !!}
	{!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>
<input type="radio" name="fone_radio" value="cel" checked>Cel
<input type="radio" name="fone_radio" value="fixo">Fixo
<div class="form-group">
	{!! Form::label('fone', 'Fone:') !!}
	{!! Form::text('fone', null, ['id' => 'fone', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Email:') !!}
	{!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('CNPJ', 'CNPJ:') !!}
	{!! Form::text('CNPJ', null, ['id' => 'CNPJ', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('endereco', 'Endereco:') !!}
	{!! Form::text('endereco', null, ['id' => 'endereco', 'class' => 'form-control']) !!}
</div>
<div class="hidden">
	{!! Form::label('lat', 'Lat:') !!}
	{!! Form::text('lat', null, ['id' => 'lat', 'class' => 'form-control']) !!}
</div>
<div class="hidden">
	{!! Form::label('lng', 'Lng:') !!}
	{!! Form::text('lng', null, ['id' => 'lng', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('bairro', 'Bairro:') !!}
	{!! Form::select('bairro', $bairros, null, ['id' => 'bairro', 'class' => 'form-control']) !!}
</div>
<input type="button" id="geolocate" value="Mark current location"/>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn-btn-primary form-control']) !!}
</div>