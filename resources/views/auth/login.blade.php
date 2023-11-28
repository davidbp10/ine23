@extends('templates.master')

@section('content-center')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-authentication-card>
                    <x-slot name="logo">
                        <!-- Puedes agregar un logotipo si lo deseas -->
                    </x-slot>

                    <x-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('auth.Email') }}</label>
                            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('auth.Password') }}</label>
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" name="remember" id="remember_me" class="form-check-input" />
                            <label class="form-check-label" for="remember_me">{{ __('auth.Remember me') }}</label>
                        </div>

                        <div class="d-flex justify-content-end">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-muted me-3">{{ __('auth.Forgot your password?') }}</a>
                            @endif

                            <button type="submit" class="btn btn-primary">{{ __('auth.Log in') }}</button>

                            {{-- Botón de Registro --}}
                            <a href="{{ route('register') }}" class="btn btn-secondary ms-2">{{ __('auth.Register') }}</a>
                        </div>
                    </form>
                </x-authentication-card>
            </div>
        </div>
    </div>
@endsection
