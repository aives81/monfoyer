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
                </div>
                <div class="card-box mb-30">
                    <h2 class="h4 pd-20">Mes commandes</h2>
                    <table class="data-table table nowrap">
                        <thead>
                        <tr>
                            <th class="">#</th>
                            <th>Entrepot</th>
                            <th colspan="2" style="text-align: center">Désignation</th>
                            <th>Type commande</th>
                            <th>Qte</th>
                            <th>Prix</th>
                            <th>Date Commande</th>
                            <th>Etat commande</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($wharehouseOrders as $key => $order)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <h5 class="font-16">{{ $order->entLib }}</h5>
                                </td>
                                <td class="table-plus">
                                    <img src="{{ 'storage/'. $order->prodImg }}" width="70" height="70"
                                         class="img-fluid" alt="">
                                </td>
                                <td>
                                    <h5 class="font-16"><?php $libProd = $order->marqLib . "(" . $order->prodCat . ")" ?></h5>
                                </td>
                                <td>{{ ucfirst($order->cmdType) }}</td>
                                <td>{{ $order->cmdQte }}</td>
                                <td>
                                    <?php
                                    if ($order->cmdType == "rechargement") {
                                        $prix = number_format((int)$order->puRechargement * $order->cmdQte, 0, ',', '.') . ' FRCFA';
                                    } else {
                                        $prix = number_format((int)$order->puAchat * $order->cmdQte, 0, ',', '.') . ' FRCFA';
                                    }
                                    echo $prix;
                                    ?>

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
                                    @if($order->cmdState == 0)
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                           href="#"
                                           role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a href="#" class="btn-block"
                                               onclick="viewOrderModal({{ $order->prodId . ',' . $order->entId . ',' . $order->cmdId . ',\'' . $order->entLib . '\',\'' . $order->prodImg . '\',\'' . $libProd . '\',\'' . $order->cmdType . '\',' . $order->cmdQte . ',\'' . $prix . '\',' . $order->cmdState }})"
                                               id="btnView{{ $order->cmdId }}" data-toggle="modal"
                                               data-target=".Medium-modal" type="button">
                                                <i class="dw dw-eye"></i> Voir
                                            </a>
                                            <!--<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Modifier</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>-->
                                        </div>
                                    </div>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!--<div class="modal fade" id="validCmd" tabindex="-1" role="dialog"
                 aria-labelledby="myLargeModalLabel" aria-hidden="true">
            </div>-->

            <div class="modal fade Medium-modal" id="viewModal" tabindex="-1" role="dialog"
                 aria-labelledby="myLargeModalLabel"
                 aria-hidden="true">
            </div>


            <div class="modal fade" id="annulCmd" tabindex="-1" role="dialog"
                 aria-labelledby="myLargeModalLabel" aria-hidden="true">
            </div>

            <script type="text/javascript">

                function viewOrderModal(monProd, entId, idCmd, entLib, img, design, typeCmd, qte, prix, etat) {

                    var state = "";

                    if (etat == 0) {
                        state = "EN ATTENTE";
                    } else if (etat == 1) {
                        state = "VALIDEE";
                    } else {
                        state = "ANNULEE"
                    }

                    var viewOrder = '<div class="modal-dialog modal-dialog-centered">\n' +
                        '                                    <div class="modal-content">\n' +
                        '                                        <div class="modal-header">\n' +
                        '                                            <h4 class="modal-title" id="myLargeModalLabel">Tu visualises la commande <b>#' + idCmd + '</b></h4>\n' +
                        '                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">\n' +
                        '                                                ×\n' +
                        '                                            </button>\n' +
                        '                                        </div>\n' +
                        '                                        <div class="modal-body">\n' +
                        '                                            <div class="row">\n' +
                        '                <div class="col-md-6">Entrepot: ' + entLib + '</div>\n' +
                        '                <div class="col-md-6">\n' +
                        '                    <h3> ' + design + '</h3>\n' +
                        '                    <br>\n' +
                        '                    <img width="100" height="100"\n' +
                        '                         src=" storage/' + img + '"\n' +
                        '                         class="img-fluid" alt="">\n' +
                        '                </div>\n' +
                        '            </div>\n' +
                        '            <div class="row">\n' +
                        '                <div class="col-md-3">Type: ' + typeCmd + '</div>\n' +
                        '                <div class="col-md-3">Qte: ' + qte + '</div>\n' +
                        '                <div class="col-md-3">Total: ' + prix + ' frcfa</div>\n' +
                        '                <div class="col-md-3">Etat: ' + state + '</div>\n' +
                        '            </div>\n' +
                        '            <div class="row">\n' +
                        '                <div class="col-md-12">\n' +
                        '                    \n' +
                        '                </div>\n' +
                        '            </div>' +
                        '                                        </div>\n' +
                        '                                        <div class="modal-footer">\n' +
                        '                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer\n' +
                        '                                            </button>\n' +
                        '                    <button onclick="modqlFunctionForCancelling(' + idCmd + ',' + entId  + ',' + monProd + ',' + qte +')" class="btn btn-danger" type="button"><i\n' +
                        '                            class="fa fa-trash-o"></i>\n' +
                        '                    </button>\n' +
                        '                    <button type="button" onclick="modalFunctionForValidation(' + idCmd + ',' + entId  + ',' + monProd + ',' + qte +')" class="btn btn-primary"><i class="fa fa-check-circle"></i></button>\n' +
                        '                </div>\n' +
                        '            </div>\n' +
                        '        </div>';

                    document.getElementById('viewModal').innerHTML = viewOrder;

                }

                function modqlFunctionForCancelling(idCmd, entId, prodId, qteCmd) {

                    validation = confirm('Tu es sur le point d\'annuler la commande #' + idCmd + ' prodId: ' + prodId);

                    if (validation) {

                        //alert('/Approuver-commandes/' + idCmd + '/cancel/' + entId + '/' + qteCmd + '/' + prodId);
                        window.location.href = '/Approuver-commandes/' + idCmd + '/cancel/' + entId + '/' + qteCmd + '-' + prodId;
                    }
                }

                function modalFunctionForValidation(idCmd, entId, prodId, qteCmd) {

                    validation = confirm('Tu es sur le point de valider la commande #' + idCmd + ' prodId: ' + prodId);

                    if (validation) {

                        //alert('/Approuver-commandes/' + idCmd + '/appr/' + entId + '/' + qteCmd + '/' + prodId);
                        window.location.href = '/Approuver-commandes/' + idCmd + '/appr/' + entId + '/' + qteCmd + '-' + prodId;
                    }
                }

            </script>
            <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit
                    Hingarajiya</a>
            </div>
        </div>
    </div>
@stop
