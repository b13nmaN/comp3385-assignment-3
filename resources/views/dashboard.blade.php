@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between">
    @if (session('onSuccess'))
        <div class="alert alert-success" role="alert">
            {{ session('onSuccess') }}
        </div>
    @endif
    <h1 class="display-5 fw-bold text-body-emphasis">Dashboard</h1>
    <a href="{{ url('/clients/add') }}" class="btn btn-primary"> + Create Clients </a>
</div>
<p class="lead">Welcome to your dashboard. Here you can manage your account, your clients and much more.</p>
@endsection
