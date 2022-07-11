@extends('layouts.main')

@section('title', 'Editando: ' . $event->title);

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$event->title}}</h1>
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" class="form-control0file" name="image" id="image" placeholder="Imagem do Evento">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Eventro:</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Nome do Evento" value="{{$event->title}}">
        </div>
        <div class="form-group">
            <label for="title">Data do Eventro:</label>
            <input type="date" class="form-control" name="date" id="date" value="{{ date('Y-m-d', strtotime($event->date)) }}">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Local do Evento" value="{{$event->city}}">
        </div>
        <div class="form-group">
            <label for="title">o evento é privado?:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1" {{$event->private == 1 ? "select='selected'" : ""}}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento">{{$event->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja Grátis"> Cerveja Grátis
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Food"> Open Food
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Evento">
    </form>
</div>

@endsection
