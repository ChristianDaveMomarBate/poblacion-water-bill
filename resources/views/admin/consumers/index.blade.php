@extends('layouts.admin')

@section('title', 'Consumers')

@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4>Consumers List</h4>
            </div>
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                @if (session('message_delete'))
                    <div class="alert alert-danger">{{ session('message_delete') }}</div>
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
