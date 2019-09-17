@extends('layouts.dashboard')

@section('sidebar')
  <!-- Sidebar -->
  <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">
      <h1>Menu</h1>
    </div>
    <div class="list-group list-group-flush">
      <a href="{{ route('student.index') }}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
      <a href="{{ route('student.show', Auth::user()->id) }}" class="list-group-item list-group-item-action bg-light">My Class List</a>
    </div>
  </div>
  <!-- /#sidebar-wrapper -->
@endsection

@section('content')

  <div>Welcome {{Auth::user()->name}} to the Dashboard!</div>

@endsection