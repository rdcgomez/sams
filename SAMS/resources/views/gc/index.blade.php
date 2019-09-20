@extends('layouts.dashboard')

@section('sidebar')
  <!-- Sidebar -->
  <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading"><h1>Menu</h1></div>
    <div class="list-group list-group-flush">
      <a href="{{ route('gc.index') }}" class="list-group-item list-group-item-action bg-light">Absent</a>
      <a href="{{ route('gc.index') }}" class="list-group-item list-group-item-action bg-light">Late</a>
    </div>
  </div>
  <!-- /#sidebar-wrapper -->
@endsection

@section('content')

  <div><h2><center>Welcome {{Auth::user()->name}}!</center></h2></div>

@endsection