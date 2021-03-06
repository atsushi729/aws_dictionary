@extends("layouts.app")
@section("content")
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-warning font-weight-bold">
        detail page
      </div>
      <div class="card-body">
        <table class="table">
          <tbody>
            <tr>
              <th>id</th>
              <td>{{$todo->id}}</td>
            </tr>
            <tr>
              <th>title</th>
              <td>{{$todo->title}}</td>
            </tr>
            <tr>
              <th>detail</th>
              <td>{{$todo->detail}}</td>
            </tr>
          </tbody>
        </table>
        <a href="{{ url('todos') }}" class="btn btn-info">back</a>
      </div>
    </div>
  </div>
</div>
@endsection