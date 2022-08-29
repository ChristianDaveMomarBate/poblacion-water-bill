@extends('layouts.app')

@section('content')
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-md-6">
                <div class="text-center my-3">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo" width="120">
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold text-center">Consumers Feedback</h1>
                        <p class="mb-2 text-muted text-center">
                            We appreciate you using our service. You may enter your
                            thoughts and feedback below.
                        </p>
                        <form method="POST" action="{{ route('feedback.store') }}">
                            @csrf
                            <div class="mb-3">
                                <textarea name="feedback_content" class="form-control" rows="5" required></textarea>
                            </div>
                            <div class="align-items-center text-center">
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Send Feedback
                                </button>
                                <a href="{{ route('userPage') }}" class="text-danger float-end">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
