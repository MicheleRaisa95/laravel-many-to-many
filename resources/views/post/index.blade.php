@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="header-page justify-content-between d-flex align-items-center mb-3">
        <h1>Pagina Post</h1>
       <div>
         <button class="btn btn-primary">Crea Nuovo</button>
       </div>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col" class="col-1" >#</th>
      <th scope="col" class="col-8">Title</th>
      <th scope="col" class="col-3"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{ $post->slug}}</td>
      <td>
        <div class="d-flex gap-2">
          <a href="{{ route('post.show', $post->id) }}" as="button" class="btn btn-info"><i class="fa-solid fas fa-magnifying-glass"></i></a>
          <a href="" as="button" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
          <a href="" as="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
