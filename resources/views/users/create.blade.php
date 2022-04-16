@extends('base')

@section('content')

    <div class="card row">
        <div class="card-header">
            Student Registartion Form

        </div>
        <div class="card-body mx-auto col-6">
            <form method="POST" action="{{ route('user.store') }}">
                @csrf
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" name="firstname" value="{{ old('firstname') }}" class="form-control
                    @error('firstname')
                        is-invalid
                    @enderror
                    ">
                    @error('firstname')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" value="{{ old('lastname')}}" class="form-control
                    @error('lastname')
                    is-invalid
                @enderror" name="lastname">
                @error('lastname')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">UserName</label>
                    <input type="text" class="form-control
                    @error('username')
                        is-invalid
                    @enderror
                    " name="username"
                    value="{{ old('username') }}">
                    @error('username')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control
                    @error('email')
                        is-invalid
                    @enderror
                    " name="email" value="{{ old('email') }}">
                    @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control
                    @error('password')
                        is-invalid
                    @enderror
                    " name="password">
                    @error('password')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control
                    @error('password')
                        is-invalid
                    @enderror
                    " name="password_confirmation">

                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>

        </div>
    </div>
@endsection

@section('javascripts')
@endsection
