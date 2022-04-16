@extends('base')

@section('content')
    <h1>This is the content</h1>

    <div class="card row">
        <div class="card-header">
            Student Registartion Form
            <a href="{{ route('user.create') }}" class="btn btn-primary float-right">Register</a>
        </div>
        <div class="card-body mx-auto col-6">
            @if (Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            <table class="table">
                <thead>
                    <th>FistName</th>
                    <th>LastName</th>
                    <th>UserName</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->firstname }}</td>
                        <td>{{ $student->lastname }}</td>
                        <td>{{ $student->username }}</td>
                        <td>{{ $student->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascripts')
@endsection
