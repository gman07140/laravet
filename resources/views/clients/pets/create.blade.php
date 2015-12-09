@extends('app')

@section('content')
<h1>Add a new pet</h1>

{!! Form::open(['url' => 'clients/{id}/pets']) !!}

<div class="form-group">
	{!! Form::label('owner_id', 'Owner:') !!}
	{!! Form::text('owner_id', $client, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('nome', 'Nome:') !!}
	{!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Add pet', ['class' => 'btn-btn-primary form-control']) !!}
</div>

{!! Form::close() !!}

@stop