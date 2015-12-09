@extends('app')

@section('title', 'this is my title')

@section('content')
<h1>Clients</h1>

<div class="form-group">
    <select name="clinic" id="clinic" class="form-control">                                  
        @foreach ($clients as $client)
            <option value="{{ $client->id }}">{{ $client->nome }}</option>
        @endforeach
    </select>
</div>

<h2><a href="clients/create">+ New Client</a></h2>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $('#clinic').on('change', function() {
          var val = $(this).val();
          var url = "clients/" + val;
          window.location.href = val;
        });
    });
</script>
@stop