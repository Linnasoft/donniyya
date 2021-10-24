@extends('member.layouts.app')

@section('content')

    <section class="hero-wrapper hero-wrapper-3">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-content-wrapper">
                        <div class="hero-heading">
                            <div class="section-heading">
                                <h2 class="sec__title line-height-65">
                                    Augmentez vos revenus sur {{ config('app.name') }} !
                                </h2>
                                <h4 class="line-height-35">
                                    Nous recensons gratuitement vos offres de formation et vous aidons à attirer rapidement le maximum d'inscriptions.
                                </h4>
                            </div>
                        </div>
                        <div class="btn-box margin-top-35px">
                            <a href="job-grid-view.html" class="theme-btn">Je deviens formateur</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-form-wrap position-relative">
                        <img alt="logo" src="{{asset('assets/img/bg/c365b8a560418cf02dda44994d809d60.jpg')}}"  class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-shape"></div>
    </section>

    <div class="section-block"></div>

@endsection
