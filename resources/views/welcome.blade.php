@extends('layouts.main')

@section('title','HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form action="">
        <input type="text" name="search" id="search" class="form-control" placeholder="Busque um evento">
    </form>

</div>
<div id="events-container" class="col-md-12">
    <h2>proximo eventos</h2>
    <p class="subtitle">Veja os eventos dos proximos eventos</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/evento1.jpg" alt="{{$event->title}}">
            <div class="card-body">
                <p class="card-date">10/09/2020</p>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">x Participates</p>
                <a href="http://" class="btn btn-primary">saber Mais

                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection