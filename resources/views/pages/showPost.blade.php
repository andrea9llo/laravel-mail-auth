@extends('layouts.base')

@section('content')

    <div class="category">
      <h2>{{ $post -> category -> name }}</h2>
      <p>{{ $post -> category -> description}}</p>
      <h4>{{ $post -> title}}</h4>
      <p>{{ $post -> body }}</p>
      <div class="delete">
        <a href="{{ route('post.delete', $post -> id) }}">Elimina post</a>
      </div>

    </div>


@endsection
