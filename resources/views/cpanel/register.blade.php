@extends('cpanel.layouts.appForm')
@section('formContent')

    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{asset('assets/vendors/images/login-page-img.png')}}" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Rejoignez-nous !</h2>
                        </div>
                        <form method="post" action="{{ __('/enregistrerUser') }}">
                            @csrf
                            <div class="select-role">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                    @foreach($typeUsers as $typeUser)
                                        <label class="btn">
                                            <input type="radio" value="{{ $typeUser->typeId }}" name="type"
                                                   id="admin">
                                            <div class="icon">
                                                @if($typeUser->typeId == 1)
                                                    <img src="{{asset('assets/vendors/images/briefcase.svg')}}"
                                                         class="svg" alt="">
                                                @else
                                                    <img src="{{asset('assets/vendors/images/person.svg')}}" class="svg"
                                                         alt="">
                                                @endif
                                            </div>
                                            <span>Je suis</span>
                                            {{ $typeUser->typeLib }}
                                        </label>
                                    @endforeach

                                </div>
                            </div>

                            <div class="input-group custom">
                                <input type="text" id="nom" name="nom" required placeholder="Ton nom"
                                       class="form-control form-control-lg">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>

                            <div class="input-group custom">
                                <input type="text" id="pnom" name="pnom" required placeholder="Tes prénoms"
                                       class="form-control form-control-lg">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>

                            <div class="select-role">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                    <label class="btn">
                                        <input type="radio" value="femme" name="genre" id="femme">
                                        <div class="icon">
                                                <img src="{{asset('assets/vendors/images/femme.png')}}" class="svg"
                                                     alt="">
                                        </div>
                                        <span>Je suis</span>
                                        une femme
                                    </label>
                                    <label class="btn">
                                        <input type="radio" value="homme" name="genre" id="homme">
                                        <div class="icon">
                                            <img src="{{asset('assets/vendors/images/person.svg')}}" class="svg"
                                                 alt="">
                                        </div>
                                        <span>Je suis</span>
                                        un homme
                                    </label>

                                </div>
                            </div>

                            <div class="input-group custom">
                                <input class="form-control date-picker form-control-lg" name="dateNaiss" placeholder="Ta date de naissance" type="text">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-calendar"></i></span>
                                </div>
                            </div>

                            <div class="input-group custom">
                                <input type="text" id="tel" required name="tel" placeholder="Ton numéro" class="form-control form-control-lg">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-phone-call"></i></span>
                                </div>
                            </div>

                            <div class="input-group custom">
                                <input type="email" id="email" placeholder="Ton mail" class="form-control form-control-lg">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-mail"></i></span>
                                </div>
                            </div>

                            <div class="input-group custom">
                                <input type="password" id="pass1" name="mdp" class="form-control form-control-lg" placeholder="**********">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="password" id="pass2" name="cmdp" class="form-control form-control-lg" placeholder="**********">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>

                            @if(!empty(request()->segment(2)))
                                <input type="hidden" id="parrain" name="parrainId" value="{{ request()->segment(2) }}">
                            @endif

                            <div class="row pb-30">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" required class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1"> J'accepte <a href="">Les
                                                conditions générales d'utilisations</a> de monFoyer</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button class="btn btn-outline-primary btn-lg btn-block" style="width: 100%">On y
                                            va <i class="fa fa-send"></i></button>
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
