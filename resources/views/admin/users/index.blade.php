@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="container">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="fs-4 fw-semibold">List of users</div>
                </div>

                <div class="col-sm-6 text-end">
                    <button class="btn btn-primary">Add user</button>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    @include('admin.users._partials._table')
                </div>
            </div>
        </div>
    </div>
@endsection
