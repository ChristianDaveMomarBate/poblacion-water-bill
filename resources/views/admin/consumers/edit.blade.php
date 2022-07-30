@extends('layouts.admin')

@section('title', 'Edit Consumers')

@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4>
                    Consumers List
                    <a href="{{ route('consumers.index') }}" class="btn btn-danger float-right">Back</a>
                </h4>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('consumers.update', $consumers->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" value="{{ $consumers->name }}"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" value="{{ $consumers->email }}"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-form-label text-md-end">Age</label>

                        <div class="col-md-6">
                            <input id="age" type="number" value="{{ $consumers->age }}"
                                class="form-control @error('age') is-invalid @enderror" name="age"
                                value="{{ old('age') }}" required autocomplete="age">

                            @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-form-label text-md-end">Gender</label>

                        <div class="col-md-6">
                            {{-- <input id="gender" type="text"
                                class="form-control @error('gender') is-invalid @enderror" name="gender"
                                value="{{ old('gender') }}" required autocomplete="gender"> --}}

                            <select name="gender" class="form-control">
                                <option value="0" {{ $consumers->gender == '0' ? 'selected' : '' }}>Male</option>
                                <option value="1" {{ $consumers->gender == '1' ? 'selected' : '' }}>Female</option>
                            </select>

                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-form-label text-md-end">Number</label>

                        <div class="col-md-6">
                            <input id="number" type="text" value="{{ $consumers->number }}"
                                class="form-control @error('number') is-invalid @enderror" name="number"
                                value="{{ old('number') }}" required autocomplete="number">

                            @error('number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-form-label text-md-end">Address</label>

                        <div class="col-md-6">
                            <input id="address" type="text" value="{{ $consumers->address }}"
                                class="form-control @error('address') is-invalid @enderror" name="address"
                                value="{{ old('address') }}" required autocomplete="address">

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
