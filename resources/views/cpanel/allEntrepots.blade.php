@extends('layouts.app')

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
                            <a class="btn btn-primary" href="#" role="button">
                                Ajouter un entrepot <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @for($i = 0; $i<3; $i++)
                        <div class="col-md-4">
                            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="{{ asset('assets/src/images/total.jpg') }}"
                                             class="img-fluid img-thumbnail" alt="">
                                    </div>
                                </div>
                                <p><b>Mon entrepot de gaz</b></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary" style="width: 100%">Voir <i
                                                class="fa fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit
                    Hingarajiya</a>
            </div>
        </div>
    </div>
@stop
