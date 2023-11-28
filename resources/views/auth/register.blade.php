@extends('templates.master')

@section('content-center')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('auth.Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('auth.Name') }}</label>
                                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('auth.Email') }}</label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('auth.Password') }}</label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">{{ __('auth.Confirm Password') }}</label>
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="terms" id="terms" class="form-check-input" required />
                                    <label class="form-check-label" for="terms">
                                        {!! __('auth.I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="link">'.__('auth.Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="link">'.__('auth.Privacy Policy').'</a>',
                                        ]) !!}
                                    </label>
                                </div>
                            @endif

                            <div class="d-flex justify-content-end">
                                <a href="{{ route('login') }}" class="text-muted me-3">{{ __('auth.Already registered?') }}</a>
                                <button type="submit" class="btn btn-primary">{{ __('auth.Register') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
