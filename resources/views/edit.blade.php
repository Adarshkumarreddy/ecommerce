@extends('layouts.app1')
@section('content')
<div class="class container">
    <div class="row">
        <div class="col-6">
        <a href="{{route('categories')}}" type="button"  style="float: right;" class="btn btn-primary float-end mt-3 ">Back</a>
        <br>
        <form method="post" action="{{route('categories.update',$categories->id)}}">
            @csrf
  <div class="form-group">
    <label for="id">ID</label>
    <input type="index" class="form-control" id="id" name="id" required value="{{$categories->id}}">
  </div>
  <div class="form-group">
    <label for="name">NAME</label>
    <input type="text" class="form-control" id="name" name="name" required value="{{$categories->name}}">
  </div>
  <div class="form-group">
    <label for="slug">SLUG</label>
    <input type="text" class="form-control" id="slug" name="slug" required value="{{$categories->slug}}">
  </div>
  <div class="form-group">
    <lable for="status">STATUS</label>
    <select id="status" name="status" class="form-control"required value="{{$categories->status}}">
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