@extends('app')

@section('content')
{!! Form::model($number, ['method' => 'PATCH', 'action' => ['NumbersController@update', $client->id, $number->numid]]) !!}
<div class="form-group">
	{!! Form::label('clientid', 'Owner:') !!}
	{!! Form::text('clientid', $client->id, ['class' => 'form-control']) !!}
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
	{!! Form::submit('Update number', ['class' => 'btn-btn-primary form-control']) !!}
</div>

{!! Form::close() !!}

@stop