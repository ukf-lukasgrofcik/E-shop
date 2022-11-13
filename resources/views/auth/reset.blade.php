@extends('layouts.auth')

@section('content')
    <form method="post">
        @csrf

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
                <button type="submit" class="btn btn-primary">Reset password</button>
            </div>
        </div>
    </form>
@endsection
