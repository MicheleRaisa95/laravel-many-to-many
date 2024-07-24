@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="header-page mb-3">
        <h1>Modifica Progetto</h1>
    </div>
    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" required>
        </div>
        <div class="mb-3">
            <label for="type_id" class="form-label">Tipologia</label>
            <select class="form-control" id="type_id" name="type_id">
                <option value="">Seleziona una tipologia</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="5" required>{{ $project->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
</div>
@endsection
