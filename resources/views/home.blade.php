@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if(auth()->user()->isAdmin == 1 )
                <div class="card-header">Admin Dashboard</div>
                    <div class="card-body"> You are logged in, 
                    <a href="{{ url('admin/home')}}">Admin</a>!
                </div>
            @else 
                <div class="card-header">User Dashboard</div>
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        You are logged in!
                    </div>
            @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
