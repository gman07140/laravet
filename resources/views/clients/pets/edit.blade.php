@extends('app')

@section('content')

<h1>{!! $pet->nome !!}</h1>

{!! Form::model($pet, ['method' => 'PATCH', 'action' => ['PetsController@update', $client->id, $pet->id]]) !!}

	<div class="form-group">
		{!! Form::label('owner_id', 'Owner:') !!}
		{!! Form::text('owner_id', $client->id, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('nome', 'Nome:') !!}
		{!! Form::text('nome', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Update pet', ['class' => 'btn-btn-primary form-control']) !!}
	</div>

{!! Form::close() !!}

@stop