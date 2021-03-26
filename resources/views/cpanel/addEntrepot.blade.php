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
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown">
                                    January 2018
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export List</a>
                                    <a class="dropdown-item" href="#">Policies</a>
                                    <a class="dropdown-item" href="#">View Assets</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <form action="{{ __('/enregistrerEntrepot') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nom de l'entreprise :</label>
                                    <input type="text" required name="entLib" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image descriptive :</label>
                                    <input type="file" name="entImg" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Latitude :</label>
                                    <input type="text" name="entLat" required disabled id="lat" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jour d'ouverture :</label>
                                    <input type="text" name="entLong" required disabled id="long" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Commune :</label>
                                    <select class="custom-select2 form-control" required name="comId"
                                            style="width: 100%; height: 38px;">
                                        <!--<optgroup label="Alaskan/Hawaiian Time Zone">-->
                                        <option value="">Ou se trouve votre entrepot ?</option>
                                        @foreach($communes as $commune)
                                            <option value="{{ $commune->comId }}">{{ $commune->comLib }}</option>
                                        @endforeach
                                        <!--</optgroup>-->
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description :</label>
                                    <textarea placeholder="Décrivez un peu plus l'emplacement de votre entrepot"
                                              name="entDescrip" id="descrip" cols="30" rows="10"
                                              class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-primary" id="valider" type="submit">Enregistrer <i class="fa fa-save"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit
                    Hingarajiya</a>
            </div>
        </div>
    </div>

    <script>
        if ( navigator.geolocation )
        {
            navigator.geolocation.getCurrentPosition( function(position) {

                var lng = position.coords.longitude;
                var lat = position.coords.latitude;

                //mapboxgl.accessToken = 'MAPBOX TOKEN';

                /*var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [ lng, lat ],
                    zoom: 12
                });*/

                document.getElementById('lat').value = lat;
                document.getElementById('long').value = lng;
            });
        }

        document.getElementById('valider').addEventListener("click", function(){
            document.getElementById('lat').removeAttribute("disabled");
            document.getElementById('long').removeAttribute("disabled");
        });

    </script>
@stop
