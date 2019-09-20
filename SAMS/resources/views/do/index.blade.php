@extends('layouts.dodashboard')

@section('content')

  <div><h2><center>Welcome {{Auth::user()->name}}!</center></h2></div>

@endsection