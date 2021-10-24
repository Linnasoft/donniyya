@if($navbar_target == '1')
    <header class="header-area header-area-2">
        <div class="header-menu-wrapper padding-right-40px padding-left-40px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-full-width">
                            <div class="logo">
                                <a href="/">
                                    <img alt="logo" src="{{asset('assets/img/logo/logo_wh_header.png')}}" width="200px" class="">
                                </a>
                            </div>
                            <div class="logo-right-content ml-auto">
                                <ul class="author-access-list">
                                    <li>
                                        <a href="/connexion">{{ __('navigation.login_text') }}</a>
                                        <span class="or-text">|</span>
                                        <a href="/creer-un-compte">{{ __('navigation.signup_text') }}</a>
                                    </li>
                                    <li>
                                        <a href="employer-dashboard-post-job.html" class="theme-btn">
                                            <span class="fa fa-user"></span>
                                            {{ __('navigation.become_teacher_text') }}
                                        </a>
                                    </li>
                                </ul>
                                <div class="side-menu-open">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <li>
                        <a href="#">Home <i class="fa fa-caret-down btn-toggle"></i></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="index.html">Home 1</a></li>
                            <li><a href="index2.html">Home 2</a></li>
                            <li><a href="index3.html">Home 3</a></li>
                            <li><a href="index4.html">Home 4 </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Employers <i class="fa fa-caret-down btn-toggle"></i></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="employer-listing.html">Employer Listing</a></li>
                            <li><a href="employer-details.html">Employer Details</a></li>
                            <li><a href="employer-dashboard.html">Employer Dashboard</a></li>
                            <li><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>
                            <li><a href="employer-dashboard-post-job.html">Post a Job</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Candidates <i class="fa fa-caret-down btn-toggle"></i></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="candidate-listing.html">Candidate Listing</a></li>
                            <li><a href="candidate-details.html">Candidate Details</a></li>
                            <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                            <li><a href="candidate-dashboard-edit-profile.html">Edit Profile</a></li>
                            <li><a href="candidate-add-resume.html">Add a Resume</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages <i class="fa fa-caret-down btn-toggle"></i></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="all-category.html">All Category </a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="how-it-works.html">How It Works</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="payment-complete.html">Payment Complete</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="page-404.html">404 Page</a></li>
                            <li><a href="terms-and-condition.html">Terms And Condition</a></li>
                            <li><a href="recover.html">Recover Password</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog <i class="fa fa-caret-down btn-toggle"></i></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Jobs <i class="fa fa-caret-down btn-toggle"></i></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="job-listing.html">Job Listing</a></li>
                            <li><a href="job-grid-view.html">Job Grid View</a></li>
                            <li><a href="job-details.html">Job Details </a></li>
                        </ul>
                    </li>
                </ul>
                <div class="side-nav-button">
                    <a href="login.html">Login</a>
                    <span class="or-text">or</span>
                    <a href="sign-up.html">Sign up</a>
                    <a href="employer-dashboard-post-job.html" class="theme-btn">Post a Job</a>
                </div><!-- end side-nav-button -->
            </div><!-- end side-menu-wrap -->
        </div>
    </header>
@elseif($navbar_target == '2')
    <header class="header-area">
        <div class="header-menu-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-full-width">
                            <div class="logo">
                                <a href="/">
                                    <img alt="logo" src="{{asset('assets/img/logo/logo_og_footer.png')}}" width="200px" class="">
                                </a>
                            </div>
                            <div class="main-menu-content">
                                
                            </div>
                            <div class="logo-right-content">
                                <ul class="author-access-list">
                                    <li>
                                        <a href="/connexion">{{ __('navigation.login_text') }}</a>
                                        <span class="or-text">|</span>
                                        <a href="/creer-un-compte">{{ __('navigation.signup_text') }}</a>
                                    </li>
                                    <li>
                                        <a href="employer-dashboard-post-job.html" class="theme-btn">
                                            <span class="fa fa-user"></span>
                                            {{ __('navigation.become_teacher_text') }}
                                        </a>
                                    </li>
                                </ul>
                                <div class="side-menu-open">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <div class="side-menu-wrap">
                <div class="side-nav-button">
                    <a href="login.html">Login</a>
                    <span class="or-text">or</span>
                    <a href="sign-up.html">Sign up</a>
                    <a href="employer-dashboard-post-job.html" class="theme-btn">Post a Job</a>
                </div>
            </div>
        </div>
    </header>
@elseif($navbar_target == '3')
    <header class="header-area header-area-2">
        <div class="header-menu-wrapper padding-right-40px padding-left-40px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-full-width">
                            <div class="logo">
                                <a href="/">
                                    <img alt="logo" src="{{asset('assets/img/logo/logo_wh_header.png')}}" width="200px" class="">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endif