@extends('layouts.app')

@section('content')
  <h1>{{ $todo->title }}</h1>

  <div class="badge badge-danger">
    {{ $todo->due }}
  </div>
  <hr>
  <p>{{ $todo->content }}</p>

  <form method="post" action="/todos/{{ $todo->id }}">
    @csrf
    @method('DELETE')
    <button type ="submit" class="btn btn-danger mt-2 float-right">Delete</button>
  </form>
  <a href="/" class="btn btn-secondary mt-2">Go back</a>
  <a href="/todos/{{ $todo->id }}/edit" class="btn btn-primary mt-2">Edit</a>

@endsection
