@extends('viewsLayout.app')

@section('backgroudImgSection')
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10">


                    <div class="row justify-content-center mb-4">
                        <div class="col-md-10 text-center">
                            <h1 data-aos="fade-up">Trouvez prêt de vous <span class="typed-words"></span></h1>
                            <p data-aos="fade-up" class=" w-75 mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Porro provident corporis consequuntur et totam.</p>
                        </div>
                    </div>

                    <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
                        <form method="post">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-xl-4 no-sm-border border-right">
                                    <input type="text" class="form-control" placeholder="What are you looking for?">
                                </div>
                                <div class="col-lg-12 col-xl-3 no-sm-border border-right">
                                    <div class="wrap-icon">
                                        <span class="icon icon-room"></span>
                                        <input type="text" class="form-control" placeholder="Location">
                                    </div>

                                </div>
                                <div class="col-lg-12 col-xl-3">
                                    <div class="select-wrap">
                                        <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                        <select class="form-control" name="" id="">
                                            <option value="">All Categories</option>
                                            <option value="">Hotels</option>
                                            <option value="">Restaurant</option>
                                            <option value="">Eat &amp; Drink</option>
                                            <option value="">Events</option>
                                            <option value="">Fitness</option>
                                            <option value="">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-2 ml-auto text-right">
                                    <input type="submit" class="btn text-white btn-primary" value="Search">
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop

