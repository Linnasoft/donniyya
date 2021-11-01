<header class="header-area header-desktop">
    <div class="header-menu-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-full-width">
                        <div class="logo">
                            <a href="/">
                                <img alt="logo" src="{{asset('assets/img/logo/logo_og_footer.png')}}" width="200px" class="">
                            </a>
                        </div>
                        <div class="main-menu-content"></div>
                        <div class="logo-right-content">
                            <div class="header-action-button d-flex align-items-center">
                                <div class="user-action-wrap">
                                    <div class="notification-item">
                                        <div class="dropdown">
                                            <button class="notification-btn dropdown-toggle" type="button" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('assets/img/bg/95b059f5cfa0a9c453bd764e6ded8a6f1623937486.jpg') }}" alt="LOGO">
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="userDropdownMenu">
                                                <div class="mess-dropdown">
                                                    <div class="mess__title d-flex align-items-center">
                                                        <div class="image ">
                                                            <a href="#">
                                                                <img src="{{ asset('assets/img/bg/95b059f5cfa0a9c453bd764e6ded8a6f1623937486.jpg') }}" alt="Bluetech">
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="widget-title font-size-16">
                                                                <a href="#">
                                                                {{ Auth::user()->firstname.' '.Auth::user()->lastname }}
                                                                </a>
                                                            </h4>
                                                            <span class="email">{{ Auth::user()->email }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="mess__body">
                                                        <ul class="list-items">
                                                            <li class="mb-0">
                                                                <a href="{{ route('logged_profile') }}" class="d-block">
                                                                    <i class="far fa-user"></i> 
                                                                    {{ __('navigation.dashboard_navbar_item_1_text') }}
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="" class="d-block">
                                                                    <i class="far fa-envelope"></i> 
                                                                    {{ __('navigation.dashboard_navbar_item_2_text') }}
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="{{ route('notifications') }}" class="d-block">
                                                                    <i class="far fa-bell"></i> 
                                                                    {{ __('navigation.dashboard_navbar_item_3_text') }}
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <div class="section-block mt-2 mb-2"></div>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="" class="d-block">
                                                                    <i class="fas fa-book"></i> 
                                                                    {{ __('navigation.dashboard_navbar_item_4_text') }}
                                                                </a>
                                                            </li>
                                                            @if(Auth::user()->user_status == 'user_student')
                                                            <li class="mb-0">
                                                                <a href="" class="d-block">
                                                                    <i class="fas fa-heart"></i> 
                                                                    {{ __('navigation.dashboard_navbar_item_5_text') }}
                                                                </a>
                                                            </li>
                                                            @elseif(Auth::user()->user_status == 'user_teacher')
                                                            <li class="mb-0">
                                                                <a href="" class="d-block">
                                                                    <i class="fas fa-building"></i> 
                                                                    {{ __('navigation.dashboard_navbar_item_6_text') }}
                                                                </a>
                                                            </li>
                                                            @endif
                                                            <li class="mb-0">
                                                                <a href="" class="d-block">
                                                                    <i class="fas fa-cog"></i> 
                                                                    {{ __('navigation.dashboard_navbar_item_7_text') }}
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <div class="section-block mt-2 mb-2"></div>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="" class="d-block">
                                                                    <i class="fa fa-question-circle"></i> 
                                                                    {{ __('navigation.dashboard_navbar_item_8_text') }}
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="{{ route('deconnexion') }}" class="d-block">
                                                                    <i class="fa fa-power-off"></i> 
                                                                    {{ __('navigation.dashboard_navbar_item_9_text') }}
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-toggler d-flex align-items-center">
                                <div class="user-menu-open">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="user-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div>
        </div>
        <div class="user-panel-nav"><ul class="nav nav-tabs" id="nav-tab" role="tablist"></ul></div>
        <div class="user-panel-content">
            <div class="tab-content" id="tab-tabContent">
                <div class="tab-pane fade show active" id="account-home" role="tabpanel" aria-labelledby="account-tab">
                    <div class="user-action-wrap user-sidebar-panel">
                        <div class="mess-dropdown">
                            <div class="mess__title d-flex align-items-center">
                                <div class="image">
                                    <a href="{{ route('logged_profile') }}">
                                        <img src="{{ asset('assets/img/bg/95b059f5cfa0a9c453bd764e6ded8a6f1623937486.jpg') }}" alt="Bluetech, Inc">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="widget-title">
                                        <a href="{{ route('logged_profile') }}">{{ Auth::user()->firstname.' '.Auth::user()->lastname }}</a>
                                    </h4>
                                    <span class="email">{{ Auth::user()->email }}</span>
                                </div>
                            </div>
                            <div class="mess__body">
                                <a href="{{ route('logged_profile') }}" class="d-block">
                                    <i class="far fa-user"></i>
                                    {{ __('navigation.dashboard_navbar_item_1_text') }}
                                </a>
                                <a href="" class="d-block">
                                    <i class="far fa-envelope"></i> 
                                    {{ __('navigation.dashboard_navbar_item_2_text') }}
                                </a>
                                <a href="{{ route('notifications') }}" class="d-block">
                                    <i class="far fa-bell"></i> 
                                    {{ __('navigation.dashboard_navbar_item_3_text') }}
                                </a>
                                <div class="section-block mt-2 mb-2"></div>
                                <a href="" class="d-block">
                                    <i class="fas fa-book"></i> 
                                    {{ __('navigation.dashboard_navbar_item_4_text') }}
                                </a>
                                @if(Auth::user()->user_status == 'user_student')
                                    <a href="" class="d-block">
                                        <i class="fas fa-heart"></i> 
                                        {{ __('navigation.dashboard_navbar_item_5_text') }}
                                    </a>
                                @elseif(Auth::user()->user_status == 'user_teacher')
                                    <a href="" class="d-block">
                                        <i class="fas fa-building"></i> 
                                        {{ __('navigation.dashboard_navbar_item_6_text') }}
                                    </a>
                                @endif
                                <a href="" class="d-block">
                                    <i class="fas fa-cog"></i> 
                                    {{ __('navigation.dashboard_navbar_item_7_text') }}
                                </a>
                                <div class="section-block mt-2 mb-2"></div>
                                <a href="" class="d-block">
                                    <i class="fas fa-question-circle"></i> 
                                    {{ __('navigation.dashboard_navbar_item_8_text') }}
                                </a>
                                <a href="{{ route('deconnexion') }}" class="d-block">
                                    <i class="fa fa-power-off"></i> 
                                    {{ __('navigation.dashboard_navbar_item_9_text') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>