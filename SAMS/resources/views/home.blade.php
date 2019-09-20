@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                      Welcome to the dashboard <strong> {{Auth::user()->name}} </strong> 
                      <br>
                      Students Page: <a href="{{ route('student.index') }}">Dashboard</a>
                      <br>
                      Disciplinary Officers Page: <a href="{{ route('do.index') }}">Dashboard</a>
                      <br>
                      Guidance Counselors Page: <a href="{{ route('gc.index') }}">Dashboard</a>
                      <br>
                      Teachers Page: <a href="{{ route('teacher.index') }}">Dashboard</a>
                      <br>
                      Receptionist Page: <a href="{{ route('receptionist.index') }}">Dashboard</a>
                      <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