@section('pageContent')

    <div class="site-section" data-aos="fade">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Qui sommes-nous ?</h2>
                </div>
            </div>

            <div class="row" style="box-shadow: 2px 3px 4px lightgrey; border-radius: 10px">
                <div class="col-md-4">
                    <div class="listing-image">
                        <img src="images/img_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8">
                    <p style="text-align: justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias blanditiis corporis cumque deleniti
                        eius eos excepturi exercitationem in maxime modi nesciunt perferendis quasi quia, quidem reiciendis
                        sed unde ut veritatis.
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aspernatur autem dolorum eius et
                        ex exercitationem explicabo fugiat fugit in ipsa iure obcaecati officia quaerat quam quibusdam,
                        repellendus sunt voluptate!
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dolore, dolorum expedita explicabo
                        illum iusto minus nostrum porro qui quis sint ut veritatis vitae voluptatibus voluptatum. Autem
                        debitis eligendi natus!
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet commodi deleniti dolorum eum fugit
                        nisi nulla obcaecati odio perspiciatis porro quia quisquam repellendus, tempore! Ea laboriosam nemo
                        perferendis sint vero.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Comment ça marche ?</h2>
                    <p class="color-black-opacity-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, asperiores
                        autem beatae deserunt dicta enim ex, fugit harum in non.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                    <div class="how-it-work-step">
                        <div class="img-wrap">
                            <img src="images/step-1.svg" alt="Free website template by Free-Template.co" class="img-fluid">
                        </div>
                        <span class="number">1</span>
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam aut consectetur eaque eos
                            est eum excepturi ipsa ipsam iusto nesciunt officiis, pariatur quis repellat rerum ullam vitae?
                            Dignissimos, facilis.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                    <div class="how-it-work-step">
                        <div class="img-wrap">
                            <img src="images/step-2.svg" alt="Free website template by Free-Template.co" class="img-fluid">
                        </div>
                        <span class="number">2</span>
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam aut consectetur eaque eos
                            est eum excepturi ipsa ipsam iusto nesciunt officiis, pariatur quis repellat rerum ullam vitae?
                            Dignissimos, facilis.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                    <div class="how-it-work-step">
                        <div class="img-wrap">
                            <img src="images/step-3.svg" alt="Free website template by Free-Template.co" class="img-fluid">
                        </div>
                        <span class="number">3</span>
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam aut consectetur eaque eos
                            est eum excepturi ipsa ipsam iusto nesciunt officiis, pariatur quis repellat rerum ullam vitae?
                            Dignissimos, facilis.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" class="embed-responsive-item"
                                src="https://www.youtube.com/embed/195RY7jCuZg" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--<div class="site-section" data-aos="fade">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Most Visited Places</h2>
                    <p class="color-black-opacity-5">Far far away, behind the word mountains, far from the countries Vokalia
                        and Consonantia, there live the blind texts.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

                    <div class="listing-item">
                        <div class="listing-image">
                            <img src="images/img_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        </div>
                        <div class="listing-item-content">
                            <a href="listings-single.html" class="bookmark" data-toggle="tooltip" data-placement="left"
                               title="Bookmark"><span class="icon-heart"></span></a>
                            <a class="px-3 mb-3 category" href="#">Hotels</a>
                            <h2 class="mb-1"><a href="listings-single.html">Luxe Hotel</a></h2>
                            <span class="address">West Orange, New York</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

                    <div class="listing-item">
                        <div class="listing-image">
                            <img src="images/img_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        </div>
                        <div class="listing-item-content">
                            <a href="listings-single.html" class="bookmark"><span class="icon-heart"></span></a>
                            <a class="px-3 mb-3 category" href="#">Restaurants</a>
                            <h2 class="mb-1"><a href="listings-single.html">Jones Grill &amp; Restaurants</a></h2>
                            <span class="address">Brooklyn, New York</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

                    <div class="listing-item">
                        <div class="listing-image">
                            <img src="images/img_3.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        </div>
                        <div class="listing-item-content">
                            <a href="listings-single.html" class="bookmark"><span class="icon-heart"></span></a>
                            <a class="px-3 mb-3 category" href="#">Events</a>
                            <h2 class="mb-1"><a href="listings-single.html">Live Band</a></h2>
                            <span class="address">West Orange, New York</span>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

                    <div class="listing-item">
                        <div class="listing-image">
                            <img src="images/img_4.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        </div>
                        <div class="listing-item-content">
                            <a href="listings-single.html" class="bookmark" data-toggle="tooltip" data-placement="left"
                               title="Bookmark"><span class="icon-heart"></span></a>
                            <a class="px-3 mb-3 category" href="#">Others</a>
                            <h2 class="mb-1"><a href="listings-single.html">Gourmet Coffees</a></h2>
                            <span class="address">New York City</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

                    <div class="listing-item">
                        <div class="listing-image">
                            <img src="images/img_5.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        </div>
                        <div class="listing-item-content">
                            <a href="listings-single.html" class="bookmark"><span class="icon-heart"></span></a>
                            <a class="px-3 mb-3 category" href="#">Spa</a>
                            <h2 class="mb-1"><a href="listings-single.html">La Italia Spa</a></h2>
                            <span class="address">Italy</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">

                    <div class="listing-item">
                        <div class="listing-image">
                            <img src="images/img_6.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        </div>
                        <div class="listing-item-content">
                            <a href="listings-single.html" class="bookmark"><span class="icon-heart"></span></a>
                            <a class="px-3 mb-3 category" href="#">Stores</a>
                            <h2 class="mb-1"><a href="listings-single.html">Super Market Mall</a></h2>
                            <span class="address">West Orange, New York</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>-->

    <!--<div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Popular Categories</h2>
                    <p class="color-black-opacity-5">Far far away, behind the word mountains, far from the countries Vokalia
                        and Consonantia, there live the blind texts.</p>
                </div>
            </div>

            <div class="row align-items-stretch">
                <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                    <a href="#" class="popular-category h-100">
                        <span class="icon mb-3"><span class="flaticon-hotel"></span></span>
                        <span class="caption mb-2 d-block">Hotels</span>
                        <span class="number">4,89</span>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                    <a href="#" class="popular-category h-100">
                        <span class="icon mb-3"><span class="flaticon-microphone"></span></span>
                        <span class="caption mb-2 d-block">Events</span>
                        <span class="number">482</span>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                    <a href="#" class="popular-category h-100">
                        <span class="icon mb-3"><span class="flaticon-flower"></span></span>
                        <span class="caption mb-2 d-block">Spa</span>
                        <span class="number">194</span>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                    <a href="#" class="popular-category h-100">
                        <span class="icon mb-3"><span class="flaticon-restaurant"></span></span>
                        <span class="caption mb-2 d-block">Stores</span>
                        <span class="number">1,472</span>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                    <a href="#" class="popular-category h-100">
                        <span class="icon mb-3"><span class="flaticon-cutlery"></span></span>
                        <span class="caption mb-2 d-block">Restaurants</span>
                        <span class="number">439</span>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                    <a href="#" class="popular-category h-100">
                        <span class="icon mb-3"><span class="flaticon-bike"></span></span>
                        <span class="caption mb-2 d-block">Other</span>
                        <span class="number">692</span>
                    </a>
                </div>
            </div>

            <div class="row mt-5 justify-content-center tex-center">
                <div class="col-md-4"><a href="#" class="btn btn-block btn-outline-primary btn-md px-5">View All
                        Categories</a></div>
            </div>
        </div>
    </div>-->

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <img src="images/img_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid rounded">
                </div>
                <div class="col-md-5 ml-auto">
                    <h2 class="text-primary mb-3">Pourquoi nous choisir ?</h2>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="border p-3 rounded mb-2">
                                <a data-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false"
                                   aria-controls="collapse-1" class="accordion-item h5 d-block mb-0">How to list my
                                    item?</a>

                                <div class="collapse" id="collapse-1">
                                    <div class="pt-2">
                                        <p class="mb-0">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded mb-2">
                                <a data-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false"
                                   aria-controls="collapse-4" class="accordion-item h5 d-block mb-0">Is this available in my
                                    country?</a>

                                <div class="collapse" id="collapse-4">
                                    <div class="pt-2">
                                        <p class="mb-0">A small river named Duden flows by their place and supplies it with
                                            the necessary regelialia. It is a paradisematic country, in which roasted parts
                                            of sentences fly into your mouth.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded mb-2">
                                <a data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false"
                                   aria-controls="collapse-2" class="accordion-item h5 d-block mb-0">Is it free?</a>

                                <div class="collapse" id="collapse-2">
                                    <div class="pt-2">
                                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts
                                            it is an almost unorthographic life One day however a small line of blind text
                                            by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border p-3 rounded mb-2">
                                <a data-toggle="collapse" href="#collapse-3" role="button" aria-expanded="false"
                                   aria-controls="collapse-3" class="accordion-item h5 d-block mb-0">How the system
                                    works?</a>

                                <div class="collapse" id="collapse-3">
                                    <div class="pt-2">
                                        <p class="mb-0">The Big Oxmox advised her not to do so, because there were thousands
                                            of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind
                                            Text didn’t listen. She packed her seven versalia, put her initial into the belt
                                            and made herself on the way.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Testimony area-->

    @include('viewsLayout.testimony')
    @include('viewsLayout.registerSection')
@stop
