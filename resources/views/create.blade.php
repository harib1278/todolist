@extends('layouts.app')

@section('content')
<h1>Create a new Todo</h1>
<form>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Enter title">
  </div>

  <div class="form-group">
    <label for="content">Content</label>
    <input type="text" class="form-control" id="content" placeholder="Enter content">
  </div>

  <div class="form-group">
    <label for="due">Due</label>
    <input type="text" class="form-control" id="due" placeholder="Enter due">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
