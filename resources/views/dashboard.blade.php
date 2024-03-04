@extends('layouts.app')

@section('content')
<div class="mb-3">
    @if (session('onSuccess'))
    <div class="alert alert-success" role="alert">
        {{ session('onSuccess') }}
    </div>
@endif
</div>
<div class="d-flex justify-content-between">
    <h1 class="display-5 fw-bold text-body-emphasis">Dashboard</h1>
    <a href="{{ url('/clients/add') }}" class="btn btn-primary"> + Create Clients </a>
</div>
<p class="lead">Welcome to your dashboard. Here you can manage your account, your clients and much more.</p>
@foreach ($fileUrls as $fileUrl)
    <img src="{{ $fileUrl }}" alt="Company Logo">
@endforeach

@endsection
