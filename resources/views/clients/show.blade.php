@extends('app')

@section('content')
<h1>{{ $client->nome }}   <a href="{{ $client->id }}/edit">[ edit ]</a></h1>
<h4>{{ $client->fone }}</h4>
<div>
    @foreach ($numbers as $number)
        <h4>{{ $number->number }}   {{ $number->note }}  <a href="{{ $client->id }}/numbers/{{ $number->numid }}/edit">[ edit ]</a></h4>
    @endforeach
</div>
<h4><a href="{{ $client->id }}/numbers/create">+ Add new number</a></h4>
<h4>{{ $client->email }}</h4>
<h4>{{ $client->CNPJ }}</h4>
<h4>{{ $client->endereco }}</h4>
<h4>{{ $bairro->first()->bairro }}</h4>

<div class="hidden" id="lat">{{ $client->lat }}</div>
<div class="hidden" id="lng">{{ $client->lng }}</div>

<a href="https://www.google.com/maps/dir//lat,long/@-3.0772014,-59.9755038,19z/data=!3m1!4b1">open app</a>
<div id="map-canvas"></div>
<a href="//">back</a>

<script type="text/javascript" src="/js/map.js"></script>

@stop