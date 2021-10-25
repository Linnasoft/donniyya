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
                <a href="/">
                    <img alt="logo" src="{{asset('assets/img/logo/logo_wh_header.png')}}" class="side-nav-logo">
                </a>    
                <div class="humburger-menu-lines side-menu-close"></div>
            </div>
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <li>
                        <a href="/connexion">{{ __('navigation.login_text') }}</a>
                    </li>
                    <li>
                        <a href="/creer-un-compte">{{ __('navigation.signup_text') }}</a>
                    </li>
                    <li>
                        <a href="/connexion">{{ __('navigation.become_teacher_text') }}</a>
                    </li>
                </ul>
            </div>
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
                <a href="/">
                    <img alt="logo" src="{{asset('assets/img/logo/logo_wh_header.png')}}" class="side-nav-logo">
                </a>
                <div class="humburger-menu-lines side-menu-close"></div>
            </div>
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <li>
                        <a href="/connexion">{{ __('navigation.login_text') }}</a>
                    </li>
                    <li>
                        <a href="/creer-un-compte">{{ __('navigation.signup_text') }}</a>
                    </li>
                    <li>
                        <a href="/connexion">{{ __('navigation.become_teacher_text') }}</a>
                    </li>
                </ul>
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