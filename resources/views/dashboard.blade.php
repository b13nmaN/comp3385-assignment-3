@extends('layouts.app')

@section('content')
<div class="mb-3">
    @if (session('onSuccess'))
    <div class="alert alert-success" role="alert">
        {{ session('onSuccess') }}
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
</div>
<div class="d-flex justify-content-between">
    <h1 class="display-5 fw-bold text-body-emphasis">Dashboard</h1>
    <div class="d-flex justify-content-center align-items-center">
        <a href="{{ url('/clients/add') }}" class="btn btn-primary align-middle text-center"> + Create Clients </a>
    </div>
</div>
<p class="lead">Welcome to your dashboard. Here you can manage your account, your clients and much more.</p>
<div class="row g-3">
    @foreach ($clients as $client)
    <div class="col-md-3"> <!-- Adjust the column size based on your preference -->
        <div class="card">
            <div class="card-body text-center">
                <img src="{{ asset('storage/photos/' . $client->company_logo) }}" alt="Company Logo" class="mb-3 img-fluid rounded">
                <h5 class="card-title">{{ $client->name }}</h5>
                <p class="card-text">{{ $client->telephone }}</p>
                <p class="card-text">{{ $client->email }}</p>
                <p class="card-text">{{ $client->address }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
