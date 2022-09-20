@extends('layouts.app-login')
@section('content')


<main class="login-form login-form-backend adamant-backend-log-full-wrap">
    <div class="cotainer">
        <div class="row justify-content-center">


            <div class="col-md-4">
                <div class="card new-login-section">

                    <div class="card-header login-header">Adamant Gems Login Portal</div>
                    <div class="card-body login-card-body">

                        <div class="login-logo">

                            <img src="../images/adamant-icon.png" height="60px" alt="adamant-gem">
                        </div <div>
                        <x-jet-validation-errors class="md-10" />

                        @if (session('status'))
                        <div class="invalid-feedback" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        {!! csrf_field() !!}

                        

                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="email_address" class="login-lable-text"
                                        value="{{ __('Email') }}">{{ __('Email') }}</label>
                                        <input id="email" class="form-control" type="email" name="email" required autofocus>
                                  </div>
                                <div class="form-group">
                                    <label for="password" class="login-lable-text"
                                        value="{{ __('Password') }}">{{ __('Password') }}</label>
                                        <input type="password" id="password" class="form-control" type="password"
                                            name="password" required autocomplete="current-password">
                                  </div>
                                <div class="form-group mb-1">
                                    <button type="submit" class="btn btn-primary login-button-section w-100">
                                        Login
                                    </button>
                                    
                                  </div>
                                  <div class="forget-pass-wrap text-center">
                                    
                                  </div>
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