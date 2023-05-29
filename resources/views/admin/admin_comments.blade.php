@extends('admin.adminlayout')

@section('content')
    <div class="container">
        <h1>Admin Comments</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->first_name }} {{ $comment->last_name }}</td>
                        <td>{{ $comment->email }}</td>
                        <td>{{ $comment->subject }}</td>
                        <td>{{ $comment->message }}</td>
                        <td>{{ $comment->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
