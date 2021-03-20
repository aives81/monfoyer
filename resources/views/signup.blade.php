@extends('viewsLayout.app')

@section('title')
    | Inscription / connexion
@stop

@section('backgroudImgSection')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h1>Rejoignez notre grande famille !!!</h1>
                            <p data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Cupiditate beatae quisquam perspiciatis adipisci ipsam quam.</p>
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>
@stop

@section('pageContent')

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mb-5">

                    <form method="post" action="{{ __('/enregistrerUser') }}" class="p-5 bg-white"
                          style="margin-top: -150px;">

                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="pnom">Vous êtes</label>
                                <select name="type" id="" class="form-control" required>
                                    <option value="">Choisissez votre catégorie d'utilisateur</option>
                                    @foreach($typeUsers as $typeUser)
                                        <option value="{{ $typeUser->typeId }}">{{ $typeUser->typeLib }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="nom">Nom</label>
                                <input type="text" id="nom" name="nom" required placeholder="Ex: Doudou"
                                       class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="pnom">Prénom(s)</label>
                                <input type="text" id="pnom" name="pnom" required placeholder="Ex: Dada"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-7">
                                <label class="text-black" for="date">Date de naissance</label>
                                <input type="date" id="date" name="dateNaiss" required class="form-control">
                            </div>
                            <div class="col-md-5">
                                <label class="text-black">Genre</label><br>
                                <label class="radio-inline">Femme <input type="radio" value="femme" required
                                                                         name="genre"></label>
                                <label class="radio-inline">Homme <input type="radio" value="homme" required
                                                                         name="genre"></label>
                            </div>

                        </div>

                        <div class="row form-group">

                            <div class="col-md-6">
                                <label class="text-black" for="tel">Téléphone</label>
                                <input type="text" id="tel" required name="tel" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="email">E-mail</label>
                                <input type="email" id="email" class="form-control">
                            </div>

                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="pass1">Mot de passe</label>
                                <input type="password" id="pass1" name="mdp" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="pass2">Retapper le mot de passe</label>
                                <input type="password" id="pass2" name="cmdp" class="form-control">
                            </div>

                        </div>

                        @if(!empty(request()->segment(2)))
                            <input type="hidden" id="parrain" name="parrainId" value="{{ request()->segment(2) }}">
                        @endif

                        <div class="row form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label><input required type="checkbox" value=""> J'ai lu et j'accepte <a href="">Les
                                            conditions générales d'utilisations</a> de monFoyer</label>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-md text-white" style="width: 100%">On y
                                    va <i class="icon-send"></i></button>
                            </div>
                        </div>


                    </form>
                </div>

                <div class="col-md-5 mb-5">


                    <form method="post" action="{{ route('login') }}" class="p-5 bg-white" style="margin-top: -150px;">
                        @csrf
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="phone">Téléphone</label>
                                <input type="text" id="phone" value="{{ old('tel') }}" name="tel" class="form-control @error('tel') is-invalid @enderror">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="pass">Mot de passe</label>
                                <input type="password" id="pass" name="password" class="form-control @error('password') is-invalid @enderror">
                            </div>
                        </div>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        <div class="row form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-md" style="width: 100%">Connexion <i class="icon-lock_open"></i></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
