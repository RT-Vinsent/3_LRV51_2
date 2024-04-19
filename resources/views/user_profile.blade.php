@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Profile') }}</div>
                <div class="card-body">
                    <ul>
                        <li>ID: {{ $user->id }}</li>
                        <li>Name: {{ $user->name }}</li>
                        <li>Email: {{ $user->email }}</li>
                    </ul>

                    <a href="{{ route('home') }}" class="btn btn-primary mt-4">View Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
