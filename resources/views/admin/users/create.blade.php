@extends('templates.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Create New User</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.users.store') }}">
                @include('admin.users.partials.form', ['create' => true]);
            </form>
        </div>
    </div>
@endsection