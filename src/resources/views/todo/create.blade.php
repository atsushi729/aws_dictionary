@extends("layouts.app")
@section("content")
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-warning font-weight-bold">
       register page
      </div>
      <div class="card-body">
        <form method="POST" action="/todos">
          @csrf
          <div class="form-group">
            <label for="title" class="control-label">title</label>
            <input class="form-control" name="title" type="text">
          </div>
          <div class="form-group">
            <label for="detail" class="control-label">detail</label>
            <input class="form-control" name="detail" type="text">
          </div>
          <button class="btn btn-primary" type="submit">POST</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection