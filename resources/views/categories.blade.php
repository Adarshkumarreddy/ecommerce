@extends('layouts.app1')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/<svg>query.dataTables.css">
@endsection
@section('content')
<div class="class container">
    <div class="row">
        <div class="col-10  mt-3 mx-auto d-block">
        <a href="{{route('addcategories')}}" type="button" style="float: right; ml-3" class="btn btn-primary float-end mb-3">Add</a>
         <table class="table table-bordered table-hover table-rounded "id="mytable">
  <thead>
    <tr class="bg-primary">
      <th>ID</th>
      <th>NAME</th>
      <th>SLUG</th>
      <th>STATUS</th>
      <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $user)
    <tr>
      <th >{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->slug}}</td>
      <td>{{$user->status}}</td>
      <td><a href="{{route('edit',$user->id)}}">edit</a> <a href="{{route('categories.delete',$user->id)}}">delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
@endsection
@section('script')
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
  </script>
@endsection