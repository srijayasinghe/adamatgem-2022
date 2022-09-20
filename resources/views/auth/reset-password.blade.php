@extends('layouts.app-login') 
@section('content')


<main class="login-form login-form-backend">
    <div class="cotainer">
        <div class="row justify-content-center">

            
            <div class="col-md-5">
                <div class="card">
                   
                    
                    <div class="card-header login-header">Reset Password</div>
                    <div class="card-body">

                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.update') }}">
                            {!! csrf_field() !!}

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input id="email" class="form-control" type="email" name="email" value="{{ $request->email}}" required >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control"  name="password" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Confirmation Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password_confirmation" class="form-control"  name="password_confirmation" required autocomplete="new-password" >
                                </div>
                            </div>

                

            

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                                

        

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