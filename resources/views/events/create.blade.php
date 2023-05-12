@extends('layouts.main')

@section('title','Criar Evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">

    <h1>crie o seu evento </h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagen do Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="nome do evento">
        </div>
        <div class="form-group">
            <label for="title">City:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="cidade do evento">
        </div>
        <div class="form-group">
            <label for="title">O evento 'e Privado?:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Nao</option>
                <option value="1">Sim</option>

            </select>
        </div>
        <div class="form-group">
            <label for="title">Descricao:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento"></textarea>

        </div>

        <div class="form-group">
            <label for="title">Adicione items de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="OpenBar"> OpenBar
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Pista de danca"> Pista de danca
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="chop de serveja"> chop de serveja
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>


        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

@endsection