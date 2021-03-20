@extends('viewsLayout.app')


@section('title')
    | Foire aux questions
@stop

@section('backgroudImgSection')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h1>Foire aux questions</h1>
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
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Les questions qui nous sont frequemment posées.</h2>
                    <p class="color-black-opacity-5">Lorem Ipsum Dolor Sit Amet</p>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="border p-3 rounded mb-2">
                        <a data-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapse-1" class="accordion-item h5 d-block mb-0">How to list my item?</a>

                        <div class="collapse" id="collapse-1">
                            <div class="pt-2">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti esse voluptates deleniti, ratione, suscipit quam cumque beatae, enim mollitia voluptatum velit excepturi possimus odio dolore molestiae officiis aspernatur provident praesentium.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border p-3 rounded mb-2">
                        <a data-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false" aria-controls="collapse-4" class="accordion-item h5 d-block mb-0">Is this available in my country?</a>

                        <div class="collapse" id="collapse-4">
                            <div class="pt-2">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti esse voluptates deleniti, ratione, suscipit quam cumque beatae, enim mollitia voluptatum velit excepturi possimus odio dolore molestiae officiis aspernatur provident praesentium.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border p-3 rounded mb-2">
                        <a data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2" class="accordion-item h5 d-block mb-0">Is it free?</a>

                        <div class="collapse" id="collapse-2">
                            <div class="pt-2">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti esse voluptates deleniti, ratione, suscipit quam cumque beatae, enim mollitia voluptatum velit excepturi possimus odio dolore molestiae officiis aspernatur provident praesentium.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border p-3 rounded mb-2">
                        <a data-toggle="collapse" href="#collapse-3" role="button" aria-expanded="false" aria-controls="collapse-3" class="accordion-item h5 d-block mb-0">How the system works?</a>

                        <div class="collapse" id="collapse-3">
                            <div class="pt-2">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti esse voluptates deleniti, ratione, suscipit quam cumque beatae, enim mollitia voluptatum velit excepturi possimus odio dolore molestiae officiis aspernatur provident praesentium.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!--Register area-->
    @include('viewsLayout.registerSection')
@stop
