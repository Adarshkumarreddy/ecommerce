@extends('layouts.app1')
@section('content')
<div class="class container">
    <div class="row">
        <div class="col-8 mx-auto d-block mt-4">
        <a href="{{route('categories')}}" type="button"  style="float: right;" class="btn btn-primary float-end mb-3 ">Back</a>
        <br>
        <br>
        <form method="post" action="{{route('categories.store')}}" class="border border-dark p-3">
            @csrf
  <div class="form-group">
    <label for="id">ID</label>
    <input type="index" class="form-control" id="id" name="id" required>
  </div>
  <div class="form-group">
    <label for="name">NAME</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="slug">SLUG</label>
    <input type="text" class="form-control" id="slug" name="slug" required>
  </div>
  <div class="form-group">
    <lable for="status">STATUS</label>
    <select id="status" name="status" class="form-control"required>
    <option value="active">ACTIVE</option>
    <option value="inactive">IN ACTIVE</option>
</select>
</div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>
@endsection