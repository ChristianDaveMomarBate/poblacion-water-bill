@extends('layouts.admin')

@section('title', 'Consumer Feedback')

@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4>Consumer Feedback</h4>
            </div>
            <div class="card-body">
                @if (session('update'))
                    <div class="alert alert-success" role="alert">
                        {{ session('update') }}
                    </div>
                @endif
                @if (session('destroy'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('destroy') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table id="myDataTable" class="table table-bordered table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Consumer Name</th>
                                <th>Feedback</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($feedbacks as $feedback)
                                <tr>
                                    <td>{{ $feedback->user->name }}</td>
                                    <td>{{ $feedback->feedback_content }}</td>
                                    <td>
                                        <form action="{{ route('feedback.destroy', $feedback->id) }}" method="POST">
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
