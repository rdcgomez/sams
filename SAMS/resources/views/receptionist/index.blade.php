@extends('layouts.rdashboard')

@section('sidebar')
    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><h1>Menu</h1></div>
        <div class="list-group list-group-flush">
          <a href="{{ route('receptionist.list') }}" class="list-group-item list-group-item-action bg-light">Teachers Attendance</a>
        </div>
         
    </div>
    <!-- /#sidebar-wrapper -->
@endsection

@section('content')

  <div><h2><center>Welcome {{Auth::user()->name}}!</center></h2></div>

@endsection