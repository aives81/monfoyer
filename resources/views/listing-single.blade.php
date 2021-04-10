@extends('viewsLayout.app')

@section('title')
    | Nos fournisseurs
@stop

@section('backgroudImgSection')
    <div class="site-blocks-cover inner-page-cover overlay"
         style="background-image: url({{ asset('images/hero_1.jpg') }});"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">

                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h1>{{ $entInfo[0]->entLib }}</h1>
                            <p class="mb-0"><i class="icon icon-room"
                                               style="font-size: 30px"></i> {{ $entInfo[0]->entDescripPlace }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop

@section('pageContent')
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="mb-5 border-bottom pb-5">
                        <p><img src="{{ asset(__('storage/') . $entInfo[0]->entImg) }}" alt="{{ $entInfo[0]->entLib }}"
                                style="height: 400px; width: 100%" class="img-fluid mb-4"></p>
                        <!--<p><img src="{{ asset('images/mapbox.png') }}" alt="Image" class="img-fluid mb-4"></p>-->

                        <p>
                        <div class="row">
                            @foreach($produits as $produit)
                                <div class="col-md-6">
                                    <a href="#" class="popular-category h-100">
                                            <span class="icon mb-3">
                                                <img src="{{ asset(__('storage/') . $produit->prodImg) }}"
                                                     alt="{{ $produit->marqLib }}" class="img-fluid mb-4">
                                            </span>
                                        <span class="caption mb-2 d-block">{{ $produit->marqLib }} ({{ $produit->prodCat }})</span>
                                        Rechargement: <span class="number">{{ number_format($produit->puRechargement, 0, ',', '.') }} frcfa</span>
                                        <br>
                                        <br>
                                        Nouvelle bouteille: <span class="number">{{ number_format($produit->puAchat, 0, ',', '.') }} frcfa</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        </p>
                    </div>

                    <h2 class="mb-5 text-primary">Plus de resultats</h2>

                    <div class="d-block d-md-flex listing-horizontal">

                        <a href="#" class="img d-block" style="background-image: url('images/img_2.jpg')">
                            <span class="category">Restaurants</span>
                        </a>

                        <div class="lh-content">
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="#">Jones Grill &amp; Restaurants</a></h3>
                            <p>Don St, Brooklyn, New York</p>
                            <p>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span>(492 Reviews)</span>
                            </p>


                        </div>

                    </div>

                    <div class="d-block d-md-flex listing-horizontal">

                        <a href="#" class="img d-block" style="background-image: url('images/img_1.jpg')">
                            <span class="category">Hotels</span>
                        </a>

                        <div class="lh-content">
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="#">Luxe Hotel</a></h3>
                            <p>West Orange, New York</p>
                            <p>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span>(492 Reviews)</span>
                            </p>


                        </div>

                    </div>

                    <div class="d-block d-md-flex listing-horizontal">

                        <a href="#" class="img d-block" style="background-image: url('images/img_3.jpg')">
                            <span class="category">Events</span>
                        </a>

                        <div class="lh-content">
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="#">Live Band</a></h3>
                            <p>Don St, Brooklyn, New York</p>
                            <p>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span>(22 Reviews)</span>
                            </p>


                        </div>

                    </div>

                    <div class="d-block d-md-flex listing-horizontal">

                        <a href="#" class="img d-block" style="background-image: url('images/img_4.jpg')">
                            <span class="category">Others</span>
                        </a>

                        <div class="lh-content">
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="#">Gourmett Coffees</a></h3>
                            <p>Don St, Brooklyn, New York</p>
                            <p>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span>(79 Reviews)</span>
                            </p>


                        </div>

                    </div>

                    <div class="d-block d-md-flex listing-horizontal">

                        <a href="#" class="img d-block" style="background-image: url('images/img_5.jpg')">
                            <span class="category">Spa</span>
                        </a>

                        <div class="lh-content">
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="#">La Italia Spa</a></h3>
                            <p>Italy, Europe</p>
                            <p>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span>(48 Reviews)</span>
                            </p>


                        </div>

                    </div>

                    <div class="d-block d-md-flex listing-horizontal">

                        <a href="#" class="img d-block" style="background-image: url('images/img_6.jpg')">
                            <span class="category">Stores</span>
                        </a>

                        <div class="lh-content">
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="#">Super Market Malls</a></h3>
                            <p>Don St, Brooklyn, New York</p>
                            <p>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span>(433 Reviews)</span>
                            </p>


                        </div>

                    </div>

                    <div class="col-12 mt-5 text-center">
                        <div class="custom-pagination">
                            <span>1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span class="more-page">...</span>
                            <a href="#">10</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 ml-auto">

                    <div class="mb-5">
                        <h3 class="h5 text-black mb-3">Informations</h3>
                        <div class="form-group">
                            <i class="icon icon-user"
                               style="font-size: 30px; color: #00918e"></i> {{ $entInfo[0]->pnom . " " . $entInfo[0]->nom }}
                            <br>
                            <i class="icon icon-phone_android" style="font-size: 30px; color: #00918e"></i> <a
                                href="tel:{{ $entInfo[0]->tel }}"> {{ $entInfo[0]->tel }}</a>
                            <br>
                            <i class="icon icon-room"
                               style="font-size: 30px; color: #00918e"></i> {{ $entInfo[0]->comLib . ", " . $entInfo[0]->entDescripPlace }}
                            <br>
                            <br>
                            <img src="{{ asset('images/mapbox.png') }}" alt="Image" class="img-fluid" style="height: 300px">
                        </div>
                    </div>

                    <!--<div class="mb-5">
                        <form action="#" method="post">
                            <div class="form-group">
                                <p>Category 'Restaurant' is selected</p>
                                <p>More filters</p>
                            </div>
                            <div class="form-group">
                                <ul class="list-unstyled">
                                    <li>
                                        <label for="option1">
                                            <input type="checkbox" id="option1">
                                            Coffee
                                        </label>
                                    </li>
                                    <li>
                                        <label for="option2">
                                            <input type="checkbox" id="option2">
                                            Vegetarian
                                        </label>
                                    </li>
                                    <li>
                                        <label for="option3">
                                            <input type="checkbox" id="option3">
                                            Vegan Foods
                                        </label>
                                    </li>
                                    <li>
                                        <label for="option4">
                                            <input type="checkbox" id="option4">
                                            Sea Foods
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>-->

                </div>

            </div>
        </div>
    </div>
@stop
