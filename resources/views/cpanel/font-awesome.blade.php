@extends('layouts.app')

@section('body')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Font Awesome Icons</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Icons</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown">
                                    January 2020
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

                <div class="search-icon-box bg-white box-shadow border-radius-10 mb-30">
                    <input type="text" class="border-radius-10" id="filter_input" placeholder="Search Icons..."
                           title="Type in a name">
                    <i class="search_icon dw dw-search"></i>
                </div>
                <div id="filter_list">
                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">41 New Icons in 4.7</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-address-book" aria-hidden="true"></i>address-book </a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-address-book-o" aria-hidden="true"></i>address-book-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-address-card" aria-hidden="true"></i>address-card</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-address-card-o" aria-hidden="true"></i>address-card-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bandcamp"
                                                                                      aria-hidden="true"></i>bandcamp</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bath"
                                                                                      aria-hidden="true"></i>bath</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bathtub"
                                                                                      aria-hidden="true"></i>bathtub
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-drivers-license" aria-hidden="true"></i>drivers-license
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-drivers-license-o" aria-hidden="true"></i>drivers-license-o
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-eercast"
                                                                                      aria-hidden="true"></i>eercast</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-envelope-open" aria-hidden="true"></i>envelope-open</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-envelope-open-o"
                                        aria-hidden="true"></i>envelope-open-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-etsy"
                                                                                      aria-hidden="true"></i>etsy</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-free-code-camp" aria-hidden="true"></i>free-code-camp</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-grav"
                                                                                      aria-hidden="true"></i>grav</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-handshake-o" aria-hidden="true"></i>handshake-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-id-badge"
                                                                                      aria-hidden="true"></i>id-badge</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-id-card"
                                                                                      aria-hidden="true"></i>id-card</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-id-card-o"
                                                                                      aria-hidden="true"></i>id-card-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-imdb"
                                                                                      aria-hidden="true"></i>imdb</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-linode"
                                                                                      aria-hidden="true"></i>linode</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-meetup"
                                                                                      aria-hidden="true"></i>meetup</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-microchip"
                                                                                      aria-hidden="true"></i>microchip</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-podcast"
                                                                                      aria-hidden="true"></i>podcast</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-quora"
                                                                                      aria-hidden="true"></i>quora</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ravelry"
                                                                                      aria-hidden="true"></i>ravelry</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-s15"
                                                                                      aria-hidden="true"></i>s15 <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-shower"
                                                                                      aria-hidden="true"></i>shower</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-snowflake-o" aria-hidden="true"></i>snowflake-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-superpowers" aria-hidden="true"></i>superpowers</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-telegram"
                                                                                      aria-hidden="true"></i>telegram</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer" aria-hidden="true"></i>thermometer <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-0" aria-hidden="true"></i>thermometer-0 <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-1" aria-hidden="true"></i>thermometer-1 <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-2" aria-hidden="true"></i>thermometer-2 <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-3" aria-hidden="true"></i>thermometer-3 <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-4" aria-hidden="true"></i>thermometer-4 <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-empty" aria-hidden="true"></i>thermometer-empty</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-full" aria-hidden="true"></i>thermometer-full</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-half" aria-hidden="true"></i>thermometer-half</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-quarter" aria-hidden="true"></i>thermometer-quarter</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-three-quarters" aria-hidden="true"></i>thermometer-three-quarters</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-times-rectangle" aria-hidden="true"></i>times-rectangle
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-times-rectangle-o" aria-hidden="true"></i>times-rectangle-o
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-user-circle" aria-hidden="true"></i>user-circle</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-user-circle-o" aria-hidden="true"></i>user-circle-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-user-o"
                                                                                      aria-hidden="true"></i>user-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-vcard"
                                                                                      aria-hidden="true"></i>vcard <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-vcard-o"
                                                                                      aria-hidden="true"></i>vcard-o
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-window-close" aria-hidden="true"></i>window-close</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-window-close-o" aria-hidden="true"></i>window-close-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-window-maximize"
                                        aria-hidden="true"></i>window-maximize</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-window-minimize"
                                        aria-hidden="true"></i>window-minimize</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-window-restore" aria-hidden="true"></i>window-restore</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-wpexplorer"
                                                                                      aria-hidden="true"></i>wpexplorer</a>
                            </div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Web Application Icons</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-address-book" aria-hidden="true"></i> address-book</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-address-book-o" aria-hidden="true"></i>
                                    address-book-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-address-card" aria-hidden="true"></i> address-card</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-address-card-o" aria-hidden="true"></i>
                                    address-card-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-adjust"
                                                                                      aria-hidden="true"></i> adjust</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-american-sign-language-interpreting"
                                        aria-hidden="true"></i> american-sign-language-interpreting</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-anchor"
                                                                                      aria-hidden="true"></i> anchor</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-archive"
                                                                                      aria-hidden="true"></i>
                                    archive</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-area-chart"
                                                                                      aria-hidden="true"></i> area-chart</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-arrows"
                                                                                      aria-hidden="true"></i> arrows</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-arrows-h"
                                                                                      aria-hidden="true"></i>
                                    arrows-h</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-arrows-v"
                                                                                      aria-hidden="true"></i>
                                    arrows-v</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-asl-interpreting" aria-hidden="true"></i>
                                    asl-interpreting <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-assistive-listening-systems" aria-hidden="true"></i>
                                    assistive-listening-systems</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-asterisk"
                                                                                      aria-hidden="true"></i>
                                    asterisk</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-at"
                                                                                      aria-hidden="true"></i> at</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-audio-description" aria-hidden="true"></i>
                                    audio-description</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-automobile"
                                                                                      aria-hidden="true"></i> automobile
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-balance-scale" aria-hidden="true"></i> balance-scale</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ban"
                                                                                      aria-hidden="true"></i> ban</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bank"
                                                                                      aria-hidden="true"></i> bank <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bar-chart"
                                                                                      aria-hidden="true"></i> bar-chart</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-bar-chart-o" aria-hidden="true"></i> bar-chart-o <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-barcode"
                                                                                      aria-hidden="true"></i>
                                    barcode</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bars"
                                                                                      aria-hidden="true"></i> bars</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bath"
                                                                                      aria-hidden="true"></i> bath</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bathtub"
                                                                                      aria-hidden="true"></i> bathtub
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-battery"
                                                                                      aria-hidden="true"></i> battery
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-battery-0"
                                                                                      aria-hidden="true"></i> battery-0
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-battery-1"
                                                                                      aria-hidden="true"></i> battery-1
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-battery-2"
                                                                                      aria-hidden="true"></i> battery-2
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-battery-3"
                                                                                      aria-hidden="true"></i> battery-3
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-battery-4"
                                                                                      aria-hidden="true"></i> battery-4
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-battery-empty" aria-hidden="true"></i> battery-empty</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-battery-full" aria-hidden="true"></i> battery-full</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-battery-half" aria-hidden="true"></i> battery-half</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-battery-quarter" aria-hidden="true"></i> battery-quarter</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-battery-three-quarters" aria-hidden="true"></i>
                                    battery-three-quarters</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bed"
                                                                                      aria-hidden="true"></i> bed</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-beer"
                                                                                      aria-hidden="true"></i> beer</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bell"
                                                                                      aria-hidden="true"></i> bell</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bell-o"
                                                                                      aria-hidden="true"></i> bell-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bell-slash"
                                                                                      aria-hidden="true"></i> bell-slash</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-bell-slash-o" aria-hidden="true"></i> bell-slash-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bicycle"
                                                                                      aria-hidden="true"></i>
                                    bicycle</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-binoculars"
                                                                                      aria-hidden="true"></i> binoculars</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-birthday-cake" aria-hidden="true"></i> birthday-cake</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-blind"
                                                                                      aria-hidden="true"></i> blind</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bluetooth"
                                                                                      aria-hidden="true"></i> bluetooth</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-bluetooth-b" aria-hidden="true"></i> bluetooth-b</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bolt"
                                                                                      aria-hidden="true"></i> bolt</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bomb"
                                                                                      aria-hidden="true"></i> bomb</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-book"
                                                                                      aria-hidden="true"></i> book</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bookmark"
                                                                                      aria-hidden="true"></i>
                                    bookmark</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bookmark-o"
                                                                                      aria-hidden="true"></i> bookmark-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-braille"
                                                                                      aria-hidden="true"></i>
                                    braille</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-briefcase"
                                                                                      aria-hidden="true"></i> briefcase</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bug"
                                                                                      aria-hidden="true"></i> bug</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-building"
                                                                                      aria-hidden="true"></i>
                                    building</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-building-o"
                                                                                      aria-hidden="true"></i> building-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bullhorn"
                                                                                      aria-hidden="true"></i>
                                    bullhorn</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bullseye"
                                                                                      aria-hidden="true"></i>
                                    bullseye</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bus"
                                                                                      aria-hidden="true"></i> bus</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cab"
                                                                                      aria-hidden="true"></i> cab <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-calculator"
                                                                                      aria-hidden="true"></i> calculator</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-calendar"
                                                                                      aria-hidden="true"></i>
                                    calendar</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-calendar-check-o" aria-hidden="true"></i>
                                    calendar-check-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-calendar-minus-o" aria-hidden="true"></i>
                                    calendar-minus-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-calendar-o"
                                                                                      aria-hidden="true"></i> calendar-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-calendar-plus-o" aria-hidden="true"></i> calendar-plus-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-calendar-times-o" aria-hidden="true"></i>
                                    calendar-times-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-camera"
                                                                                      aria-hidden="true"></i> camera</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-camera-retro" aria-hidden="true"></i> camera-retro</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-car"
                                                                                      aria-hidden="true"></i> car</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-caret-square-o-down" aria-hidden="true"></i>
                                    caret-square-o-down</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-caret-square-o-left" aria-hidden="true"></i>
                                    caret-square-o-left</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-caret-square-o-right" aria-hidden="true"></i>
                                    caret-square-o-right</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-caret-square-o-up" aria-hidden="true"></i>
                                    caret-square-o-up</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-cart-arrow-down" aria-hidden="true"></i> cart-arrow-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cart-plus"
                                                                                      aria-hidden="true"></i> cart-plus</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cc"
                                                                                      aria-hidden="true"></i> cc</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-certificate" aria-hidden="true"></i> certificate</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-check"
                                                                                      aria-hidden="true"></i> check</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-check-circle" aria-hidden="true"></i> check-circle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-check-circle-o" aria-hidden="true"></i>
                                    check-circle-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-check-square" aria-hidden="true"></i> check-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-check-square-o" aria-hidden="true"></i>
                                    check-square-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-child"
                                                                                      aria-hidden="true"></i> child</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-circle"
                                                                                      aria-hidden="true"></i> circle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-circle-o"
                                                                                      aria-hidden="true"></i>
                                    circle-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-circle-o-notch" aria-hidden="true"></i>
                                    circle-o-notch</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-circle-thin" aria-hidden="true"></i> circle-thin</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-clock-o"
                                                                                      aria-hidden="true"></i>
                                    clock-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-clone"
                                                                                      aria-hidden="true"></i> clone</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-close"
                                                                                      aria-hidden="true"></i> close
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cloud"
                                                                                      aria-hidden="true"></i> cloud</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-cloud-download" aria-hidden="true"></i>
                                    cloud-download</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-cloud-upload" aria-hidden="true"></i> cloud-upload</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-code"
                                                                                      aria-hidden="true"></i> code</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-code-fork"
                                                                                      aria-hidden="true"></i> code-fork</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-coffee"
                                                                                      aria-hidden="true"></i> coffee</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cog"
                                                                                      aria-hidden="true"></i> cog</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cogs"
                                                                                      aria-hidden="true"></i> cogs</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-comment"
                                                                                      aria-hidden="true"></i>
                                    comment</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-comment-o"
                                                                                      aria-hidden="true"></i> comment-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-commenting"
                                                                                      aria-hidden="true"></i> commenting</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-commenting-o" aria-hidden="true"></i> commenting-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-comments"
                                                                                      aria-hidden="true"></i>
                                    comments</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-comments-o"
                                                                                      aria-hidden="true"></i> comments-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-compass"
                                                                                      aria-hidden="true"></i>
                                    compass</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-copyright"
                                                                                      aria-hidden="true"></i> copyright</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-creative-commons" aria-hidden="true"></i>
                                    creative-commons</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-credit-card" aria-hidden="true"></i> credit-card</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-credit-card-alt" aria-hidden="true"></i> credit-card-alt</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-crop"
                                                                                      aria-hidden="true"></i> crop</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-crosshairs"
                                                                                      aria-hidden="true"></i> crosshairs</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cube"
                                                                                      aria-hidden="true"></i> cube</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cubes"
                                                                                      aria-hidden="true"></i> cubes</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cutlery"
                                                                                      aria-hidden="true"></i>
                                    cutlery</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-dashboard"
                                                                                      aria-hidden="true"></i> dashboard
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-database"
                                                                                      aria-hidden="true"></i>
                                    database</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-deaf"
                                                                                      aria-hidden="true"></i> deaf</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-deafness"
                                                                                      aria-hidden="true"></i> deafness
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-desktop"
                                                                                      aria-hidden="true"></i>
                                    desktop</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-diamond"
                                                                                      aria-hidden="true"></i>
                                    diamond</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-dot-circle-o" aria-hidden="true"></i> dot-circle-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-download"
                                                                                      aria-hidden="true"></i>
                                    download</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-drivers-license" aria-hidden="true"></i> drivers-license
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-drivers-license-o" aria-hidden="true"></i>
                                    drivers-license-o <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-edit"
                                                                                      aria-hidden="true"></i> edit <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ellipsis-h"
                                                                                      aria-hidden="true"></i> ellipsis-h</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ellipsis-v"
                                                                                      aria-hidden="true"></i> ellipsis-v</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-envelope"
                                                                                      aria-hidden="true"></i>
                                    envelope</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-envelope-o"
                                                                                      aria-hidden="true"></i> envelope-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-envelope-open" aria-hidden="true"></i> envelope-open</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-envelope-open-o" aria-hidden="true"></i> envelope-open-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-envelope-square" aria-hidden="true"></i> envelope-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-eraser"
                                                                                      aria-hidden="true"></i> eraser</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-exchange"
                                                                                      aria-hidden="true"></i>
                                    exchange</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-exclamation" aria-hidden="true"></i> exclamation</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-exclamation-circle" aria-hidden="true"></i>
                                    exclamation-circle</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-exclamation-triangle" aria-hidden="true"></i>
                                    exclamation-triangle</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-external-link" aria-hidden="true"></i> external-link</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-external-link-square" aria-hidden="true"></i>
                                    external-link-square</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-eye"
                                                                                      aria-hidden="true"></i> eye</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-eye-slash"
                                                                                      aria-hidden="true"></i> eye-slash</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-eyedropper"
                                                                                      aria-hidden="true"></i> eyedropper</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-fax"
                                                                                      aria-hidden="true"></i> fax</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-feed"
                                                                                      aria-hidden="true"></i> feed <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-female"
                                                                                      aria-hidden="true"></i> female</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-fighter-jet" aria-hidden="true"></i> fighter-jet</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-archive-o" aria-hidden="true"></i>
                                    file-archive-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-audio-o" aria-hidden="true"></i> file-audio-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-code-o" aria-hidden="true"></i> file-code-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-excel-o" aria-hidden="true"></i> file-excel-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-image-o" aria-hidden="true"></i> file-image-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-movie-o" aria-hidden="true"></i> file-movie-o <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-file-pdf-o"
                                                                                      aria-hidden="true"></i> file-pdf-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-photo-o" aria-hidden="true"></i> file-photo-o <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-picture-o" aria-hidden="true"></i> file-picture-o
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-powerpoint-o" aria-hidden="true"></i>
                                    file-powerpoint-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-sound-o" aria-hidden="true"></i> file-sound-o <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-video-o" aria-hidden="true"></i> file-video-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-word-o" aria-hidden="true"></i> file-word-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-file-zip-o"
                                                                                      aria-hidden="true"></i> file-zip-o
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-film"
                                                                                      aria-hidden="true"></i> film</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-filter"
                                                                                      aria-hidden="true"></i> filter</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-fire"
                                                                                      aria-hidden="true"></i> fire</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-fire-extinguisher" aria-hidden="true"></i>
                                    fire-extinguisher</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-flag"
                                                                                      aria-hidden="true"></i> flag</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-flag-checkered" aria-hidden="true"></i>
                                    flag-checkered</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-flag-o"
                                                                                      aria-hidden="true"></i> flag-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-flash"
                                                                                      aria-hidden="true"></i> flash
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-flask"
                                                                                      aria-hidden="true"></i> flask</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-folder"
                                                                                      aria-hidden="true"></i> folder</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-folder-o"
                                                                                      aria-hidden="true"></i>
                                    folder-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-folder-open" aria-hidden="true"></i> folder-open</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-folder-open-o" aria-hidden="true"></i> folder-open-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-frown-o"
                                                                                      aria-hidden="true"></i>
                                    frown-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-futbol-o"
                                                                                      aria-hidden="true"></i>
                                    futbol-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-gamepad"
                                                                                      aria-hidden="true"></i>
                                    gamepad</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-gavel"
                                                                                      aria-hidden="true"></i> gavel</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-gear"
                                                                                      aria-hidden="true"></i> gear <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-gears"
                                                                                      aria-hidden="true"></i> gears
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-gift"
                                                                                      aria-hidden="true"></i> gift</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-glass"
                                                                                      aria-hidden="true"></i> glass</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-globe"
                                                                                      aria-hidden="true"></i> globe</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-graduation-cap" aria-hidden="true"></i>
                                    graduation-cap</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-group"
                                                                                      aria-hidden="true"></i> group
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-grab-o" aria-hidden="true"></i> hand-grab-o <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-lizard-o" aria-hidden="true"></i> hand-lizard-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-paper-o" aria-hidden="true"></i> hand-paper-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-peace-o" aria-hidden="true"></i> hand-peace-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-pointer-o" aria-hidden="true"></i>
                                    hand-pointer-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-rock-o" aria-hidden="true"></i> hand-rock-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-scissors-o" aria-hidden="true"></i> hand-scissors-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-spock-o" aria-hidden="true"></i> hand-spock-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-stop-o" aria-hidden="true"></i> hand-stop-o <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-handshake-o" aria-hidden="true"></i> handshake-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hard-of-hearing" aria-hidden="true"></i> hard-of-hearing
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-hashtag"
                                                                                      aria-hidden="true"></i>
                                    hashtag</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-hdd-o"
                                                                                      aria-hidden="true"></i> hdd-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-headphones"
                                                                                      aria-hidden="true"></i> headphones</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-heart"
                                                                                      aria-hidden="true"></i> heart</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-heart-o"
                                                                                      aria-hidden="true"></i>
                                    heart-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-heartbeat"
                                                                                      aria-hidden="true"></i> heartbeat</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-history"
                                                                                      aria-hidden="true"></i>
                                    history</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-home"
                                                                                      aria-hidden="true"></i> home</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-hotel"
                                                                                      aria-hidden="true"></i> hotel
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-hourglass"
                                                                                      aria-hidden="true"></i> hourglass</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hourglass-1" aria-hidden="true"></i> hourglass-1 <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hourglass-2" aria-hidden="true"></i> hourglass-2 <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hourglass-3" aria-hidden="true"></i> hourglass-3 <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hourglass-end" aria-hidden="true"></i> hourglass-end</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hourglass-half" aria-hidden="true"></i>
                                    hourglass-half</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hourglass-o" aria-hidden="true"></i> hourglass-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hourglass-start" aria-hidden="true"></i> hourglass-start</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-i-cursor"
                                                                                      aria-hidden="true"></i>
                                    i-cursor</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-id-badge"
                                                                                      aria-hidden="true"></i>
                                    id-badge</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-id-card"
                                                                                      aria-hidden="true"></i>
                                    id-card</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-id-card-o"
                                                                                      aria-hidden="true"></i> id-card-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-image"
                                                                                      aria-hidden="true"></i> image
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-inbox"
                                                                                      aria-hidden="true"></i> inbox</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-industry"
                                                                                      aria-hidden="true"></i>
                                    industry</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-info"
                                                                                      aria-hidden="true"></i> info</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-info-circle" aria-hidden="true"></i> info-circle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-institution" aria-hidden="true"></i> institution <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-key"
                                                                                      aria-hidden="true"></i> key</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-keyboard-o"
                                                                                      aria-hidden="true"></i> keyboard-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-language"
                                                                                      aria-hidden="true"></i>
                                    language</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-laptop"
                                                                                      aria-hidden="true"></i> laptop</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-leaf"
                                                                                      aria-hidden="true"></i> leaf</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-legal"
                                                                                      aria-hidden="true"></i> legal
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-lemon-o"
                                                                                      aria-hidden="true"></i>
                                    lemon-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-level-down"
                                                                                      aria-hidden="true"></i> level-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-level-up"
                                                                                      aria-hidden="true"></i>
                                    level-up</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-life-bouy"
                                                                                      aria-hidden="true"></i> life-bouy
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-life-buoy"
                                                                                      aria-hidden="true"></i> life-buoy
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-life-ring"
                                                                                      aria-hidden="true"></i> life-ring</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-life-saver"
                                                                                      aria-hidden="true"></i> life-saver
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-lightbulb-o" aria-hidden="true"></i> lightbulb-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-line-chart"
                                                                                      aria-hidden="true"></i> line-chart</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-location-arrow" aria-hidden="true"></i>
                                    location-arrow</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-lock"
                                                                                      aria-hidden="true"></i> lock</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-low-vision"
                                                                                      aria-hidden="true"></i> low-vision</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-magic"
                                                                                      aria-hidden="true"></i> magic</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-magnet"
                                                                                      aria-hidden="true"></i> magnet</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-mail-forward" aria-hidden="true"></i> mail-forward <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-mail-reply"
                                                                                      aria-hidden="true"></i> mail-reply
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-mail-reply-all" aria-hidden="true"></i> mail-reply-all
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-male"
                                                                                      aria-hidden="true"></i> male</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-map"
                                                                                      aria-hidden="true"></i> map</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-map-marker"
                                                                                      aria-hidden="true"></i> map-marker</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-map-o"
                                                                                      aria-hidden="true"></i> map-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-map-pin"
                                                                                      aria-hidden="true"></i>
                                    map-pin</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-map-signs"
                                                                                      aria-hidden="true"></i> map-signs</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-meh-o"
                                                                                      aria-hidden="true"></i> meh-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-microchip"
                                                                                      aria-hidden="true"></i> microchip</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-microphone"
                                                                                      aria-hidden="true"></i> microphone</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-microphone-slash" aria-hidden="true"></i>
                                    microphone-slash</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-minus"
                                                                                      aria-hidden="true"></i> minus</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-minus-circle" aria-hidden="true"></i> minus-circle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-minus-square" aria-hidden="true"></i> minus-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-minus-square-o" aria-hidden="true"></i>
                                    minus-square-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-mobile"
                                                                                      aria-hidden="true"></i> mobile</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-mobile-phone" aria-hidden="true"></i> mobile-phone <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-money"
                                                                                      aria-hidden="true"></i> money</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-moon-o"
                                                                                      aria-hidden="true"></i> moon-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-mortar-board" aria-hidden="true"></i> mortar-board <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-motorcycle"
                                                                                      aria-hidden="true"></i> motorcycle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-mouse-pointer" aria-hidden="true"></i> mouse-pointer</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-music"
                                                                                      aria-hidden="true"></i> music</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-navicon"
                                                                                      aria-hidden="true"></i> navicon
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-newspaper-o" aria-hidden="true"></i> newspaper-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-object-group" aria-hidden="true"></i> object-group</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-object-ungroup" aria-hidden="true"></i>
                                    object-ungroup</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-paint-brush" aria-hidden="true"></i> paint-brush</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-paper-plane" aria-hidden="true"></i> paper-plane</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-paper-plane-o" aria-hidden="true"></i> paper-plane-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-paw"
                                                                                      aria-hidden="true"></i> paw</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-pencil"
                                                                                      aria-hidden="true"></i> pencil</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-pencil-square" aria-hidden="true"></i> pencil-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i> pencil-square-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-percent"
                                                                                      aria-hidden="true"></i>
                                    percent</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-phone"
                                                                                      aria-hidden="true"></i> phone</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-phone-square" aria-hidden="true"></i> phone-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-photo"
                                                                                      aria-hidden="true"></i> photo
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-picture-o"
                                                                                      aria-hidden="true"></i> picture-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-pie-chart"
                                                                                      aria-hidden="true"></i> pie-chart</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-plane"
                                                                                      aria-hidden="true"></i> plane</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-plug"
                                                                                      aria-hidden="true"></i> plug</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-plus"
                                                                                      aria-hidden="true"></i> plus</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-plus-circle" aria-hidden="true"></i> plus-circle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-plus-square" aria-hidden="true"></i> plus-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-plus-square-o" aria-hidden="true"></i> plus-square-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-podcast"
                                                                                      aria-hidden="true"></i>
                                    podcast</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-power-off"
                                                                                      aria-hidden="true"></i> power-off</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-print"
                                                                                      aria-hidden="true"></i> print</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-puzzle-piece" aria-hidden="true"></i> puzzle-piece</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-qrcode"
                                                                                      aria-hidden="true"></i> qrcode</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-question"
                                                                                      aria-hidden="true"></i>
                                    question</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-question-circle" aria-hidden="true"></i> question-circle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-question-circle-o" aria-hidden="true"></i>
                                    question-circle-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-quote-left"
                                                                                      aria-hidden="true"></i> quote-left</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-quote-right" aria-hidden="true"></i> quote-right</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-random"
                                                                                      aria-hidden="true"></i> random</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-recycle"
                                                                                      aria-hidden="true"></i>
                                    recycle</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-refresh"
                                                                                      aria-hidden="true"></i>
                                    refresh</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-registered"
                                                                                      aria-hidden="true"></i> registered</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-remove"
                                                                                      aria-hidden="true"></i> remove
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-reorder"
                                                                                      aria-hidden="true"></i> reorder
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-reply"
                                                                                      aria-hidden="true"></i> reply</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-reply-all"
                                                                                      aria-hidden="true"></i> reply-all</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-retweet"
                                                                                      aria-hidden="true"></i>
                                    retweet</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-road"
                                                                                      aria-hidden="true"></i> road</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-rocket"
                                                                                      aria-hidden="true"></i> rocket</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-rss"
                                                                                      aria-hidden="true"></i> rss</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-rss-square"
                                                                                      aria-hidden="true"></i> rss-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-s15"
                                                                                      aria-hidden="true"></i> s15 <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-search"
                                                                                      aria-hidden="true"></i> search</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-search-minus" aria-hidden="true"></i> search-minus</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-search-plus" aria-hidden="true"></i> search-plus</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-send"
                                                                                      aria-hidden="true"></i> send <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-send-o"
                                                                                      aria-hidden="true"></i> send-o
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-server"
                                                                                      aria-hidden="true"></i> server</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-share"
                                                                                      aria-hidden="true"></i> share</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-share-alt"
                                                                                      aria-hidden="true"></i> share-alt</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-share-alt-square" aria-hidden="true"></i>
                                    share-alt-square</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-share-square" aria-hidden="true"></i> share-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-share-square-o" aria-hidden="true"></i>
                                    share-square-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-shield"
                                                                                      aria-hidden="true"></i> shield</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ship"
                                                                                      aria-hidden="true"></i> ship</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-shopping-bag" aria-hidden="true"></i> shopping-bag</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-shopping-basket" aria-hidden="true"></i> shopping-basket</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-shopping-cart" aria-hidden="true"></i> shopping-cart</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-shower"
                                                                                      aria-hidden="true"></i> shower</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-sign-in"
                                                                                      aria-hidden="true"></i>
                                    sign-in</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-sign-language" aria-hidden="true"></i> sign-language</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-sign-out"
                                                                                      aria-hidden="true"></i>
                                    sign-out</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-signal"
                                                                                      aria-hidden="true"></i> signal</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-signing"
                                                                                      aria-hidden="true"></i> signing
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-sitemap"
                                                                                      aria-hidden="true"></i>
                                    sitemap</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-sliders"
                                                                                      aria-hidden="true"></i>
                                    sliders</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-smile-o"
                                                                                      aria-hidden="true"></i>
                                    smile-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-snowflake-o" aria-hidden="true"></i> snowflake-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-soccer-ball-o" aria-hidden="true"></i> soccer-ball-o
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-sort"
                                                                                      aria-hidden="true"></i> sort</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-sort-alpha-asc" aria-hidden="true"></i>
                                    sort-alpha-asc</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-sort-alpha-desc" aria-hidden="true"></i> sort-alpha-desc</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-sort-amount-asc" aria-hidden="true"></i> sort-amount-asc</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-sort-amount-desc" aria-hidden="true"></i>
                                    sort-amount-desc</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-sort-asc"
                                                                                      aria-hidden="true"></i>
                                    sort-asc</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-sort-desc"
                                                                                      aria-hidden="true"></i> sort-desc</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-sort-down"
                                                                                      aria-hidden="true"></i> sort-down
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-sort-numeric-asc" aria-hidden="true"></i>
                                    sort-numeric-asc</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-sort-numeric-desc" aria-hidden="true"></i>
                                    sort-numeric-desc</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-sort-up"
                                                                                      aria-hidden="true"></i> sort-up
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-space-shuttle" aria-hidden="true"></i> space-shuttle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-spinner"
                                                                                      aria-hidden="true"></i>
                                    spinner</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-spoon"
                                                                                      aria-hidden="true"></i> spoon</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-square"
                                                                                      aria-hidden="true"></i> square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-square-o"
                                                                                      aria-hidden="true"></i>
                                    square-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-star"
                                                                                      aria-hidden="true"></i> star</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-star-half"
                                                                                      aria-hidden="true"></i> star-half</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-star-half-empty" aria-hidden="true"></i> star-half-empty
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-star-half-full" aria-hidden="true"></i> star-half-full
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-star-half-o" aria-hidden="true"></i> star-half-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-star-o"
                                                                                      aria-hidden="true"></i> star-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-sticky-note" aria-hidden="true"></i> sticky-note</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-sticky-note-o" aria-hidden="true"></i> sticky-note-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-street-view" aria-hidden="true"></i> street-view</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-suitcase"
                                                                                      aria-hidden="true"></i>
                                    suitcase</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-sun-o"
                                                                                      aria-hidden="true"></i> sun-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-support"
                                                                                      aria-hidden="true"></i> support
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-tablet"
                                                                                      aria-hidden="true"></i> tablet</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-tachometer"
                                                                                      aria-hidden="true"></i> tachometer</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-tag"
                                                                                      aria-hidden="true"></i> tag</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-tags"
                                                                                      aria-hidden="true"></i> tags</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-tasks"
                                                                                      aria-hidden="true"></i> tasks</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-taxi"
                                                                                      aria-hidden="true"></i> taxi</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-television"
                                                                                      aria-hidden="true"></i> television</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-terminal"
                                                                                      aria-hidden="true"></i>
                                    terminal</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer" aria-hidden="true"></i> thermometer <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-0" aria-hidden="true"></i> thermometer-0
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-1" aria-hidden="true"></i> thermometer-1
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-2" aria-hidden="true"></i> thermometer-2
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-3" aria-hidden="true"></i> thermometer-3
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-4" aria-hidden="true"></i> thermometer-4
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-empty" aria-hidden="true"></i>
                                    thermometer-empty</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-full" aria-hidden="true"></i>
                                    thermometer-full</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-half" aria-hidden="true"></i>
                                    thermometer-half</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-quarter" aria-hidden="true"></i>
                                    thermometer-quarter</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thermometer-three-quarters" aria-hidden="true"></i>
                                    thermometer-three-quarters</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-thumb-tack"
                                                                                      aria-hidden="true"></i> thumb-tack</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thumbs-down" aria-hidden="true"></i> thumbs-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thumbs-o-down" aria-hidden="true"></i> thumbs-o-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thumbs-o-up" aria-hidden="true"></i> thumbs-o-up</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-thumbs-up"
                                                                                      aria-hidden="true"></i> thumbs-up</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ticket"
                                                                                      aria-hidden="true"></i> ticket</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-times"
                                                                                      aria-hidden="true"></i> times</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-times-circle" aria-hidden="true"></i> times-circle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-times-circle-o" aria-hidden="true"></i>
                                    times-circle-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-times-rectangle" aria-hidden="true"></i> times-rectangle
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-times-rectangle-o" aria-hidden="true"></i>
                                    times-rectangle-o <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-tint"
                                                                                      aria-hidden="true"></i> tint</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-toggle-down" aria-hidden="true"></i> toggle-down <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-toggle-left" aria-hidden="true"></i> toggle-left <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-toggle-off"
                                                                                      aria-hidden="true"></i> toggle-off</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-toggle-on"
                                                                                      aria-hidden="true"></i> toggle-on</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-toggle-right" aria-hidden="true"></i> toggle-right <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-toggle-up"
                                                                                      aria-hidden="true"></i> toggle-up
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-trademark"
                                                                                      aria-hidden="true"></i> trademark</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-trash"
                                                                                      aria-hidden="true"></i> trash</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-trash-o"
                                                                                      aria-hidden="true"></i>
                                    trash-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-tree"
                                                                                      aria-hidden="true"></i> tree</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-trophy"
                                                                                      aria-hidden="true"></i> trophy</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-truck"
                                                                                      aria-hidden="true"></i> truck</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-tty"
                                                                                      aria-hidden="true"></i> tty</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-tv"
                                                                                      aria-hidden="true"></i> tv <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-umbrella"
                                                                                      aria-hidden="true"></i>
                                    umbrella</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-universal-access" aria-hidden="true"></i>
                                    universal-access</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-university"
                                                                                      aria-hidden="true"></i> university</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-unlock"
                                                                                      aria-hidden="true"></i> unlock</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-unlock-alt"
                                                                                      aria-hidden="true"></i> unlock-alt</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-unsorted"
                                                                                      aria-hidden="true"></i> unsorted
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-upload"
                                                                                      aria-hidden="true"></i> upload</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-user"
                                                                                      aria-hidden="true"></i> user</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-user-circle" aria-hidden="true"></i> user-circle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-user-circle-o" aria-hidden="true"></i> user-circle-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-user-o"
                                                                                      aria-hidden="true"></i> user-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-user-plus"
                                                                                      aria-hidden="true"></i> user-plus</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-user-secret" aria-hidden="true"></i> user-secret</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-user-times"
                                                                                      aria-hidden="true"></i> user-times</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-users"
                                                                                      aria-hidden="true"></i> users</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-vcard"
                                                                                      aria-hidden="true"></i> vcard
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-vcard-o"
                                                                                      aria-hidden="true"></i> vcard-o
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-video-camera" aria-hidden="true"></i> video-camera</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-volume-control-phone" aria-hidden="true"></i>
                                    volume-control-phone</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-volume-down" aria-hidden="true"></i> volume-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-volume-off"
                                                                                      aria-hidden="true"></i> volume-off</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-volume-up"
                                                                                      aria-hidden="true"></i> volume-up</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-warning"
                                                                                      aria-hidden="true"></i> warning
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-wheelchair"
                                                                                      aria-hidden="true"></i> wheelchair</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-wheelchair-alt" aria-hidden="true"></i>
                                    wheelchair-alt</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-wifi"
                                                                                      aria-hidden="true"></i> wifi</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-window-close" aria-hidden="true"></i> window-close</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-window-close-o" aria-hidden="true"></i>
                                    window-close-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-window-maximize" aria-hidden="true"></i> window-maximize</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-window-minimize" aria-hidden="true"></i> window-minimize</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-window-restore" aria-hidden="true"></i>
                                    window-restore</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-wrench"
                                                                                      aria-hidden="true"></i> wrench</a>
                            </div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Accessibility Icons</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-american-sign-language-interpreting"
                                        aria-hidden="true"></i>american-sign-language-interpreting</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-asl-interpreting" aria-hidden="true"></i>asl-interpreting
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-assistive-listening-systems" aria-hidden="true"></i>assistive-listening-systems</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-audio-description" aria-hidden="true"></i>audio-description</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-blind"
                                                                                      aria-hidden="true"></i>blind</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-braille"
                                                                                      aria-hidden="true"></i>braille</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cc"
                                                                                      aria-hidden="true"></i>cc</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-deaf"
                                                                                      aria-hidden="true"></i>deaf</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-deafness"
                                                                                      aria-hidden="true"></i>deafness
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hard-of-hearing" aria-hidden="true"></i>hard-of-hearing
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-low-vision"
                                                                                      aria-hidden="true"></i>low-vision</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-question-circle-o" aria-hidden="true"></i>question-circle-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-sign-language" aria-hidden="true"></i>sign-language</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-signing"
                                                                                      aria-hidden="true"></i>signing
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-tty"
                                                                                      aria-hidden="true"></i>tty</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-universal-access" aria-hidden="true"></i>universal-access</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-volume-control-phone" aria-hidden="true"></i>volume-control-phone</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-wheelchair"
                                                                                      aria-hidden="true"></i>wheelchair</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-wheelchair-alt" aria-hidden="true"></i>wheelchair-alt</a>
                            </div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Hand Icons</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-grab-o" aria-hidden="true"></i> hand-grab-o <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-lizard-o" aria-hidden="true"></i> hand-lizard-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-o-down" aria-hidden="true"></i> hand-o-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-o-left" aria-hidden="true"></i> hand-o-left</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-o-right" aria-hidden="true"></i> hand-o-right</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-hand-o-up"
                                                                                      aria-hidden="true"></i> hand-o-up</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-paper-o" aria-hidden="true"></i> hand-paper-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-peace-o" aria-hidden="true"></i> hand-peace-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-pointer-o" aria-hidden="true"></i>
                                    hand-pointer-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-rock-o" aria-hidden="true"></i> hand-rock-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-scissors-o" aria-hidden="true"></i> hand-scissors-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-spock-o" aria-hidden="true"></i> hand-spock-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-stop-o" aria-hidden="true"></i> hand-stop-o <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thumbs-down" aria-hidden="true"></i> thumbs-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thumbs-o-down" aria-hidden="true"></i> thumbs-o-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-thumbs-o-up" aria-hidden="true"></i> thumbs-o-up</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-thumbs-up"
                                                                                      aria-hidden="true"></i> thumbs-up</a>
                            </div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Transportation Icons</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ambulance"
                                                                                      aria-hidden="true"></i>ambulance</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-automobile"
                                                                                      aria-hidden="true"></i>automobile
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bicycle"
                                                                                      aria-hidden="true"></i>bicycle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bus"
                                                                                      aria-hidden="true"></i>bus</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cab"
                                                                                      aria-hidden="true"></i>cab <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-car"
                                                                                      aria-hidden="true"></i>car</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-fighter-jet" aria-hidden="true"></i>fighter-jet</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-motorcycle"
                                                                                      aria-hidden="true"></i>motorcycle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-plane"
                                                                                      aria-hidden="true"></i>plane</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-rocket"
                                                                                      aria-hidden="true"></i>rocket</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ship"
                                                                                      aria-hidden="true"></i>ship</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-space-shuttle" aria-hidden="true"></i>space-shuttle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-subway"
                                                                                      aria-hidden="true"></i>subway</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-taxi"
                                                                                      aria-hidden="true"></i>taxi</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-train"
                                                                                      aria-hidden="true"></i>train</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-truck"
                                                                                      aria-hidden="true"></i>truck</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-wheelchair"
                                                                                      aria-hidden="true"></i>wheelchair</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-wheelchair-alt" aria-hidden="true"></i>wheelchair-alt</a>
                            </div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Gender Icons</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-genderless"
                                                                                      aria-hidden="true"></i>genderless</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-intersex"
                                                                                      aria-hidden="true"></i>intersex
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-mars"
                                                                                      aria-hidden="true"></i>mars</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-mars-double" aria-hidden="true"></i>mars-double</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-mars-stroke" aria-hidden="true"></i>mars-stroke</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-mars-stroke-h" aria-hidden="true"></i>mars-stroke-h</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-mars-stroke-v" aria-hidden="true"></i>mars-stroke-v</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-mercury"
                                                                                      aria-hidden="true"></i>mercury</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-neuter"
                                                                                      aria-hidden="true"></i>neuter</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-transgender" aria-hidden="true"></i>transgender</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-transgender-alt"
                                        aria-hidden="true"></i>transgender-alt</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-venus"
                                                                                      aria-hidden="true"></i>venus</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-venus-double" aria-hidden="true"></i>venus-double</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-venus-mars"
                                                                                      aria-hidden="true"></i>venus-mars</a>
                            </div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">File Type Icons</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-file"
                                                                                      aria-hidden="true"></i>file</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-archive-o" aria-hidden="true"></i>file-archive-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-audio-o" aria-hidden="true"></i>file-audio-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-code-o" aria-hidden="true"></i>file-code-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-excel-o" aria-hidden="true"></i>file-excel-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-image-o" aria-hidden="true"></i>file-image-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-movie-o" aria-hidden="true"></i>file-movie-o <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-file-o"
                                                                                      aria-hidden="true"></i>file-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-file-pdf-o"
                                                                                      aria-hidden="true"></i>file-pdf-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-photo-o" aria-hidden="true"></i>file-photo-o <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-picture-o" aria-hidden="true"></i>file-picture-o
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-powerpoint-o" aria-hidden="true"></i>file-powerpoint-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-sound-o" aria-hidden="true"></i>file-sound-o <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-file-text"
                                                                                      aria-hidden="true"></i>file-text</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-text-o" aria-hidden="true"></i>file-text-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-video-o" aria-hidden="true"></i>file-video-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-word-o" aria-hidden="true"></i>file-word-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-file-zip-o"
                                                                                      aria-hidden="true"></i>file-zip-o
                                    <span class="text-muted">(alias)</span></a></div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Spinner Icons</h5>
                        <div class="alert alert-success mt-15" role="alert">
                            <i class="icon-copy fa fa-info-circle fa-lg" aria-hidden="true"></i>
                            <strong class="sr-only">Note:</strong>
                            These icons work great with the <code>fa-spin</code> class. Check out the
                            <a href="https://fontawesome.com/v4.7.0/examples/#animated" target="_blank"
                               class="alert-link">spinning icons example</a>.
                        </div>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-circle-o-notch" aria-hidden="true"></i>circle-o-notch</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cog"
                                                                                      aria-hidden="true"></i>cog</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-gear"
                                                                                      aria-hidden="true"></i>gear <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-refresh"
                                                                                      aria-hidden="true"></i>refresh</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-spinner"
                                                                                      aria-hidden="true"></i>spinner</a>
                            </div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Form Control Icons</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-check-square" aria-hidden="true"></i>check-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-check-square-o" aria-hidden="true"></i>check-square-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-circle"
                                                                                      aria-hidden="true"></i>circle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-circle-o"
                                                                                      aria-hidden="true"></i>circle-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-dot-circle-o" aria-hidden="true"></i>dot-circle-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-minus-square" aria-hidden="true"></i>minus-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-minus-square-o" aria-hidden="true"></i>minus-square-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-plus-square" aria-hidden="true"></i>plus-square</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-plus-square-o" aria-hidden="true"></i>plus-square-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-square"
                                                                                      aria-hidden="true"></i>square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-square-o"
                                                                                      aria-hidden="true"></i>square-o</a>
                            </div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Payment Icons</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cc-amex"
                                                                                      aria-hidden="true"></i>cc-amex</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-cc-diners-club" aria-hidden="true"></i>cc-diners-club</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-cc-discover" aria-hidden="true"></i>cc-discover</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cc-jcb"
                                                                                      aria-hidden="true"></i>cc-jcb</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-cc-mastercard" aria-hidden="true"></i>cc-mastercard</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cc-paypal"
                                                                                      aria-hidden="true"></i>cc-paypal</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cc-stripe"
                                                                                      aria-hidden="true"></i>cc-stripe</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cc-visa"
                                                                                      aria-hidden="true"></i>cc-visa</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-credit-card" aria-hidden="true"></i>credit-card</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-credit-card-alt"
                                        aria-hidden="true"></i>credit-card-alt</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-google-wallet" aria-hidden="true"></i>google-wallet</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-paypal"
                                                                                      aria-hidden="true"></i>paypal</a>
                            </div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Chart Icons</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-area-chart"
                                                                                      aria-hidden="true"></i>area-chart</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bar-chart"
                                                                                      aria-hidden="true"></i>bar-chart</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-bar-chart-o" aria-hidden="true"></i>bar-chart-o <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-line-chart"
                                                                                      aria-hidden="true"></i>line-chart</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-pie-chart"
                                                                                      aria-hidden="true"></i>pie-chart</a>
                            </div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Currency Icons</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bitcoin"
                                                                                      aria-hidden="true"></i>bitcoin
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-btc"
                                                                                      aria-hidden="true"></i>btc</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cny"
                                                                                      aria-hidden="true"></i>cny <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-dollar"
                                                                                      aria-hidden="true"></i>dollar
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-eur"
                                                                                      aria-hidden="true"></i>eur</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-euro"
                                                                                      aria-hidden="true"></i>euro <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-gbp"
                                                                                      aria-hidden="true"></i>gbp</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-gg"
                                                                                      aria-hidden="true"></i>gg</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-gg-circle"
                                                                                      aria-hidden="true"></i>gg-circle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ils"
                                                                                      aria-hidden="true"></i>ils</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-inr"
                                                                                      aria-hidden="true"></i>inr</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-jpy"
                                                                                      aria-hidden="true"></i>jpy</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-krw"
                                                                                      aria-hidden="true"></i>krw</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-money"
                                                                                      aria-hidden="true"></i>money</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-rmb"
                                                                                      aria-hidden="true"></i>rmb <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-rouble"
                                                                                      aria-hidden="true"></i>rouble
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-rub"
                                                                                      aria-hidden="true"></i>rub</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ruble"
                                                                                      aria-hidden="true"></i>ruble <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-rupee"
                                                                                      aria-hidden="true"></i>rupee <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-shekel"
                                                                                      aria-hidden="true"></i>shekel
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="ils"><i class="icon-copy fa fa-sheqel"
                                                                             aria-hidden="true"></i>sheqel <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-try"
                                                                                      aria-hidden="true"></i>try</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-turkish-lira" aria-hidden="true"></i>turkish-lira <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-usd"
                                                                                      aria-hidden="true"></i>usd</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-viacoin"
                                                                                      aria-hidden="true"></i>viacoin</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-won"
                                                                                      aria-hidden="true"></i>won <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-yen"
                                                                                      aria-hidden="true"></i>yen <span
                                        class="text-muted">(alias)</span></a></div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Text Editor Icons</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-align-center" aria-hidden="true"></i>align-center</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-align-justify" aria-hidden="true"></i>align-justify</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-align-left"
                                                                                      aria-hidden="true"></i>align-left</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-align-right" aria-hidden="true"></i>align-right</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bold"
                                                                                      aria-hidden="true"></i>bold</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-chain"
                                                                                      aria-hidden="true"></i>chain <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-chain-broken" aria-hidden="true"></i>chain-broken</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-clipboard"
                                                                                      aria-hidden="true"></i>clipboard</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-columns"
                                                                                      aria-hidden="true"></i>columns</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-copy"
                                                                                      aria-hidden="true"></i>copy <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cut"
                                                                                      aria-hidden="true"></i>cut <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-dedent"
                                                                                      aria-hidden="true"></i>dedent
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-eraser"
                                                                                      aria-hidden="true"></i>eraser</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-file"
                                                                                      aria-hidden="true"></i>file</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-file-o"
                                                                                      aria-hidden="true"></i>file-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-file-text"
                                                                                      aria-hidden="true"></i>file-text</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-file-text-o" aria-hidden="true"></i>file-text-o</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-files-o"
                                                                                      aria-hidden="true"></i>files-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-floppy-o"
                                                                                      aria-hidden="true"></i>floppy-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-font"
                                                                                      aria-hidden="true"></i>font</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-header"
                                                                                      aria-hidden="true"></i>header</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-indent"
                                                                                      aria-hidden="true"></i>indent</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-italic"
                                                                                      aria-hidden="true"></i>italic</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-link"
                                                                                      aria-hidden="true"></i>link</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-list"
                                                                                      aria-hidden="true"></i>list</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-list-alt"
                                                                                      aria-hidden="true"></i>list-alt</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-list-ol"
                                                                                      aria-hidden="true"></i>list-ol</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-list-ul"
                                                                                      aria-hidden="true"></i>list-ul</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-outdent"
                                                                                      aria-hidden="true"></i>outdent</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-paperclip"
                                                                                      aria-hidden="true"></i>paperclip</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-paragraph"
                                                                                      aria-hidden="true"></i>paragraph</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-paste"
                                                                                      aria-hidden="true"></i>paste <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-repeat"
                                                                                      aria-hidden="true"></i>repeat</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-rotate-left" aria-hidden="true"></i>rotate-left <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-rotate-right" aria-hidden="true"></i>rotate-right <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-save"
                                                                                      aria-hidden="true"></i>save <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-scissors"
                                                                                      aria-hidden="true"></i>scissors</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-strikethrough" aria-hidden="true"></i>strikethrough</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-subscript"
                                                                                      aria-hidden="true"></i>subscript</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-superscript" aria-hidden="true"></i>superscript</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-table"
                                                                                      aria-hidden="true"></i>table</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-text-height" aria-hidden="true"></i>text-height</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-text-width"
                                                                                      aria-hidden="true"></i>text-width</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-th"
                                                                                      aria-hidden="true"></i>th</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-th-large"
                                                                                      aria-hidden="true"></i>th-large</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-th-list"
                                                                                      aria-hidden="true"></i>th-list</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-underline"
                                                                                      aria-hidden="true"></i>underline</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-undo"
                                                                                      aria-hidden="true"></i>undo</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-unlink"
                                                                                      aria-hidden="true"></i>unlink
                                    <span class="text-muted">(alias)</span></a></div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Directional Icons</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-angle-double-down" aria-hidden="true"></i>angle-double-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-angle-double-left" aria-hidden="true"></i>angle-double-left</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-angle-double-right" aria-hidden="true"></i>angle-double-right</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-angle-double-up"
                                        aria-hidden="true"></i>angle-double-up</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-angle-down"
                                                                                      aria-hidden="true"></i>angle-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-angle-left"
                                                                                      aria-hidden="true"></i>angle-left</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-angle-right" aria-hidden="true"></i>angle-right</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-angle-up"
                                                                                      aria-hidden="true"></i>angle-up</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-arrow-circle-down" aria-hidden="true"></i>arrow-circle-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-arrow-circle-left" aria-hidden="true"></i>arrow-circle-left</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-arrow-circle-o-down" aria-hidden="true"></i>arrow-circle-o-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-arrow-circle-o-left" aria-hidden="true"></i>arrow-circle-o-left</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-arrow-circle-o-right" aria-hidden="true"></i>arrow-circle-o-right</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-arrow-circle-o-up" aria-hidden="true"></i>arrow-circle-o-up</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-arrow-circle-right" aria-hidden="true"></i>arrow-circle-right</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-arrow-circle-up"
                                        aria-hidden="true"></i>arrow-circle-up</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-arrow-down"
                                                                                      aria-hidden="true"></i>arrow-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-arrow-left"
                                                                                      aria-hidden="true"></i>arrow-left</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-arrow-right" aria-hidden="true"></i>arrow-right</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-arrow-up"
                                                                                      aria-hidden="true"></i>arrow-up</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-arrows"
                                                                                      aria-hidden="true"></i>arrows</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-arrows-alt"
                                                                                      aria-hidden="true"></i>arrows-alt</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-arrows-h"
                                                                                      aria-hidden="true"></i>arrows-h</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-arrows-v"
                                                                                      aria-hidden="true"></i>arrows-v</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-caret-down"
                                                                                      aria-hidden="true"></i>caret-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-caret-left"
                                                                                      aria-hidden="true"></i>caret-left</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-caret-right" aria-hidden="true"></i>caret-right</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-caret-square-o-down" aria-hidden="true"></i>caret-square-o-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-caret-square-o-left" aria-hidden="true"></i>caret-square-o-left</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-caret-square-o-right" aria-hidden="true"></i>caret-square-o-right</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-caret-square-o-up" aria-hidden="true"></i>caret-square-o-up</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-caret-up"
                                                                                      aria-hidden="true"></i>caret-up</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-chevron-circle-down" aria-hidden="true"></i>chevron-circle-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-chevron-circle-left" aria-hidden="true"></i>chevron-circle-left</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-chevron-circle-right" aria-hidden="true"></i>chevron-circle-right</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-chevron-circle-up" aria-hidden="true"></i>chevron-circle-up</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-chevron-down" aria-hidden="true"></i>chevron-down</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-chevron-left" aria-hidden="true"></i>chevron-left</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-chevron-right" aria-hidden="true"></i>chevron-right</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-chevron-up"
                                                                                      aria-hidden="true"></i>chevron-up</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-exchange"
                                                                                      aria-hidden="true"></i>exchange</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-o-down" aria-hidden="true"></i>hand-o-down</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-o-left" aria-hidden="true"></i>hand-o-left</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hand-o-right" aria-hidden="true"></i>hand-o-right</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-hand-o-up"
                                                                                      aria-hidden="true"></i>hand-o-up</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-long-arrow-down"
                                        aria-hidden="true"></i>long-arrow-down</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-long-arrow-left"
                                        aria-hidden="true"></i>long-arrow-left</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-long-arrow-right" aria-hidden="true"></i>long-arrow-right</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-long-arrow-up" aria-hidden="true"></i>long-arrow-up</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-toggle-down" aria-hidden="true"></i>toggle-down <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-toggle-left" aria-hidden="true"></i>toggle-left <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-toggle-right" aria-hidden="true"></i>toggle-right <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-toggle-up"
                                                                                      aria-hidden="true"></i>toggle-up
                                    <span class="text-muted">(alias)</span></a></div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Video Player Icons</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-arrows-alt"
                                                                                      aria-hidden="true"></i>arrows-alt</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-backward"
                                                                                      aria-hidden="true"></i>backward</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-compress"
                                                                                      aria-hidden="true"></i>compress</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-eject"
                                                                                      aria-hidden="true"></i>eject</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-expand"
                                                                                      aria-hidden="true"></i>expand</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-fast-backward" aria-hidden="true"></i>fast-backward</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-fast-forward" aria-hidden="true"></i>fast-forward</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-forward"
                                                                                      aria-hidden="true"></i>forward</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-pause"
                                                                                      aria-hidden="true"></i>pause</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-pause-circle" aria-hidden="true"></i>pause-circle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-pause-circle-o" aria-hidden="true"></i>pause-circle-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-play"
                                                                                      aria-hidden="true"></i>play</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-play-circle" aria-hidden="true"></i>play-circle</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-play-circle-o" aria-hidden="true"></i>play-circle-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-random"
                                                                                      aria-hidden="true"></i>random</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-step-backward" aria-hidden="true"></i>step-backward</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-step-forward" aria-hidden="true"></i>step-forward</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-stop"
                                                                                      aria-hidden="true"></i>stop</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-stop-circle" aria-hidden="true"></i>stop-circle</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-stop-circle-o" aria-hidden="true"></i>stop-circle-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-youtube-play" aria-hidden="true"></i>youtube-play</a>
                            </div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Brand Icons</h5>
                        <div class="row fontawesome-icon-list margin-bottom-lg">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-500px"
                                                                                      aria-hidden="true"></i>500px</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-adn"
                                                                                      aria-hidden="true"></i>adn</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-amazon"
                                                                                      aria-hidden="true"></i>amazon</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-android"
                                                                                      aria-hidden="true"></i>android</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-angellist"
                                                                                      aria-hidden="true"></i>angellist</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-apple"
                                                                                      aria-hidden="true"></i>apple</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bandcamp"
                                                                                      aria-hidden="true"></i>bandcamp</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-behance"
                                                                                      aria-hidden="true"></i>behance</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-behance-square" aria-hidden="true"></i>behance-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bitbucket"
                                                                                      aria-hidden="true"></i>bitbucket</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-bitbucket-square" aria-hidden="true"></i>bitbucket-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bitcoin"
                                                                                      aria-hidden="true"></i>bitcoin
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-black-tie"
                                                                                      aria-hidden="true"></i>black-tie</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-bluetooth"
                                                                                      aria-hidden="true"></i>bluetooth</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-bluetooth-b" aria-hidden="true"></i>bluetooth-b</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-btc"
                                                                                      aria-hidden="true"></i>btc</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-buysellads"
                                                                                      aria-hidden="true"></i>buysellads</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cc-amex"
                                                                                      aria-hidden="true"></i>cc-amex</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-cc-diners-club" aria-hidden="true"></i>cc-diners-club</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-cc-discover" aria-hidden="true"></i>cc-discover</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cc-jcb"
                                                                                      aria-hidden="true"></i>cc-jcb</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-cc-mastercard" aria-hidden="true"></i>cc-mastercard</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cc-paypal"
                                                                                      aria-hidden="true"></i>cc-paypal</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cc-stripe"
                                                                                      aria-hidden="true"></i>cc-stripe</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-cc-visa"
                                                                                      aria-hidden="true"></i>cc-visa</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-chrome"
                                                                                      aria-hidden="true"></i>chrome</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-codepen"
                                                                                      aria-hidden="true"></i>codepen</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-codiepie"
                                                                                      aria-hidden="true"></i>codiepie</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-connectdevelop" aria-hidden="true"></i>connectdevelop</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-contao"
                                                                                      aria-hidden="true"></i>contao</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-css3"
                                                                                      aria-hidden="true"></i>css3</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-dashcube"
                                                                                      aria-hidden="true"></i>dashcube</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-delicious"
                                                                                      aria-hidden="true"></i>delicious</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-deviantart"
                                                                                      aria-hidden="true"></i>deviantart</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-digg"
                                                                                      aria-hidden="true"></i>digg</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-dribbble"
                                                                                      aria-hidden="true"></i>dribbble</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-dropbox"
                                                                                      aria-hidden="true"></i>dropbox</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-drupal"
                                                                                      aria-hidden="true"></i>drupal</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-edge"
                                                                                      aria-hidden="true"></i>edge</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-eercast"
                                                                                      aria-hidden="true"></i>eercast</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-empire"
                                                                                      aria-hidden="true"></i>empire</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-envira"
                                                                                      aria-hidden="true"></i>envira</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-etsy"
                                                                                      aria-hidden="true"></i>etsy</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-expeditedssl" aria-hidden="true"></i>expeditedssl</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-fa"
                                                                                      aria-hidden="true"></i>fa <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-facebook"
                                                                                      aria-hidden="true"></i>facebook</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-facebook-f"
                                                                                      aria-hidden="true"></i>facebook-f
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-facebook-official" aria-hidden="true"></i>facebook-official</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-facebook-square"
                                        aria-hidden="true"></i>facebook-square</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-firefox"
                                                                                      aria-hidden="true"></i>firefox</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-first-order" aria-hidden="true"></i>first-order</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-flickr"
                                                                                      aria-hidden="true"></i>flickr</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-font-awesome" aria-hidden="true"></i>font-awesome</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-fonticons"
                                                                                      aria-hidden="true"></i>fonticons</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-fort-awesome" aria-hidden="true"></i>fort-awesome</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-forumbee"
                                                                                      aria-hidden="true"></i>forumbee</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-foursquare"
                                                                                      aria-hidden="true"></i>foursquare</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-free-code-camp" aria-hidden="true"></i>free-code-camp</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ge"
                                                                                      aria-hidden="true"></i>ge <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-get-pocket"
                                                                                      aria-hidden="true"></i>get-pocket</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-gg"
                                                                                      aria-hidden="true"></i>gg</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-gg-circle"
                                                                                      aria-hidden="true"></i>gg-circle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-git"
                                                                                      aria-hidden="true"></i>git</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-git-square"
                                                                                      aria-hidden="true"></i>git-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-github"
                                                                                      aria-hidden="true"></i>github</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-github-alt"
                                                                                      aria-hidden="true"></i>github-alt</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-github-square" aria-hidden="true"></i>github-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-gitlab"
                                                                                      aria-hidden="true"></i>gitlab</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-gittip"
                                                                                      aria-hidden="true"></i>gittip
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-glide"
                                                                                      aria-hidden="true"></i>glide</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-glide-g"
                                                                                      aria-hidden="true"></i>glide-g</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-google"
                                                                                      aria-hidden="true"></i>google</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-google-plus" aria-hidden="true"></i>google-plus</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-google-plus-circle" aria-hidden="true"></i>google-plus-circle
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-google-plus-official" aria-hidden="true"></i>google-plus-official</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-google-plus-square" aria-hidden="true"></i>google-plus-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-google-wallet" aria-hidden="true"></i>google-wallet</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-gratipay"
                                                                                      aria-hidden="true"></i>gratipay</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-grav"
                                                                                      aria-hidden="true"></i>grav</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-grav"
                                                                                      aria-hidden="true"></i>grav</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-hacker-news" aria-hidden="true"></i>hacker-news</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-houzz"
                                                                                      aria-hidden="true"></i>houzz</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-html5"
                                                                                      aria-hidden="true"></i>html5</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-imdb"
                                                                                      aria-hidden="true"></i>imdb</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-instagram"
                                                                                      aria-hidden="true"></i>instagram</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-internet-explorer" aria-hidden="true"></i>internet-explorer</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ioxhost"
                                                                                      aria-hidden="true"></i>ioxhost</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-joomla"
                                                                                      aria-hidden="true"></i>joomla</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-jsfiddle"
                                                                                      aria-hidden="true"></i>jsfiddle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-lastfm"
                                                                                      aria-hidden="true"></i>lastfm</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-lastfm-square" aria-hidden="true"></i>lastfm-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-leanpub"
                                                                                      aria-hidden="true"></i>leanpub</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-linkedin"
                                                                                      aria-hidden="true"></i>linkedin</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-linkedin-square"
                                        aria-hidden="true"></i>linkedin-square</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-linode"
                                                                                      aria-hidden="true"></i>linode</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-linux"
                                                                                      aria-hidden="true"></i>linux</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-maxcdn"
                                                                                      aria-hidden="true"></i>maxcdn</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-meanpath"
                                                                                      aria-hidden="true"></i>meanpath</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-medium"
                                                                                      aria-hidden="true"></i>medium</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-meetup"
                                                                                      aria-hidden="true"></i>meetup</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-mixcloud"
                                                                                      aria-hidden="true"></i>mixcloud</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-modx"
                                                                                      aria-hidden="true"></i>modx</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-odnoklassniki" aria-hidden="true"></i>odnoklassniki</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-odnoklassniki-square" aria-hidden="true"></i>odnoklassniki-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-opencart"
                                                                                      aria-hidden="true"></i>opencart</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-openid"
                                                                                      aria-hidden="true"></i>openid</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-opera"
                                                                                      aria-hidden="true"></i>opera</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-optin-monster" aria-hidden="true"></i>optin-monster</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-pagelines"
                                                                                      aria-hidden="true"></i>pagelines</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-paypal"
                                                                                      aria-hidden="true"></i>paypal</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-pied-piper"
                                                                                      aria-hidden="true"></i>pied-piper</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-pied-piper-alt" aria-hidden="true"></i>pied-piper-alt</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-pied-piper-pp" aria-hidden="true"></i>pied-piper-pp</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-pinterest"
                                                                                      aria-hidden="true"></i>pinterest</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-pinterest-p" aria-hidden="true"></i>pinterest-p</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-pinterest-square" aria-hidden="true"></i>pinterest-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-product-hunt" aria-hidden="true"></i>product-hunt</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-qq"
                                                                                      aria-hidden="true"></i>qq</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-quora"
                                                                                      aria-hidden="true"></i>quora</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ra"
                                                                                      aria-hidden="true"></i>ra <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ravelry"
                                                                                      aria-hidden="true"></i>ravelry</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-rebel"
                                                                                      aria-hidden="true"></i>rebel</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-reddit"
                                                                                      aria-hidden="true"></i>reddit</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-reddit-alien" aria-hidden="true"></i>reddit-alien</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-reddit-square" aria-hidden="true"></i>reddit-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-renren"
                                                                                      aria-hidden="true"></i>renren</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-resistance"
                                                                                      aria-hidden="true"></i>resistance
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-safari"
                                                                                      aria-hidden="true"></i>safari</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-scribd"
                                                                                      aria-hidden="true"></i>scribd</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-sellsy"
                                                                                      aria-hidden="true"></i>sellsy</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-share-alt"
                                                                                      aria-hidden="true"></i>share-alt</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-share-alt-square" aria-hidden="true"></i>share-alt-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-shirtsinbulk" aria-hidden="true"></i>shirtsinbulk</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-simplybuilt" aria-hidden="true"></i>simplybuilt</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-skyatlas"
                                                                                      aria-hidden="true"></i>skyatlas</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-skype"
                                                                                      aria-hidden="true"></i>skype</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-slack"
                                                                                      aria-hidden="true"></i>slack</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-slideshare"
                                                                                      aria-hidden="true"></i>slideshare</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-snapchat"
                                                                                      aria-hidden="true"></i>snapchat</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-snapchat-ghost" aria-hidden="true"></i>snapchat-ghost</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-snapchat-square"
                                        aria-hidden="true"></i>snapchat-square</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-soundcloud"
                                                                                      aria-hidden="true"></i>soundcloud</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-spotify"
                                                                                      aria-hidden="true"></i>spotify</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-stack-exchange" aria-hidden="true"></i>stack-exchange</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-stack-overflow" aria-hidden="true"></i>stack-overflow</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-steam"
                                                                                      aria-hidden="true"></i>steam</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-steam-square" aria-hidden="true"></i>steam-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-stumbleupon" aria-hidden="true"></i>stumbleupon</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-stumbleupon-circle" aria-hidden="true"></i>stumbleupon-circle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-superpowers" aria-hidden="true"></i>superpowers</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-telegram"
                                                                                      aria-hidden="true"></i>telegram</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-tencent-weibo" aria-hidden="true"></i>tencent-weibo</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-themeisle"
                                                                                      aria-hidden="true"></i>themeisle</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-trello"
                                                                                      aria-hidden="true"></i>trello</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-tripadvisor" aria-hidden="true"></i>tripadvisor</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-tumblr"
                                                                                      aria-hidden="true"></i>tumblr</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-tumblr-square" aria-hidden="true"></i>tumblr-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-twitch"
                                                                                      aria-hidden="true"></i>twitch</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-twitter"
                                                                                      aria-hidden="true"></i>twitter</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-twitter-square" aria-hidden="true"></i>twitter-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-usb"
                                                                                      aria-hidden="true"></i>usb</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-viacoin"
                                                                                      aria-hidden="true"></i>viacoin</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-viadeo"
                                                                                      aria-hidden="true"></i>viadeo</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-viadeo-square" aria-hidden="true"></i>viadeo-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-vimeo"
                                                                                      aria-hidden="true"></i>vimeo</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-vimeo-square" aria-hidden="true"></i>vimeo-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-vine"
                                                                                      aria-hidden="true"></i>vine</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-vk"
                                                                                      aria-hidden="true"></i>vk</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-wechat"
                                                                                      aria-hidden="true"></i>wechat
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-weibo"
                                                                                      aria-hidden="true"></i>weibo</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-weixin"
                                                                                      aria-hidden="true"></i>weixin</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-whatsapp"
                                                                                      aria-hidden="true"></i>whatsapp</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-wikipedia-w" aria-hidden="true"></i>wikipedia-w</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-windows"
                                                                                      aria-hidden="true"></i>windows</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-wordpress"
                                                                                      aria-hidden="true"></i>wordpress</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-wpbeginner"
                                                                                      aria-hidden="true"></i>wpbeginner</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-wpexplorer"
                                                                                      aria-hidden="true"></i>wpexplorer</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-wpforms"
                                                                                      aria-hidden="true"></i>wpforms</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-xing"
                                                                                      aria-hidden="true"></i>xing</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-xing-square" aria-hidden="true"></i>xing-square</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-y-combinator" aria-hidden="true"></i>y-combinator</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-y-combinator-square" aria-hidden="true"></i>y-combinator-square
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-yahoo"
                                                                                      aria-hidden="true"></i>yahoo</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-yc"
                                                                                      aria-hidden="true"></i>yc <span
                                        class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-yc-square"
                                                                                      aria-hidden="true"></i>yc-square
                                    <span class="text-muted">(alias)</span></a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-yelp"
                                                                                      aria-hidden="true"></i>yelp</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-yoast"
                                                                                      aria-hidden="true"></i>yoast</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-youtube"
                                                                                      aria-hidden="true"></i>youtube</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-youtube-play" aria-hidden="true"></i>youtube-play</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-youtube-square" aria-hidden="true"></i>youtube-square</a>
                            </div>
                        </div>
                    </div>

                    <div class="icon-list pd-20 card-box mb-30">
                        <h5 class="h5 text-blue">Medical Icons</h5>
                        <div class="row fontawesome-icon-list">
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-ambulance"
                                                                                      aria-hidden="true"></i>ambulance</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-h-square"
                                                                                      aria-hidden="true"></i>h-square</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-heart"
                                                                                      aria-hidden="true"></i>heart</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-heart-o"
                                                                                      aria-hidden="true"></i>heart-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-heartbeat"
                                                                                      aria-hidden="true"></i>heartbeat</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-hospital-o"
                                                                                      aria-hidden="true"></i>hospital-o</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-medkit"
                                                                                      aria-hidden="true"></i>medkit</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-plus-square" aria-hidden="true"></i>plus-square</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-stethoscope" aria-hidden="true"></i>stethoscope</a></div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-user-md"
                                                                                      aria-hidden="true"></i>user-md</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i class="icon-copy fa fa-wheelchair"
                                                                                      aria-hidden="true"></i>wheelchair</a>
                            </div>
                            <div class="fa-hover col-md-3 col-sm-6 col-12" data-toggle="tooltip" data-placement="bottom"
                                 title="Click To Copy Code"><a href="javascript:;"><i
                                        class="icon-copy fa fa-wheelchair-alt" aria-hidden="true"></i>wheelchair-alt</a>
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
@stop
