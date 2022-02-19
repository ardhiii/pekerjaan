@extends('layouts.index')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissable fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissable fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                </div>
            @endif
            
            <main class="form-signin"><center>
                <img class="mb-4" src="img/p.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Masuk Log</h1></center>
                <form action="/masuk_log" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old ('email') }}">
                        <label for="email">Alamat posel</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password" required>Sandi</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk Log</button>
                </form>
                <small class="d-block text-center mt-3">Belum punya akun? <a href="/registrasi">Registrasi Sekarang!</a></small>
            </main>
        </div>
    </div>
@endsection