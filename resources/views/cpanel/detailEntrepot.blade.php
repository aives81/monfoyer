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
                            <a class="btn btn-primary" href="{{ __("/Mes-entrepots") }}" role="button">
                                <i class="fa fa-arrow-circle-left"></i> Retour
                            </a>
                        </div>
                    </div>
                </div>
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    <div class="pd-20 card-box">
                        <h5 class="h4 text-blue mb-20">Customtab Tab</h5>
                        <div class="tab">
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#geoTitle" role="tab"
                                       aria-selected="true">Titre et position géo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#jourOuv" role="tab"
                                       aria-selected="false">Jours et heures d'ouverture</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#prod" role="tab"
                                       aria-selected="false">Produits</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#approvisionnement" role="tab"
                                       aria-selected="false">Journal d'approvisionnement</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="geoTitle" role="tabpanel">
                                    <div class="pd-20">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" value="" disabled class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" value="" disabled class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="x_panel">
                                                    <div class="x_title" style="font-size: 18px">
                                                        GEOLOCALISATION DES ZONES D'INTERVENTIONS
                                                    </div>
                                                    <div class="" style="height: auto">
                                                        <div id="map"></div>
                                                        <!--    Geolocation-->
                                                        <script type="text/javascript">

                                                            mapboxgl.accessToken = 'pk.eyJ1IjoiYWl2ZXMiLCJhIjoiY2tjcnRtNXY3MGR3dTJ6b2VscXc3YjhrcCJ9.YVFLXH5GQa5SvjIjN-Oo6g';

                                                            var map = new mapboxgl.Map({
                                                                container: 'map',
                                                                style: 'mapbox://styles/mapbox/light-v10',
                                                                center: [-5.547080, 7.539989],
                                                                zoom: 6.8
                                                            });

                                                            var size = 200;

                                                            // implementation of CustomLayerInterface to draw a pulsing dot icon on the map
                                                            // see https://docs.mapbox.com/mapbox-gl-js/api/#customlayerinterface for more info
                                                            var pulsingDot = {
                                                                width: size,
                                                                height: size,
                                                                data: new Uint8Array(size * size * 4),

// get rendering context for the map canvas when layer is added to the map
                                                                onAdd: function () {
                                                                    var canvas = document.createElement('canvas');
                                                                    canvas.width = this.width;
                                                                    canvas.height = this.height;
                                                                    this.context = canvas.getContext('2d');
                                                                },

// called once before every frame where the icon will be used
                                                                render: function () {
                                                                    var duration = 1000;
                                                                    var t = (performance.now() % duration) / duration;

                                                                    var radius = (size / 2) * 0.3;
                                                                    var outerRadius = (size / 2) * 0.7 * t + radius;
                                                                    var context = this.context;

// draw outer circle
                                                                    context.clearRect(0, 0, this.width, this.height);
                                                                    context.beginPath();
                                                                    context.arc(
                                                                        this.width / 2,
                                                                        this.height / 2,
                                                                        outerRadius,
                                                                        0,
                                                                        Math.PI * 2
                                                                    );
                                                                    context.fillStyle = 'rgba(0, 232, 251,' + (1 - t) + ')';
                                                                    context.fill();

// draw inner circle
                                                                    context.beginPath();
                                                                    context.arc(
                                                                        this.width / 2,
                                                                        this.height / 2,
                                                                        radius,
                                                                        0,
                                                                        Math.PI * 2
                                                                    );
                                                                    context.fillStyle = 'rgba(0, 177, 251, 1)';
                                                                    context.strokeStyle = 'white';
                                                                    context.lineWidth = 2 + 4 * (1 - t);
                                                                    context.fill();
                                                                    context.stroke();

// update this image's data with data from the canvas
                                                                    this.data = context.getImageData(
                                                                        0,
                                                                        0,
                                                                        this.width,
                                                                        this.height
                                                                    ).data;

// continuously repaint the map, resulting in the smooth animation of the dot
                                                                    map.triggerRepaint();

// return `true` to let the map know that the image was updated
                                                                    return true;
                                                                }
                                                            };

                                                            map.on('load', function () {
                                                                map.addImage('pulsing-dot', pulsingDot, {pixelRatio: 2});
                                                                map.addSource('points', {
                                                                    'type': 'geojson',
                                                                    'data': {
                                                                        'type': 'FeatureCollection',
                                                                        'features': [
                                                                            {
                                                                                'type': 'Feature',
                                                                                'properties': {
                                                                                    'description': 'Abidjan'
                                                                                },

                                                                                'geometry': {
                                                                                    'type': 'Point',
                                                                                    'coordinates': [-4.016107, 5.320357]
                                                                                }
                                                                            }
                                                                        ]
                                                                    }
                                                                });
                                                                map.addLayer({
                                                                    'id': 'points',
                                                                    'type': 'symbol',
                                                                    'source': 'points',
                                                                    'layout': {
                                                                        'text-field': ['get', 'description'],
                                                                        'text-justify': 'auto',
                                                                        'icon-image': 'pulsing-dot'
                                                                    }
                                                                });
                                                            });

                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="jourOuv" role="tabpanel">
                                    <?php $labelWorkingDayBtn = "Ajouter" ?>
                                    @if(!empty($jour[0]))
                                            <?php $labelWorkingDayBtn = "Modifier" ?>
                                        <div class="pd-20">
                                            {{ $monEntrepot->entLib }} est ouvert:
                                            <ul>
                                                @foreach($jour as $key => $day)
                                                    <li>
                                                        <b>{{ $day['jour'] }}</b>
                                                        de: {{ $day['heureDeb'] }} à {{ $day['heureFin'] }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @else
                                        <br>
                                        <div class="alert alert-info">
                                            <i class="fa fa-info-circle"></i> <b>Vous n'avez pas encore défini d'heure
                                                de travail pour votre entrepot !!</b>
                                        </div>
                                    @endif

                                    <div class="col-md-4 col-sm-12 mb-30">
                                        <a href="#" class="btn-block btn btn-primary" data-toggle="modal"
                                           data-target="#editWorkingDay" type="button">
                                            <?=$labelWorkingDayBtn?> <i class="fa fa-edit"></i>
                                        </a>

                                        <div class="modal fade" id="editWorkingDay" tabindex="-1" role="dialog"
                                             aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">
                                                            ×
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ __('/UpdateJourOuv') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="idEnt"
                                                                   value="{{ request()->segment(2) }}">
                                                            <input type="hidden" name="updateType" value="jourHeure">
                                                            <table id="heurOuv"
                                                                   class="table table-striped table-bordered">
                                                                <tr>
                                                                    <th>Jour d'ouverture</th>
                                                                    <th>Heure d'ouverture</th>
                                                                    <th>Heure de fermeture</th>
                                                                    <th>
                                                                        <button style="background: #28a745"
                                                                                type="button"
                                                                                name="add"
                                                                                class="btn btn-success btn-sm"
                                                                                id="addH"><i
                                                                                class="fa fa-plus"></i>
                                                                        </button>
                                                                    </th>
                                                                </tr>
                                                            </table>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Annuler
                                                                </button>
                                                                <button type="submit" class="btn btn-primary">
                                                                    Enregistrer les
                                                                    modifications
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="prod" role="tabpanel">
                                    <div class="pd-20">

                                        @if(count($prodsForEnt) > 0)
                                            <div class="row">
                                                <a href="#" class="btn btn-outline-primary" style="float: right"
                                                   data-toggle="modal" data-target="#bd-example-modal-lg"
                                                   type="button">
                                                    Plus de produits <i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                            <br>
                                            <div class="row">
                                                @foreach($prodsForEnt as $theseProd)
                                                    <div class="col-md-4">
                                                        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <img
                                                                        src="{{ asset("storage/".$theseProd->prodImg) }}"
                                                                        class="img-fluid img-thumbnail"
                                                                        alt="{{ $theseProd->marqLib }}">
                                                                </div>
                                                            </div>
                                                            <p><b>{{ $theseProd->marqLib }} ({{ $theseProd->prodCat }}
                                                                    )</b></p>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <ul>
                                                                        <li>
                                                                            Quantité en stock:
                                                                            <b>{{ number_format($theseProd->qteStock, 0, ',', '.') }}</b>
                                                                            <b></b>
                                                                        </li>
                                                                        <li>
                                                                            Rechargement:
                                                                            <b>{{ number_format($theseProd->puRechargement, 0, ',', '.') }}
                                                                                frcfa</b>
                                                                        </li>
                                                                        <li>
                                                                            Nouvelle bouteille:
                                                                            <b>{{ number_format($theseProd->puAchat, 0, ',', '.') }}
                                                                                frcfa</b>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <a href="#" class="btn btn-outline-primary"
                                                                       data-toggle="modal"
                                                                       data-target="#Medium-modal{{ $theseProd->posId }}"
                                                                       type="button" style="width: 100%">
                                                                        Modifier <i
                                                                            class="fa fa-edit"></i></a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a href="#" data-toggle="modal"
                                                                       data-target="#alert-modal{{ $theseProd->posId }}"
                                                                       type="button"
                                                                       class="btn btn-outline-danger"
                                                                       style="width: 100%"> Supprimer <i
                                                                            class="fa fa-trash-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Modal modification-->
                                                    <div class="modal fade" id="Medium-modal{{ $theseProd->posId }}"
                                                         tabindex="-1"
                                                         role="dialog"
                                                         aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <form action="{{ __('/updateProdEnt') }}" method="post">
                                                                @csrf
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myLargeModalLabel">
                                                                            Tu modifies: {{ $theseProd->marqLib }}
                                                                            ({{ $theseProd->prodCat }})
                                                                        </h4>
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal" aria-hidden="true">
                                                                            ×
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="posseder"
                                                                               value="{{ $theseProd->posId }}">
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-12 col-md-4 col-form-label">Quantité</label>
                                                                            <div class="col-sm-12 col-md-8">
                                                                                <input class="form-control" required
                                                                                       type="number"
                                                                                       placeholder="Ex: 200" name="qte">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-12 col-md-4 col-form-label">Prix
                                                                                rechargement</label>
                                                                            <div class="col-sm-12 col-md-8">
                                                                                <input
                                                                                    value="{{ $theseProd->puRechargement }}"
                                                                                    required class="form-control"
                                                                                    type="number" name="recharge">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-12 col-md-4 col-form-label">Prix
                                                                                nouvelle bouteille</label>
                                                                            <div class="col-sm-12 col-md-8">
                                                                                <input value="{{ $theseProd->puAchat }}"
                                                                                       required class="form-control"
                                                                                       type="number" name="newBot">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">Close
                                                                        </button>
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Enregistrer <i></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <!--Modal supression-->
                                                    <div class="modal fade" id="alert-modal{{ $theseProd->posId }}"
                                                         tabindex="-1" role="dialog"
                                                         aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm modal-dialog-centered">
                                                            <div class="modal-content bg-danger text-white">
                                                                <div class="modal-body text-center">
                                                                    <h3 class="text-white mb-15"><i
                                                                            class="fa fa-exclamation-triangle"></i>
                                                                        Alerte !!!</h3>
                                                                    <p>Veux-tu vraiment supprimer
                                                                        <b>{{ $theseProd->marqLib }}
                                                                            ({{ $theseProd->prodCat }})</b> ?</p>
                                                                    <form
                                                                        action="{{ route('prod.destroy', $theseProd->posId) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">Annuler
                                                                        </button>
                                                                        <button type="submit" class="btn btn-light">
                                                                            <i class="fa fa-trash-o"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                            </div>
                                        @else
                                            <div class="footer-wrap pd-20 mb-20">
                                                <div class="alert alert-info">
                                                    <i class="fa fa-info-circle" style="font-size: 20px"></i> <b>Tu n'as
                                                        pas encore ajouté de produits !</b>
                                                    Fais le <a href="#" class="btn btn-outline-primary"
                                                               data-toggle="modal" data-target="#bd-example-modal-lg"
                                                               type="button">ICI</a>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg"
                                             tabindex="-1"
                                             role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <form action="{{ __('/addProdForEnt') }}" method="post">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel">Ajoutez plus
                                                                de produits</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">
                                                                ×
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" name="entId"
                                                                   value="{{ request()->segment(2) }}">
                                                            <table id="addProdCLi"
                                                                   class="table table-striped table-bordered">
                                                                <tr>
                                                                    <th>Produit</th>
                                                                    <th>Quantité</th>
                                                                    <th>Prix rechargement</th>
                                                                    <th>Prix nouvelle bouteille</th>
                                                                    <th>
                                                                        <button style="background: #28a745"
                                                                                type="button"
                                                                                name="add"
                                                                                class="btn btn-success btn-sm"
                                                                                id="addProdCLiBtn"><i
                                                                                class="fa fa-plus"></i>
                                                                        </button>
                                                                    </th>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Annuler
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">
                                                                Valider
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="approvisionnement" role="tabpanel">
                                    <div class="pd-20">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Produit</th>
                                                <th scope="col">Ancienne Qte</th>
                                                <th scope="col">Nouvelle Qte</th>
                                                <th scope="col">Date d'approvisionnement</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($approvisionnement as $key => $infoAppro)
                                                <tr>
                                                    <th scope="row">{{ $key+1 }}</th>
                                                    <th scope="row">{{ $infoAppro->marqLib . " (" . $infoAppro->prodCat .")" }}</th>
                                                    <th scope="row">{{ number_format($infoAppro->oldQte, 0, ',', '.') }}</th>
                                                    <th scope="row">{{ number_format($infoAppro->newQte, 0, ',', '.') }}</th>
                                                    <th scope="row">{{ date_format(date_create($infoAppro->dateApp), 'd/m/Y') }}</th>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit
                    Hingarajiya</a>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/src/scripts/jquery.min.js')}}"></script>
    <script type="text/javascript">

        $(document).ready(function () {

            $(document).on('click', '#addProdCLiBtn', function () {
                var html = '';
                html += '<tr>';

                html += '<td><select required name="prods[]" id="" class="custom-select2 form-control">' +

                    '<option value="">Choisis un produit</option>' +
                    @foreach($allprods as $prod)
                        '<option value="{{ $prod->prodId }}">{{ $prod->marqLib }} ({{ $prod->prodCat }})</option>' +
                    @endforeach
                        '</select></td>';

                html += '<td><input type="number" required name="qte[]" class="form-control"></td>';
                html += '<td><input type="number" required name="recharge[]" class="form-control"></td>';
                html += '<td><input type="number" required name="newBot[]" class="form-control"></td>';
                html += '<td><button style="background: #dc3545;" type="button" name="remove" class="btn btn-danger btn-sm" id="rmRowJH"><i class="fa fa-trash"></i></button></td></tr>';
                $('#addProdCLi').append(html);
            });

            $(document).on('click', '#rmRowJH', function () {
                $(this).closest('tr').remove();
            });
        });

    </script>

@stop
