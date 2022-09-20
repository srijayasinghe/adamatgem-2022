@extends('layouts.app-login') 
@section('content')


<main class="login-form login-form-backend">
    <div class="cotainer">
        <div class="row justify-content-center">

            
            <div class="col-md-5">
                <div class="card new-login-section">
                    
                    <div class="card-header login-header">Forgot your password</div>
                    <div class="card-body">

                        <!-- <div class="mb-4 text-sm text-gray-600">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div> -->
                
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                
                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.email') }}">
                            {!! csrf_field() !!}

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right login-lable-text" value="{{ __('Email') }}">{{ __('Email') }}</label>
                                <div class="col-md-6">
                                    <input id="email" class="form-control"type="email" name="email" required autofocus>
                                </div>
                            </div>

                           

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary login-button-section">
                                    Email Password Reset Link
                                </button>
                                
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