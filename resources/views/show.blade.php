@extends('layouts.app')

@section('content')

  <h1>{{ $todo->title }}</h1>

  <div class="label label-danger">
    {{ $todo->due }}
    <hr>
    <p>{{ $todo->content }}</p>
  </div>
  <a href="/" class="btn btn-default">Go back</a>
@endsection
