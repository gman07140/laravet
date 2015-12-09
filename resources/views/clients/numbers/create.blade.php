@extends('app')

@section('content')
<h1>Add a new number</h1>

{!! Form::open(['url' => 'clients/{id}/numbers']) !!}

<div class="form-group">
	{!! Form::label('clientid', 'Owner:') !!}
	{!! Form::text('clientid', $client, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<input type="radio" name="type" value="0" checked>Cel
	<input type="radio" name="type" value="1">Fixo
</div>
<div class="form-group">
	{!! Form::label('number', 'Number:') !!}
	{!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('note', 'Nota (opcional):') !!}
	{!! Form::text('note', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Add number', ['class' => 'btn-btn-primary form-control']) !!}
</div>

{!! Form::close() !!}
<script type="text/javascript" src="/js/fone.js"></script>
@stop