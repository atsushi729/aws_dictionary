@extends("layouts.app")
@section("content")
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-warning font-weight-bold">
        AWS dictionary
      </div>
      <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
        @endif
        <a href="{{ url('todos/create') }}" class="btn btn-success mb-3">POST</a>
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>title</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($todos as $todo)
            <tr>
              <td>{{ $todo->id }}</td>
              <td>{{ $todo->title }}</td>
              <td><a href="{{ url('todos/' . $todo->id) }}" class="btn btn-info">detail</a></td>
              <td><a href="{{ url('todos/' . $todo->id . '/edit') }}" class="btn btn-primary">edit</a></td>
              <td>
                <form method="POST" action="/todos/{{ $todo->id }}">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection