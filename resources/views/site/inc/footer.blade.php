@if($footer_target == '1')
    <section class="footer-area padding-top-90px padding-bottom-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 responsive-column">
                    <div class="footer-item">
                        <div class="logo">
                            <a href="index.html" class="foot-logo"><img src="{{asset('assets/img/logo/logo_og_footer.png')}}" width="200px" alt="logo"></a>
                            <p class="footer__desc line-height-30 mt-3">
                                Nous recensons pour vous toutes les offres de formation adaptées à vos attentes, gratuitement <i class="text-success fa fa-smile"></i>
                            </p>
                            <h4 class="footer__title mt-4">Suivez nous</h4>
                            <ul class="social-profile">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="footer__title">General</h4>
                        <ul class="list-items">
                            <li><a href="about.html">About / Press</a></li>
                            <li><a href="#">Awards</a></li>
                            <li><a href="blog-grid.html">Blog</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Guidelines</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div><!-- end footer-item -->
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="footer__title">Job Seekers</h4>
                        <ul class="list-items">
                            <li><a href="#">International Jobs</a></li>
                            <li><a href="#">Upload Resume</a></li>
                            <li><a href="#">Resume Help</a></li>
                            <li><a href="#">Career Advice</a></li>
                            <li><a href="#">Salary Tools</a></li>
                            <li><a href="#">Site map</a></li>
                        </ul>
                    </div><!-- end footer-item -->
                </div>
                <div class="col-lg-2 responsive-column">
                    <div class="footer-item">
                        <h4 class="footer__title">Langues</h4>
                        <select name="" id="">
                            <option value="">français</option>
                            <option value="">english</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right margin-top-50px padding-top-30px">
                        <p class="copy__desc">
                            Copyright &copy; {{ date('Y').' '.config('app.name') }}
                        </p>
                        <ul class="list-items">
                            <li class="color-text-2 font-weight-medium">Browse by:</li>
                            <li><a href="#">Companies,</a></li>
                            <li><a href="#">Jobs,</a></li>
                            <li><a href="#">Locations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="back-to-top">
        <i class="fa fa-angle-up" title="Go top"></i>
    </div>
@endif