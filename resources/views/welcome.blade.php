@extends('layouts.main')

@section('title','HDC Events')

@section('content')

<h1>Ola mundo</h1>
<p>{{ $nome}}</p>
@if($nome == 'Elton')
<p>O nome Completo 'e ELton Kelvin Ferreira Justino da Silva e a sua idade e {{$idade}} <br> E voce vai ficar velho logo</p>
@elseif($nome == 'Pedro')
<p>O nome esta Errado</p>
@else
Nao tem nome
@endif

@for($i =0; $i < count($arr); $i++) <p>{{$arr[$i]}}</p>
    @endfor

    @endsection