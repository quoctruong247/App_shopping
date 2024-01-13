@extends('admin.layouts.app')
@section('title','Category List')
@section('content')
<div class="col-xl-12 col-md-12 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
      <a href="{{route('admin.category.add')}}" class="btn btn-primary">Add</a>
      <table class="table">
        
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Images</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @php($i=0) 
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{++$i}} </th>
      <td>{{$category->title}}</td>
      <td><img src="{{$category->image}}" alt=""></td>
      <td>
        @if($category->status)
        <i class="fa-solid fa-toggle-on text-success fs-1"></i>
        @else
        <i class="fa-solid fa-toggle-on"></i>
        @endif
        
      </td>
      <td><a href="{{route('admin.category.edit',['id'=>$category->id])}}"><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
      <td><i class="fa-solid fa-trash text-danger"></i></td>
    </tr>
    @endforeach
  </tbody>
</table>

        
      </div>
    </div>
  </div>
@endsection