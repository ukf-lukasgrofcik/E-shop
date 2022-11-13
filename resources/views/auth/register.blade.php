@extends('layouts.auth')

@section('content')
    <form action="{{ route('auth.register') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-sm-12">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Your name" id="name" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <label for="surname">Surname</label>
                <input type="text" name="surname" placeholder="Your surname" id="surname" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <label for="email">E-mail</label>
                <a href="{{ route('auth.login.form') }}" class="link-secondary float-end text-decoration-none font-12">Already have an account?</a>
                <input type="text" name="email" placeholder="Your e-mail" id="email" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Your password" id="password" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <label for="password_confirmation">Confirm password</label>
                <input type="password" name="password_confirmation" placeholder="Your password" id="password_confirmation" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12 text-end">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>
@endsection
