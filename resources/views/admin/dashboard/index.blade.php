@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            Dashboard Page
        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged in!') }}
        </div>
    </div>
@endsection
