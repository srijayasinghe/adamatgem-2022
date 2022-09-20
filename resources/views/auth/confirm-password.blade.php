

@extends('layouts.app-login')
@section('content')


<main class="login-form login-form-backend adamant-backend-log-full-wrap">
    <div class="cotainer">
        <div class="row justify-content-center">


            <div class="col-md-4">
                <div class="card new-login-section">

                    <div class="card-header login-header">Admant Gems Confirm Your Password</div>
                    <div class="card-body login-card-body">

                        <div class="login-logo">

                            <img src="../images/adamant-icon.png" height="60px" alt="adamant-gem">
                        </div
                         <div>
                        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                 </div>
                    </div>

                    <form method="POST" action="{{ route('password.confirm') }}">
               {!! csrf_field() !!}

               <div class="row d-flex justify-content-center">
                            <div class="col-md-8">

               <div class="form-group">
            <label for="password" class="login-lable-text"
                                        value="{{ __('Password') }}">{{ __('Password') }}</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="form-group mb-1">
                                    <button type="submit" class="btn btn-primary login-button-section w-100">
                                    {{ __('Confirm') }}
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
