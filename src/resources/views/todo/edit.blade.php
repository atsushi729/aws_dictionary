@extends("layouts.app")
@section("content")
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-warning font-weight-bold">
        detail page
      </div>
      <div class="card-body">
        <form method="POST" action="/todos/{{ $todo->id }}" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="id" class="control-label">ID</label>
            <div>{{ $todo->id }}</div>
          </div>
          <hr>
          <div class="form-group">
            <label for="title" class="control-label">title</label>
            <input class="form-control" name="title" type="text" value="{{ $todo->title }}">
          </div>
          <div class="form-group">
            <label for="detail" class="control-label">detail</label>
            <input class="form-control" name="detail" type="text" value="{{ $todo->detail }}">
          </div>
          <hr>
          <button class="btn btn-primary" type="submit">update</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection