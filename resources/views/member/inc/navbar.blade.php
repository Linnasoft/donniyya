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
                            @if(Auth::check())
                            <div class="logo-right-content ml-auto">
                                <ul class="author-access-list">
                                    <li class="dropdown user-profile-dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            
                                            <img alt="logo" src="{{asset('assets/img/bg/95b059f5cfa0a9c453bd764e6ded8a6f1623937486.jpg')}}" class=""> <!--
                                            <div class="avatar">
                                                <span class="avatar-title rounded-circle">AG</span>
                                            </div>-->
                                            <span class="dropdown-icon"><i class="fas fa-bars"></i></span>
                                        </a>
                                        <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                                            <div class="">
                                                <div class="dropdown-item">
                                                    <a class="dropdown-link" href="user_profile.html">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 
                                                        Mon profil
                                                    </a>
                                                </div>
                                                <div class="dropdown-item">
                                                    <a class="dropdown-link" href="user_profile.html">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart"><line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line></svg>
                                                        Mon tableau de bord
                                                    </a>
                                                </div>
                                                <div class="dropdown-item">
                                                    <a class="dropdown-link" href="apps_mailbox.html">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                        Messages</a>
                                                </div>
                                                <div class="dropdown-item">
                                                    <a class="dropdown-link" href="/notifications">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                                        Notifications</a>
                                                </div>
                                                <div class="dropdown-item">
                                                    <a class="dropdown-link" href="auth_lockscreen.html">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                                        Formations
                                                    </a>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                                <div class="dropdown-item">
                                                    <a class="dropdown-link" href="{{ route('deconnexion') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg>
                                                        Déconnexion</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="side-menu-open">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div>
                            </div>
                            @else
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
                            @endif
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
                            <div class="main-menu-content"></div>
                            @if(Auth::check())
                            <div class="logo-right-content">
                                <ul class="author-access-list">
                                    <li class="dropdown user-profile-dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            
                                            <img alt="logo" src="{{asset('assets/img/bg/95b059f5cfa0a9c453bd764e6ded8a6f1623937486.jpg')}}" class=""> <!--
                                            <div class="avatar">
                                                <span class="avatar-title rounded-circle">AG</span>
                                            </div>-->
                                            <span class="dropdown-icon"><i class="fas fa-bars"></i></span>
                                        </a>
                                        <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                                            <div class="">
                                                <div class="dropdown-item">
                                                    <a class="dropdown-link" href="user_profile.html">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 
                                                        Mon profil
                                                    </a>
                                                </div>
                                                <div class="dropdown-item">
                                                    <a class="dropdown-link" href="user_profile.html">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart"><line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line></svg>
                                                        Mon tableau de bord
                                                    </a>
                                                </div>
                                                <div class="dropdown-item">
                                                    <a class="dropdown-link" href="apps_mailbox.html">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                        Messages</a>
                                                </div>
                                                <div class="dropdown-item">
                                                    <a class="dropdown-link" href="/notifications">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                                        Notifications</a>
                                                </div>
                                                <div class="dropdown-item">
                                                    <a class="dropdown-link" href="auth_lockscreen.html">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                                        Formations
                                                    </a>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                                <div class="dropdown-item">
                                                    <a class="dropdown-link" href="{{ route('deconnexion') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg>
                                                        Déconnexion</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="side-menu-open">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div>
                            </div>
                            @else
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
                            @endif
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