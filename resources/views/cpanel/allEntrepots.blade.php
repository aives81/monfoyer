@extends('cpanel.layouts.app')

@section('body')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>blank</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">blank</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <a class="btn btn-primary" href="{{ __('/Ajouter-entrepot') }}" role="button">
                                Ajouter un entrepot <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <br>
                    @if(isset($msg))
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success">
                                    <b>{{ $msg }}</b>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="row">
                    @if($allEntreprisesOfUser->isNotEmpty())
                        @foreach($allEntreprisesOfUser as $entreprise)
                            <div class="col-md-4">
                                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="storage/{{ $entreprise->entImg }}"
                                                 class="img-fluid img-thumbnail" alt="{{ $entreprise->entSlug }}">
                                        </div>
                                    </div>
                                    <p><b>{{ $entreprise->entLib }}</b></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a class="btn btn-outline-primary" style="width: 100%"
                                               href="{{ __('/Mon-Entrepot/'.$entreprise->entId) }}"> Voir <i
                                                    class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="footer-wrap pd-20 mb-20">
                            <div class="alert alert-info">
                                <i class="fa fa-info-circle" style="font-size: 20px"></i> <b>Tu n'as pas encore ajouté d'entrepots !</b>
                                Fais le <a href="{{ __('/Ajouter-entrepot') }}">ICI</a>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit
                    Hingarajiya</a>
            </div>
        </div>
    </div>
@stop
