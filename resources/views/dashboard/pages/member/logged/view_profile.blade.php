@extends('layouts.dashboard')

@section('content')
        <!--
        <div class="dashboard-content-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                            <ul class="list-items d-flex align-items-center">
                                <li class="active__list-item"><a href="index.html">Home</a></li>
                                <li class="">Mon profil</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->

        <section class="breadcrumb-area">
            <div class="breadcrumb-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content candidate-breadcrumb d-flex flex-wrap justify-content-between align-items-center">
                                <div class="bread-details">
                                    <div class="bread-candidate-detail d-flex align-items-center">
                                        <div class="bread-img radius--rounded">
                                            <img src="{{ asset('assets/img/bg/c365b8a560418cf02dda44994d809d60.jpg') }}" alt="" class="radius--rounded">
                                        </div>
                                        <div class="bread-candidate-inner">
                                            <div class="candidate-content">
                                                <h2 class="widget-title font-size-30 text-white pb-1 d-flex align-items-center">James Anderson </h2>
                                                <p class="font-size-16 line-height-28 text-white">
                                                    <span class="d-block">Member Since, Aug 5, 2019</span>
                                                    <span class="d-block font-size-15">Senior PHP Developer at Bluetech, Inc</span>
                                                </p>
                                            </div><!-- end candidate-content -->
                                            <ul class="social-profile mt-2">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- end bread-details -->
                                <div class="bread-action">
                                    <ul class="listing-info">
                                        <li>
                                            <button type="button" class="theme-btn border-0"><i class="far fa-user font-size-16"></i> Modifier</button>
                                        </li>
                                    </ul>
                                </div><!-- end bread-action -->
                            </div><!-- end breadcrumb-content -->
                        </div><!-- end col-lg-12 -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end breadcrumb-wrap -->
        </section>

        <section class="candidate-details padding-top-50px padding-bottom-80px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-employer-wrap">
                            <div class="candidate-description padding-bottom-35px">
                                <h2 class="widget-title">About Me</h2>
                                <div class="title-shape"></div>
                                <div class="row mt-5">
                                    <div class="col-lg-4 column-lg-half column-sd-full">
                                        <div class="icon-box candidate-info d-flex align-items-center">
                                            <div class="icon-element flex-shrink-0">
                                                <i class="la la-clock-o"></i>
                                            </div><!-- end icon-element-->
                                            <div class="info-content">
                                                <h4 class="info__title">Experience</h4>
                                                <p class="info__desc">4 Years</p>
                                            </div><!-- end info-content -->
                                        </div><!-- end icon-box -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 column-lg-half column-sd-full">
                                        <div class="icon-box candidate-info d-flex align-items-center">
                                            <div class="icon-element flex-shrink-0">
                                                <i class="la la-line-chart"></i>
                                            </div><!-- end icon-element-->
                                            <div class="info-content">
                                                <h4 class="info__title">Age</h4>
                                                <p class="info__desc">22 Years</p>
                                            </div><!-- end info-content -->
                                        </div><!-- end icon-box -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 column-lg-half column-sd-full">
                                        <div class="icon-box candidate-info d-flex align-items-center">
                                            <div class="icon-element flex-shrink-0">
                                                <i class="la la-money"></i>
                                            </div><!-- end icon-element-->
                                            <div class="info-content">
                                                <h4 class="info__title">Current Salary</h4>
                                                <p class="info__desc">$14K - $15K</p>
                                            </div><!-- end info-content -->
                                        </div><!-- end icon-box -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 column-lg-half column-sd-full">
                                        <div class="icon-box candidate-info d-flex align-items-center">
                                            <div class="icon-element flex-shrink-0">
                                                <i class="la la-bullhorn"></i>
                                            </div><!-- end icon-element-->
                                            <div class="info-content">
                                                <h4 class="info__title">Expected Salary</h4>
                                                <p class="info__desc">$16K - $25K</p>
                                            </div><!-- end info-content -->
                                        </div><!-- end icon-box -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 column-lg-half column-sd-full">
                                        <div class="icon-box candidate-info d-flex align-items-center">
                                            <div class="icon-element flex-shrink-0">
                                                <i class="la la-globe"></i>
                                            </div><!-- end icon-element-->
                                            <div class="info-content">
                                                <h4 class="info__title">Languages</h4>
                                                <p class="info__desc">Chinese, French</p>
                                            </div><!-- end info-content -->
                                        </div><!-- end icon-box -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 column-lg-half column-sd-full">
                                        <div class="icon-box candidate-info d-flex align-items-center">
                                            <div class="icon-element flex-shrink-0">
                                                <i class="la la-graduation-cap"></i>
                                            </div><!-- end icon-element-->
                                            <div class="info-content">
                                                <h4 class="info__title">Education Levels</h4>
                                                <p class="info__desc">Certificate</p>
                                            </div><!-- end info-content -->
                                        </div><!-- end icon-box -->
                                    </div><!-- end col-lg-4 -->
                                </div>
                                <p class="mb-3">
                                    Voluptatem accu santium doloremque laudantium,
                                    totam rem ape dicta sunt dose explicabo. Nemo enim ipsam voluptatem quia voluptas.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa kequi
                                    officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                                    unde omnis iste natus error sit voluptatem accusan tium dolorem
                                    que laudantium, totam rem aperiam the eaque ipsa quae abillo
                                    was inventore veritatis keret quasi aperiam architecto
                                </p>
                                <p>
                                    Aperiam the eaque ipsa quae abillo
                                    was inventore veritatis keret quasi aperiam architecto
                                    beatae vitae dicta sunt explicabo.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div><!-- end candidate-description -->
                            <div class="candidate-education padding-bottom-40px">
                                <h2 class="widget-title">Education</h2>
                                <div class="title-shape"></div>
                                <div class="timeline-dashboard padding-bottom-40px">
                                    <div class="timeline-body pt-3">
                                        <div class="mess__body">
                                            <div class="mess__item">
                                                <div class="ring-icon ring-bg-1"></div>
                                                <div class="content">
                                                    <p class="color-text-2">Masters in Fine Arts <span class="color-text-3">2000 - 2002</span></p>
                                                    <p class="mb-1 font-size-15">Walters University</p>
                                                    <span class="time color-text-3 d-block line-height-26">totam rem aperiam the eaque ipsa quae abillo was
                                                        inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo.
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. was inventore veritatis keret
                                                        quasi aperiam architecto beatae vitae dicta sunt explicabo
                                                    </span>
                                                </div>
                                            </div><!-- end mess__item -->
                                            <div class="mess__item">
                                                <div class="ring-icon ring-bg-2"></div>
                                                <div class="content">
                                                    <p class="color-text-2">Masters in Fine Arts <span class="color-text-3">2004 - 2007</span></p>
                                                    <p class="mb-1 font-size-15">Bachlors in Fine Arts</p>
                                                    <span class="time color-text-3 d-block line-height-26">totam rem aperiam the eaque ipsa quae abillo was
                                                        inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo.
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. was inventore veritatis keret
                                                        quasi aperiam architecto beatae vitae dicta sunt explicabo
                                                    </span>
                                                </div>
                                            </div><!-- end mess__item -->
                                            <div class="mess__item">
                                                <div class="ring-icon ring-bg-3"></div>
                                                <div class="content">
                                                    <p class="color-text-2">Master in computer science <span class="color-text-3">2008 - 2010</span></p>
                                                    <p class="mb-1 font-size-15">Walters University</p>
                                                    <span class="time color-text-3 d-block line-height-26">totam rem aperiam the eaque ipsa quae abillo was
                                                        inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo.
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. was inventore veritatis keret
                                                        quasi aperiam architecto beatae vitae dicta sunt explicabo
                                                    </span>
                                                </div>
                                            </div><!-- end mess__item -->
                                            <div class="mess__item">
                                                <div class="ring-icon ring-bg-4"></div>
                                                <div class="content">
                                                    <p class="color-text-2">Tommers College <span class="color-text-3">2010 - 2012</span></p>
                                                    <p class="mb-1 font-size-15">Imperieal Institute of Art Direction</p>
                                                    <span class="time color-text-3 d-block line-height-26">totam rem aperiam the eaque ipsa quae abillo was
                                                        inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo.
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. was inventore veritatis keret
                                                        quasi aperiam architecto beatae vitae dicta sunt explicabo
                                                    </span>
                                                </div>
                                            </div><!-- end mess__item -->
                                        </div><!-- end mess__body -->
                                    </div>
                                </div><!-- end timeline-dashboard -->
                                <h2 class="widget-title">Work Experience</h2>
                                <div class="title-shape"></div>
                                <div class="timeline-dashboard">
                                    <div class="timeline-body pt-3">
                                        <div class="mess__body">
                                            <div class="mess__item">
                                                <div class="ring-icon ring-bg-1"></div>
                                                <div class="content">
                                                    <p class="color-text-2">Development Manager <span class="color-text-3">03-07-2009 - 03-07-2010</span></p>
                                                    <p class="mb-1 font-size-15">Bluetech, Inc</p>
                                                    <span class="time color-text-3 d-block line-height-26">totam rem aperiam the eaque ipsa quae abillo was
                                                        inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo.
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. was inventore veritatis keret
                                                        quasi aperiam architecto beatae vitae dicta sunt explicabo
                                                    </span>
                                                </div>
                                            </div><!-- end mess__item -->
                                            <div class="mess__item">
                                                <div class="ring-icon ring-bg-2"></div>
                                                <div class="content">
                                                    <p class="color-text-2">Senior PHP Developer <span class="color-text-3">03-07-2005 - 03-07-2008</span></p>
                                                    <p class="mb-1 font-size-15">Amazon, Inc</p>
                                                    <span class="time color-text-3 d-block line-height-26">totam rem aperiam the eaque ipsa quae abillo was
                                                        inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo.
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. was inventore veritatis keret
                                                        quasi aperiam architecto beatae vitae dicta sunt explicabo
                                                    </span>
                                                </div>
                                            </div><!-- end mess__item -->
                                            <div class="mess__item">
                                                <div class="ring-icon ring-bg-3"></div>
                                                <div class="content">
                                                    <p class="color-text-2">Self Employed Professional <span class="color-text-3">03-07-2003 - 03-07-2004</span></p>
                                                    <p class="mb-1 font-size-15">Apple, Inc</p>
                                                    <span class="time color-text-3 d-block line-height-26">totam rem aperiam the eaque ipsa quae abillo was
                                                        inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo.
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. was inventore veritatis keret
                                                        quasi aperiam architecto beatae vitae dicta sunt explicabo
                                                    </span>
                                                </div>
                                            </div><!-- end mess__item -->
                                        </div><!-- end mess__body -->
                                    </div>
                                </div><!-- end timeline-dashboard -->
                            </div><!-- end candidate-education -->
                            <div class="circle-bar-wrap padding-bottom-30px">
                                <h2 class="widget-title">My Skills</h2>
                                <div class="title-shape"></div>
                                <div class="row mt-5">
                                    <div class="col-lg-3 responsive-column column-md-3">
                                        <div class="circlechart circlechart-bg1" data-percentage="90">
                                            Photoshop
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 responsive-column column-md-3">
                                        <div class="circlechart circlechart-bg2" data-percentage="70">
                                            HTML/CSS
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 responsive-column column-md-3">
                                        <div class="circlechart circlechart-bg3" data-percentage="60">
                                            JavaScript
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 responsive-column column-md-3">
                                        <div class="circlechart circlechart-bg4" data-percentage="50">
                                            PHP
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                </div><!-- end row -->
                            </div><!-- end circle-bar-wrap -->
                            <div class="video-employer padding-bottom-20px">
                                <h2 class="widget-title">Video</h2>
                                <div class="title-shape"></div>
                                <div class="video__box margin-top-35px text-center">
                                    <img src="images/img11.jpg" alt="video-image">
                                    <a class="mfp-iframe video-popup-btn video-play-btn" href="https://www.youtube.com/watch?v=MiaRd3NO02w" title="Play Video">
                                        <span class="la la-youtube"></span>
                                    </a>
                                </div><!-- end video__box -->
                            </div><!-- end video-employer -->
                        </div><!-- end single-employer-wrap -->
                    </div><!-- end col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <div class="billing-form-item">
                                    <div class="billing-title-wrap">
                                        <h3 class="widget-title">Contact James Anderson</h3>
                                        <div class="title-shape"></div>
                                    </div><!-- billing-title-wrap -->
                                    <div class="billing-content">
                                        <div class="contact-form-action">
                                            <form method="post">
                                                <div class="input-box">
                                                    <label class="label-text">Your Name</label>
                                                    <div class="form-group">
                                                        <span class="la la-user form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="Enter your name">
                                                    </div>
                                                </div>
                                                <div class="input-box">
                                                    <label class="label-text">Email</label>
                                                    <div class="form-group">
                                                        <span class="la la-envelope-o form-icon"></span>
                                                        <input class="form-control" type="text" name="name" placeholder="Enter email address">
                                                    </div>
                                                </div>
                                                <div class="input-box">
                                                    <label class="label-text">Phone Number</label>
                                                    <div class="form-group">
                                                        <span class="la la-phone form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="Phone number">
                                                    </div>
                                                </div>
                                                <div class="input-box">
                                                    <label class="label-text">Message</label>
                                                    <div class="form-group">
                                                        <span class="la la-pencil form-icon"></span>
                                                        <textarea class="message-control form-control line-height-20" name="message" placeholder="Message should have more than 150 characters"></textarea>
                                                    </div>
                                                </div>
                                                <div class="btn-box">
                                                    <button class="theme-btn border-0 w-100 text-center">Send Message</button>
                                                    <p class="font-size-14 font-weight-regular mt-1">You accepts our <a href="terms-and-condition.html" class="color-text-2">Terms and Conditions</a></p>
                                                </div>
                                            </form>
                                        </div><!-- end contact-form-action -->
                                    </div><!-- end billing-content -->
                                </div>
                            </div><!-- end sidebar-widget -->
                            <div class="sidebar-widget">
                                <div class="billing-form-item">
                                    <div class="billing-title-wrap">
                                        <h2 class="widget-title">Location</h2>
                                        <div class="title-shape"></div>
                                    </div>
                                    <div class="billing-content">
                                        <div class="listing-map gmaps">
                                            <div id="map"></div>
                                        </div><!-- end listing-map -->
                                    </div>
                                </div>
                            </div><!-- end sidebar-widget -->
                            <div class="sidebar-widget">
                                <h2 class="widget-title">Let us help you get started </h2>
                                <div class="title-shape margin-bottom-30px"></div>
                                <div class="post-card mb-0 section-bg text-center pb-5 pr-4 pl-4 pt-4">
                                    <div class="post-card-content">
                                        <img src="images/search.svg" alt="" class="img-fluid">
                                        <h2 class="widget-title mt-3">Are You Looking for a Job?</h2>
                                        <p>
                                            Objectively innovate empowered manufactured products whereas parallel platforms.
                                        </p>
                                    </div><!-- end post-card-content -->
                                    <div class="btn-box mt-4 text-center">
                                        <a href="job-listing.html" class="theme-btn">Find a Job</a>
                                    </div><!-- end btn-box -->
                                </div>
                            </div><!-- end sidebar-widget -->
                            <div class="sidebar-widget">
                                <div class="post-card mb-0 section-bg text-center pb-5 pr-4 pl-4 pt-4">
                                    <div class="post-card-content">
                                        <img src="images/podcast.svg" alt="" class="img-fluid">
                                        <h2 class="widget-title mt-3">Employers Looking to Post a Job?</h2>
                                        <p>
                                            Objectively innovate empowered manufactured products whereas parallel platforms.
                                        </p>
                                    </div><!-- end post-card-content -->
                                    <div class="btn-box mt-4 text-center">
                                        <a href="employer-dashboard-post-job.html" class="theme-btn">Post a Job</a>
                                    </div><!-- end btn-box -->
                                </div>
                            </div><!-- end sidebar-widget -->
                            <div class="sidebar-widget">
                                <div class="post-card mb-0 section-bg text-center pb-5 pr-4 pl-4 pt-4">
                                    <div class="post-card-content">
                                        <img src="images/data-points.svg" alt="" class="img-fluid">
                                        <h2 class="widget-title mt-3">Job Market Data</h2>
                                        <p>
                                            Objectively innovate empowered manufactured products whereas parallel platforms.
                                        </p>
                                    </div><!-- end post-card-content -->
                                    <div class="btn-box mt-4 text-center">
                                        <a href="employer-dashboard-post-job.html" class="theme-btn">Get Data</a>
                                    </div><!-- end btn-box -->
                                </div>
                            </div><!-- end sidebar-widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col-lg-4 -->
                </div><!-- end row -->
            </div>
        </section>

@endsection