@extends('backend.master')
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Default Table</h5>

      <!-- Default Table -->
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          @foreach ($users as $user)
              
          <th scope="row">1</th>
          <td>{{ $user->name}}</td>
          <td>Designer</td>
          <td>28</td>
          <td class="">
            <a href="{{ route('users.index')}}" class="btn btn-info"><i class="bi bi-plus"></i></a>
            <a href="{{ route('users.index')}}" class="btn btn-warning"><i class="bi bi-eye"></i></a>
            <a href="{{ route('users.index')}}" class="btn btn-info"><i class="bi bi-plus"></i></a>
          </td>
          @endforeach
          </tr>
        </tbody>
      </table>
      <!-- End Default Table Example -->
    </div>
  </div>
@endsection