@extends('layouts.auth')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
                <span class="text-secondary">
                    Your password has been reset. Please log in to your account.
                </span>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12 text-end">
            <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
        </div>
    </div>
@endsection
