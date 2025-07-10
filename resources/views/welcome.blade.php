@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome to Laravel</div>
                    <div class="card-body">
                        @if (Auth::check())
                            <p>You are logged in!</p>
                        @else
                            <p>Welcome! Please <a href="{{ route('login') }}" class="btn btn-link">log in</a> or <a href="{{ route('register') }}" class="btn btn-link">register</a>.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
