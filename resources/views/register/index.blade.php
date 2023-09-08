@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration">
            <form method="POST" action="/register" >
              <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
              @csrf
              <div class="form-floating">
                <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
              </div>
              <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" name="username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" name="password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
          </main>
    </div>
</div>
@endsection