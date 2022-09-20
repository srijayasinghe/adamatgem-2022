@extends('layouts.app-login') 
@section('content')


<main class="login-form login-form-backend">
    <div class="cotainer">
        <div class="row justify-content-center">

            
            <div class="col-md-6">
                <div class="card new-login-section">
                   
                    
                    <div class="card-header login-header login-card-body">Register</div>
                    <div class="card-body">

                    

                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('register') }}">
                            {!! csrf_field() !!}

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right login-lable-text" value="{{ __('Name') }}">Name</label>
                                <div class="col-md-6">
                                    <input id="name" class="form-control" type="text" name="name" required autofocus autocomplete="name" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right login-lable-text">Email</label>
                                <div class="col-md-6">
                                    <input id="email" class="form-control" type="email" name="email" required autofocus autocomplete="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right login-lable-text">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control"  name="password" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right login-lable-text">Password Confirmation</label>
                                <div class="col-md-6">
                                    <input type="password" id="password_confirmation" class="form-control"  name="password_confirmation" required autocomplete="new-password" >
                                </div>
                            </div>

                

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms"/>
            
                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary login-button-section">
                                    Register
                                </button>
                                

                                <a class="btn btn-link forgot-passowrd" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                </div>

                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>

@endsection