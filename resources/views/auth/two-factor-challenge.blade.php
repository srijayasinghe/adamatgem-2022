@extends('layouts.app-login')
@section('content')


<main class="login-form login-form-backend adamant-backend-log-full-wrap">
    <div class="cotainer">
        <div class="row justify-content-center">


            <div class="col-md-4">
                <div class="card new-login-section">

                    <div class="card-header login-header">Admant Gems Two Factor Athentication</div>
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

            <form method="POST" action="{{ route('two-factor.login') }}">
                {!! csrf_field() !!}

                <div class="row d-flex justify-content-center">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="email_address" class="login-lable-text"
                                    for="code" value="{{ __('Code') }}">{{ __('Code') }}</label>
                                        <input id="code" class="form-control" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code">
                                  </div>
                                <div class="form-group">
                                    <label for="password" for="recovery_code" value="{{ __('Recovery Code') }}">{{ __('Recovery Code') }}</label>
                                        <input class="form-control" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code">
                                  </div>
                                <div class="form-group mb-1">
                                    <button type="submit" class="btn btn-primary login-button-section w-100">
                                    {{ __('Log in') }}
                                    </button>
                                    
                                  </div>
                                  <div class="forget-pass-wrap text-center">
                                    
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