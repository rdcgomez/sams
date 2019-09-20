@extends('layouts.dodashboard')

@section('content')

  <table class="table table-dark">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Subject</th>
        <th scope="col">Time</th>
        <th scope="col">Room</th>
        <th scope="col">Attendance Status</th>
      </tr>
    </thead>

    @foreach ($users as $user)
    <tbody>
      <tr>
        <td>{{$user->id_number}}</td>
        <td>{{$user->username}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->email}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>

@endsection