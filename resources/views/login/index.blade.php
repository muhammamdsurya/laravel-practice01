@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin w-100 m-auto">
                <form action="/login" method="POST">
                    @csrf
                    <h1 class="h3 my-5 fw-normal text-center">Login</h1>

                    <div class="form-floating">
                        <input type="email"
                            class="form-control @error('email')
                            is-invalid
                        @enderror"
                            id="email" placeholder="name@example.com" name="email" autofocus required>
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="Password" placeholder="Password" name="password"
                            required>
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                </form>
                <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>
@endsection
