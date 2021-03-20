@extends('cpanel.layouts.appForm')
@section('formContent')
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{asset('assets/vendors/images/login-page-img.png')}}" alt="">
                </div>

                <div class="col-md-6 col-lg-5">

                    @if(session('error'))
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login To DeskApp</h2>
                        </div>
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group custom">
                                <input type="text" placeholder="Téléphone" value="{{ old('tel') }}"
                                       name="tel"
                                       class="form-control @error('tel') is-invalid @enderror form-control-lg">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="password" name="password" placeholder="**********" class="form-control @error('password') is-invalid @enderror form-control-lg">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            <div class="row pb-30">
{{--                                <div class="col-4">--}}
{{--                                    <div class="custom-control custom-checkbox">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                        <label class="custom-control-label" for="customCheck1">Remember</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                @if (Route::has('password.request'))
                                    <div class="col-12">
                                        <div class="forgot-password">
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Mot de passe oublié ?') }}
                                            </a>
                                        </div>
                                    </div>
                                @endif

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button type="submit" class="btn btn-primary btn-md" style="width: 100%">Connexion <i class="icon-lock_open"></i></button>
                                    </div>
                                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                                        OU
                                    </div>
                                    <div class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block" href="{{ __('/Ouvrir-une-session') }}">Rejoignez-nous maintenant !</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
