@extends('layouts.app')

@section('content')
  <h1>{{ $todo->title }}</h1>

  <div class="badge badge-danger">
    {{ $todo->due }}
  </div>
  <hr>
  <p>{{ $todo->content }}</p>

  <a href="/" class="btn btn-secondary mt-2">Go back</a>
  <a href="/todos/{{ $todo->id }}/edit" class="btn btn-primary mt-2">Edit</a>
@endsection
