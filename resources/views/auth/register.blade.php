
@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-white text-center">
                    <h1 class="text-3xl font-bold">Registre</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nom" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correu" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contrasenya" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contrasenya" required autocomplete="new-password">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">{{ __('Registre') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
