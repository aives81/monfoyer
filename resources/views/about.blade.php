@extends('viewsLayout.app')

@section('title')
| A propos de nous
@stop
@section('backgroudImgSection')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h1>A propos de nous</h1>
                            <p data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate beatae quisquam perspiciatis adipisci ipsam quam.</p>
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
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-md-5 ml-auto">
                    <h2 class="text-primary mb-3">History</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptates a explicabo delectus sed labore dolor enim optio odio at!</p>
                    <p class="mb-4">Adipisci dolore reprehenderit est et assumenda veritatis, ex voluptate odio consequuntur quo ipsa accusamus dicta laborum exercitationem aspernatur reiciendis perspiciatis!</p>

                    <ul class="ul-check list-unstyled success">
                        <li>Adipisci dolore reprehenderit</li>
                        <li>Accusamus dicta laborum</li>
                        <li>Delectus sed labore</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section"  data-aos="fade">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8" >
                    <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4 mx-auto">
                    <h3>Who We Are</h3>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 ml-auto">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
                <div class="col-md-4">
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-4 text-left border-primary">
                    <h2 class="font-weight-light text-primary">Our Team</h2>
                    <p class="color-black-opacity-5">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-4 mb-lg-5">
                    <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-3">
                    <h3 class="h4">Susan Horton</h3>
                    <p class="caption text-primary">Founder</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
                <div class="col-md-6 col-lg-6 mb-4 mb-lg-5 mt-md-5">
                    <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                    <h3 class="h4">Jonathan Kennedy</h3>
                    <p class="caption text-primary">Founder</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="col-md-6 col-lg-6 mb-4 mb-lg-5">
                    <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                    <h3 class="h4">Gordon Meyer</h3>
                    <p class="caption text-primary">Lead Developer</p>
                </div>
                <div class="col-md-6 col-lg-6 mb-4 mb-lg-5 mt-md-5">
                    <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                    <h3 class="h4">Doug Hale Kennedy</h3>
                    <p class="caption text-primary">ProjectManager</p>
                </div>
            </div>

        </div>
    </div>

    <!--Testimony area-->

    @include('viewsLayout.testimony')

    <!--Register area-->
    @include('viewsLayout.registerSection')
@stop
