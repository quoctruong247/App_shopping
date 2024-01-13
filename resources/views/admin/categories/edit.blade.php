@extends('admin.layouts.app')
@section('title','Category Edit')
@section('content')
<div class="col-xl-12 col-md-12 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <form action="">
            @csrf
            <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" value="abc" id="title" >
            </div>
            <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" >
            </div>
            <div class="mb-3">
            <input type="submit" class="btn btn-primary"  value="Add">
            </div>
        </form>
</div>
</div>
</div>
@endsection