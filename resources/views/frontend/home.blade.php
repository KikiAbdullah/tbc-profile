@extends('layouts.frontend')

@section('content')
<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
        <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
            <img class="one-third js-fullheight align-self-end order-md-last img-fluid" src="{{ asset('cohost/images/teams.svg') }}" alt="">
            <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
                <div class="text mt-5">
                    <span class="subheading">Tower Barat Creative</span>
                    <h1 class="mb-3"><span>We Make</span> <span>Your Ideas</span> <span>Real!</span></h1>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3">Get in touch</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center ftco-animate">
                <div class="steps">
                    <div class="icon mb-4 d-flex justify-content-center align-items-center">
                        <span class="flaticon-cloud-computing"></span>
                    </div>
                    <h3>Choose Your Plan</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
            <div class="col-md-4 text-center ftco-animate">
                <div class="steps">
                    <div class="icon mb-4 d-flex justify-content-center align-items-center">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <h3>Create Your Account</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
            <div class="col-md-4 text-center ftco-animate">
                <div class="steps">
                    <div class="icon mb-4 d-flex justify-content-center align-items-center">
                        <span class="flaticon-database"></span>
                    </div>
                    <h3>Launch</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Services</span>
                <h2 class="mb-4">How it works</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate">
                <div class="nav ftco-animate nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-nextgen-tab" data-toggle="pill" href="#v-pills-nextgen" role="tab" aria-controls="v-pills-nextgen" aria-selected="true">Multimedia</a>

                    <a class="nav-link" id="v-pills-performance-tab" data-toggle="pill" href="#v-pills-performance" role="tab" aria-controls="v-pills-performance" aria-selected="false">Desain Grafis</a>

                    <a class="nav-link" id="v-pills-effect-tab" data-toggle="pill" href="#v-pills-effect" role="tab" aria-controls="v-pills-effect" aria-selected="false">Web Development</a>
                </div>
            </div>
            <div class="col-md-12 align-items-center ftco-animate">

                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-nextgen" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                        <div class="d-md-flex">
                            <div class="one-forth align-self-center">
                                <img src="{{ asset('cohost/images/multimedia.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="one-half ml-md-5 align-self-center">
                                <h2 class="mb-4">Multimedia</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                                <p><a href="#" class="btn btn-primary py-3">Get in touch</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                        <div class="d-md-flex">
                            <div class="one-forth order-last align-self-center">
                                <img src="{{ asset('cohost/images/desain.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="one-half order-first mr-md-5 align-self-center">
                                <h2 class="mb-4">Desain Grafis</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                                <p><a href="#" class="btn btn-primary py-3">Get in touch</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-effect" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                        <div class="d-md-flex">
                            <div class="one-forth align-self-center">
                                <img src="{{ asset('cohost/images/coding.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="one-half ml-md-5 align-self-center">
                                <h2 class="mb-4">Web Development</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                                <p><a href="#" class="btn btn-primary py-3">Get in touch</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection