@extends('app')

@section('content')
<h1>Edit: {!! $client->nome !!}</h1>
{!! Form::model($client, ['method' => 'PATCH', 'action' => ['ClientsController@update', $client->id]]) !!}
	@include('clients.form', ['submitButtonText' => 'Update Client'])
{!! Form::close() !!}

{!! Form::open(['method' => 'DELETE', 'action' => ['ClientsController@destroy', $client->id]]) !!}
	<div class="form-group">
		{!! Form::submit('Delete', ['class' => 'btn-btn-danger']) !!}
	</div>
{!! Form::close() !!}
<script type="text/javascript" src="/js/geolocate.js"></script>
@stop