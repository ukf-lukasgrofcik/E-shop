@extends('layouts.auth')

@section('content')
    <form method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-sm-12">
                <label for="email">E-mail</label>
                <a href="{{ route('login') }}" class="link-secondary float-end text-decoration-none font-12">Remember your password?</a>
                <input type="text" name="email" placeholder="Your e-mail" id="email" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12 text-end">
                <button type="submit" class="btn btn-primary">Send reset link</button>
            </div>
        </div>
    </form>
@endsection
