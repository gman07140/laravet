@extends('app')

@section('content')
<h1>Add a new client</h1>
{!! Form::open(['url' => 'clients']) !!}

	@include('clients.form', ['submitButtonText' => 'Add Client'])
	
{!! Form::close() !!}

<script type="text/javascript" src="/js/geolocate.js"></script>
<script type="text/javascript" src="/js/client_input_masks.js"></script>

@stop