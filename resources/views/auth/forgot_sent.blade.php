@extends('layouts.auth')

@section('content')
    <div class="row mb-3">
        <div class="col-sm-12">
                <span class="text-secondary">
                    We have sent you an e-mail notification with reset link. Please check your e-mail.
                </span>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12 text-end">
            <a href="{{ route('password.forgot') }}" class="btn btn-primary">Send reset link</a>
        </div>
    </div>
@endsection
