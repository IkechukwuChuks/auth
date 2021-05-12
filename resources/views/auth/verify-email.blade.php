@extends('templates.main')

@section('content')
    <h1>Verify Email Address</h1>

    <p>You must verify your email address to access this page.</p>

    <form action="{{ route('verification.send') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Resend verification email</button>
    </form>
@endsection