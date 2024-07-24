@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="header-page mb-3">
        <h1>Crea Nuovo Progetto</h1>
    </div>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="type_id" class="form-label">Tipologia</label>
            <select class="form-control" id="type_id" name="type_id">
                <option value="">Seleziona una tipologia</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="technologies" class="form-label">Tecnologie</label>
            <select multiple class="form-control" id="technologies" name="technologies[]">
                @foreach($technologies as $technology)
                    <option value="{{ $technology->id }}">{{ $technology->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
</div>
@endsection
