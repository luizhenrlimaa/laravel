@extends('layouts.admin')

@section('title' , 'Configurações')

@section('content')
<h1>Configurações</h1>

@component('components.alert')
    Teste
@endcomponent

@if (count($lista) > 0)
Lista do bolo:
<ul>
    @foreach($lista as $item)
    <li>{{$item}}</li>
    @endforeach
</ul>

@else
    Não há ingredientes listados.
@endif

@if($idade > 18)
    Eu sou maior de idade.
@else
    Eu não sou maior de idade.
@endif

<form method="POST">

@csrf

    Nome: </br>
    <input type="text" name="nome" /> </br>

    Idade: </br>
    <input type="text" name="idade" /></br>

    </br>

    <input type="submit" value="Enviar" /> </br>

    </form>



<a href="/config/info">Informações</a>
@endsection