@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <main class="form-registration w-100 m-auto">
                <form action="/register" method="POST">
                    @csrf
                    <h1 class="h3 my-5 fw-normal text-center">Register Form</h1>
                    <div class="form-floating">
                        <input type="text"
                            class="form-control @error('name')
                            is-invalid
                        @enderror"
                            id="floatingInput" placeholder="name" name="name" value="{{ old('name') }}">
                        <label for="floatingInput">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text"
                            class="form-control
                            @error('username')
                            is-invalid
                        @enderror"
                            id="floatingInput" placeholder="username" name="username" value="{{ old('username') }}">
                        <label for="floatingInput">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email"
                            class="form-control @error('email')
                            is-invalid
                        @enderror"
                            id="floatingInput" placeholder="email" name="email" value="{{ old('email') }}">
                        <label for="floatingInput">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password"
                            class="form-control @error('password')
                            is-invalid
                        @enderror"
                            id="floatingInput" placeholder="password" name="password">
                        <label for="floatingInput">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100 py-2" type="submit">Sign Up</button>
                </form>
                <small class="d-block text-center mt-3">Have Account? <a href="/login">Login !</a></small>
            </main>
        </div>
    </div>
@endsection
