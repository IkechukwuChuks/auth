@extends('templates.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Edit User ({{ $user->first_name }})</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                @method('PATCH')
                @include('admin.users.partials.form')
            </form>
        </div>
    </div>
@endsection