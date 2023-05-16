@extends('layouts.main')

@section('title','HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form action="/" method="GET">
        <input type="text" name="search" id="search" class="form-control" placeholder="Busque um evento">
    </form>

</div>
<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{$search}}</h2>
    @else
    <h2>proximo eventos</h2>
    <p class="subtitle">Veja os eventos dos proximos eventos</p>
    @endif

    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
            <div class="card-body">
                <p class="card-date">{{date('m/d/y',strtotime($event->date))}}</p>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">{{count($event->users)}} Participates</p>
                <a href="/events/{{$event->id}}" class="btn btn-primary">saber Mais

                </a>
            </div>
        </div>
        @endforeach
        @if(count($events)==0 && $search)
        <p>Nao foi possivel encontra nenhum evento com o nome {{$search}}! <a href="/">Ver Todos os Eventos!</a></p>
        @elseif(count($events)==0)
        <p>Nao ha eventos disponivel</p>
        @endif
    </div>
</div>

@endsection