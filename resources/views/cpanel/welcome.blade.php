@extends('cpanel.layouts.app')

@section('body')
    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="{{asset('assets/vendors/images/banner-img.png')}}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4 class="font-20 weight-500 mb-10 text-capitalize">
                            Bon retour parmi nous
                            <div class="weight-600 font-30 text-blue">{{ Auth::user()->pnom." ".Auth::user()->nom }} !
                            </div>
                        </h4>
                        <p class="font-18 max-width-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde
                            hic
                            non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure
                            fugiat,
                            veniam non quaerat mollitia animi error corporis.</p>
                    </div>
                </div>
            </div>

            @if(Auth::user()->typeId == 1)
                <div class="row">
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data">
                                    <div id="chart"></div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">2020</div>
                                    <div class="weight-600 font-14">Total</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data">
                                    <div id="chart2"></div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">400</div>
                                    <div class="weight-600 font-14">Shell GAZ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data">
                                    <div id="chart3"></div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">350</div>
                                    <div class="weight-600 font-14">SIMAM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data">
                                    <div id="chart4"></div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">$6060</div>
                                    <div class="weight-600 font-14">Petroci</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 mb-30">
                        <div class="card-box height-100-p pd-20">
                            <h2 class="h4 mb-20">Activity</h2>
                            <div id="chart5"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 mb-30">
                        <div class="card-box height-100-p pd-20">
                            <h2 class="h4 mb-20">Lead Target</h2>
                            <div id="chart6"></div>
                        </div>
                    </div>
                </div>
            @endif

            @if(Auth::user()->typeId == 2)
            <div class="card-box mb-30">
                <h2 class="h4 pd-20">Mes commandes</h2>
                <table class="data-table table nowrap">
                    <thead>
                    <tr>
                        <th class="">#</th>
                        <th class="table-plus datatable-nosort">Image</th>
                        <th>Désignation</th>
                        <th>Type commande</th>
                        <th>Qte</th>
                        <th>Prix</th>
                        <th>Date Commande</th>
                        <th>Etat commande</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $key => $order)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td class="table-plus">
                                <img src="{{ 'storage/'. $order->prodImg }}" width="70" height="70" alt="">
                            </td>
                            <td>
                                <h5 class="font-16">{{ $order->marqLib }}({{ $order->prodCat }})</h5>
                            </td>
                            <td>{{ ucfirst($order->cmdType) }}</td>
                            <td>{{ $order->cmdQte }}</td>
                            <td>
                                @if($order->cmdType == "rechargement")
                                    {{ number_format((int)$order->puRechargement * $order->cmdQte, 0, ',', '.') }}
                                @else
                                    {{ number_format((int)$order->puAchat * $order->cmdQte, 0, ',', '.') }}
                                @endif
                            </td>
                            <td>{{ $order->cmdDate }}</td>
                            <td>
                                @if($order->cmdState == 0)
                                    <div class="alert alert-info">
                                        EN ATTENTE
                                    </div>
                                @elseif($order->cmdState == 1)
                                    <div class="alert alert-success">
                                        VALIDEE
                                    </div>
                                @else
                                    <div class="alert alert-danger">
                                        ANNULEE
                                    </div>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                       role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @endif

            <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit
                    Hingarajiya</a>
            </div>
        </div>
    </div>
    <!-- js -->
@stop
