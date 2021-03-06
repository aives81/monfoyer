@extends('viewsLayout.app')

@section('title')
    | Nos fournisseurs
@stop

@section('backgroudImgSection')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h1>Listings</h1>
                            <p data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate beatae quisquam perspiciatis adipisci ipsam quam.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@stop

@section('pageContent')

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p><img src="images/mapBox.png" alt="Image" class="img-fluid mb-4"></p>
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
                            <span><i class="icon-arrow-left"></i></span>
                            <span>1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span class="more-page">...</span>
                            <a href="#">10</a>
                            <a><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 ml-auto">

                    <div class="mb-5">
                        <h3 class="h5 text-black mb-3">Filters</h3>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" placeholder="What are you looking for?" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="select-wrap">
                                    <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                    <select class="form-control" name="" id="">
                                        <option value="">All Categories</option>
                                        <option value="">Appartment</option>
                                        <option value="">Restaurant</option>
                                        <option value="">Eat &amp; Drink</option>
                                        <option value="">Events</option>
                                        <option value="">Fitness</option>
                                        <option value="">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- select-wrap, .wrap-icon -->
                                <div class="wrap-icon">
                                    <span class="icon icon-room"></span>
                                    <input type="text" placeholder="Location" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="mb-5">
                        <form action="#" method="post">
                            <div class="form-group">
                                <p>Radius around selected destination</p>
                            </div>
                            <div class="form-group">
                                <input type="range" min="0" max="100" value="20" data-rangeslider>
                            </div>
                        </form>
                    </div>

                    <div class="mb-5">
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
                    </div>

                </div>

            </div>
        </div>
    </div>

@stop
