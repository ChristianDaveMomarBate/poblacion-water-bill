@extends('layouts.admin')

@section('title', 'Billing')

@section('content')
    <div class="card">
        <div class="card-header">
            Billing Page
        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <p class="text-danger">Future of billing page.</p>
        </div>
    </div>
@endsection
