@extends('layouts.auth')

@section('content')
    <form method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-sm-12">
                <label for="email">E-mail</label>
                <a href="{{ route('register') }}" class="link-secondary float-end text-decoration-none font-12">Don't have an account?</a>
                <input type="text" name="email" placeholder="Your e-mail" id="email" class="form-control">
            </div>
        </div>

        <div class="row mb-1">
            <div class="col-sm-12">
                <label for="password">Password</label>
                <a href="{{ route('password.forgot') }}" class="link-secondary float-end text-decoration-none font-12">Forgot your password?</a>
                <input type="password" name="password" placeholder="Your password" id="password" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Remember me
                    </label>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12 text-end">
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>
        </div>
    </form>
@endsection
