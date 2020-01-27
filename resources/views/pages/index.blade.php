@extends('layouts.base')

@section('content')

  @foreach ($categories as $category)
    <div class="category">
      <h2>{{ $category -> name }}</h2>
      <p>{{ $category -> description}}</p>
      @foreach ($category-> posts as $post)
        <h4><a href="{{route('post.show', $post -> id)}}">{{ $post -> title}}</a></h4>

      @endforeach


    </div>

  @endforeach
  <form action="{{route('logout')}}" method="post">
    @csrf
    @method('POST')
    <input type="submit" name="submit" value="esci">
  </form>

@endsection
