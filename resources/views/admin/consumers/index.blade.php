@extends('layouts.admin')

@section('title', 'Consumers')

@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4>Consumers List</h4>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if (session('status_del'))
                    <h6 class="alert alert-danger">{{ session('status_del') }}</h6>
                @endif

                <div class="table-responsive">
                    <table id="myDataTable" class="table table-bordered table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Number</th>
                                <th>Address</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 1;
                            @endphp
                            @foreach ($consumers as $consumer)
                                <tr>
                                    <td>{{ $consumer->id }}</td>
                                    <td>{{ $consumer->name }}</td>
                                    <td>{{ $consumer->email }}</td>
                                    <td>{{ $consumer->age }}</td>
                                    <td>{{ $consumer->gender == '0' ? 'Male' : 'Female' }}</td>
                                    <td>{{ $consumer->number }}</td>
                                    <td>{{ $consumer->address }}</td>
                                    <td>
                                        <a href="{{ route('consumers.edit', $consumer->id) }}"
                                            class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('consumers.destroy', $consumer->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
