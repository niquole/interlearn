@extends('layouts.app')

@section('content')
<div>
    <div class="container forms">
        <div class="row justify-content-center ">
            <div class="col-md-5 ">
                <div class="card">
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <div class="form-group row">
                                <h1 class="card-header  center">{{ __('Login') }}</h1>
                                
                                <div class="col-md-12">
                                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                
                                <div class="col-md-12">
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row align-right">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="align-center">
                                    <button type="submit"  class="login-button submit-button">
                                        {{ __('Login') }}
                                    </button>
                                    
                                    @if (Route::has('password.request'))
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="center mt-5">
                        <span>New to Interlearn? <br></span>
                        <a class="nav-link align-center join" href="{{ route('register') }}">{{ __('Join Now') }}</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<footer-component></footer-component>
</div>
@endsection


<style scoped>
    
</style>