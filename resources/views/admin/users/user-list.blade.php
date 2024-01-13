@extends('admin.layouts.app')
@section('title','User List')
@section('content')
<div class="col-xl-12 col-md-12 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Password</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @php($i=0)
  @foreach($users as $user)
   
    <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td style="width:100px;">{{$user->password}}</td>
      <td><i class="fa-solid fa-pen-to-square text-success"></i></td>
      <td><i class="fa-solid fa-trash text-danger"></i></td>
    </tr>
   @endforeach 
  </tbody>
</table>

        
      </div>
    </div>
  </div>

@endsection