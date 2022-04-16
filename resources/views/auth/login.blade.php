@extends('base')

@section('content')

    <div class="card row">
        <div class="card-header">
            Student Registartion Form

        </div>
        <div class="card-body mx-auto col-6">
            <form method="POST" action="{{ route('login.post') }}">
                @csrf

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control
                    " name="email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control
                    " name="password">
                </div>


                <button type="submit" class="btn btn-primary btn-block mt-3">Submit</button>
            </form>

        </div>
    </div>
@endsection

@section('javascripts')
@endsection
