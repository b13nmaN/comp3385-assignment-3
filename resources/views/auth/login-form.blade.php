@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
          <div class="card-header">
            <h3 class="mb-0">Login</h3>
          </div>
          <div class="card-body ">
            <form class="form" role="form" autocomplete="off" method="post" action="{{ route('login') }}">
              @csrf
              <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" >
              </div>
              <div class="form-group mb-3">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <button type="submit" class="btn btn-success btn-lg float-right">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
