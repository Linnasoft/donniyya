@extends('member.layouts.app')

@section('content')

    <header class="header-area header-desktop">
        <div class="header-menu-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-full-width">
                            <div class="logo">
                                <a href="index.html">
                                    <img alt="logo" src="{{asset('assets/img/logo/logo_og_footer.png')}}" width="200px" class="">
                                </a>
                            </div>
                            <div class="logo-right-content">
                                <div class="header-action-button d-flex align-items-center">
                                    <div class="notification-wrap d-flex align-items-center">
                                        <div class="notification-item mr-3">
                                            <div class="dropdown">
                                                <button class="notification-btn dropdown-toggle" type="button" id="notificationDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-bell"></i>
                                                    <span class="quantity">5</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="notificationDropdownMenu">
                                                    <div class="mess-dropdown">
                                                        <div class="mess__title">
                                                            <h4 class="widget-title d-flex align-items-center justify-content-between">Notifications<a href="#" class="font-size-12 color-text-3">Mark all as read</a></h4>
                                                            <p class="font-size-12 font-weight-medium">You have 5 Notifications</p>
                                                        </div><!-- end mess__title -->
                                                        <div class="mess__body">
                                                            <a href="#" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="icon-element">
                                                                        <i class="fa fa-bolt"></i>
                                                                    </div>
                                                                    <div class="content">
                                                                        <p class="text">Your Resume Updated!</p>
                                                                        <span class="time">5 hours ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                            <a href="#" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="icon-element">
                                                                        <i class="fa fa-lock"></i>
                                                                    </div>
                                                                    <div class="content">
                                                                        <p class="text">You changed password</p>
                                                                        <span class="time">2 day ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                            <a href="#" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="icon-element">
                                                                        <i class="fa fa-check-circle"></i>
                                                                    </div>
                                                                    <div class="content">
                                                                        <p class="text">You applied for a job <span class="color-text">Front-end Developer</span></p>
                                                                        <span class="time">1 day ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                            <a href="#" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="icon-element">
                                                                        <i class="fa fa-user"></i>
                                                                    </div>
                                                                    <div class="content">
                                                                        <p class="text">Your account has been created successfully</p>
                                                                        <span class="time">1 minute ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                            <a href="#" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="icon-element">
                                                                        <i class="fa fa-download"></i>
                                                                    </div>
                                                                    <div class="content">
                                                                        <p class="text">Someone downloaded resume</p>
                                                                        <span class="time">Yesterday</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                        </div><!-- end mess__body -->
                                                        <div class="mess__item border-bottom-0 text-center">
                                                            <a href="#" class="theme-btn w-100">View All Notifications</a>
                                                        </div><!-- end mess__item -->
                                                    </div><!-- end mess-dropdown -->
                                                </div><!-- end dropdown-menu -->
                                            </div><!-- end dropdown -->
                                        </div>
                                        <div class="notification-item mr-3">
                                            <div class="dropdown">
                                                <button class="notification-btn dropdown-toggle" type="button" id="messageDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-envelope"></i>
                                                    <span class="quantity">5</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="messageDropdownMenu">
                                                    <div class="mess-dropdown">
                                                        <div class="mess__title">
                                                            <h4 class="widget-title d-flex align-items-center justify-content-between">Message <a href="#" class="font-size-12 color-text-3">Mark all as read</a></h4>
                                                            <p class="font-size-12 font-weight-medium">You have 5 new messages</p>
                                                        </div><!-- end mess__title -->
                                                        <div class="mess__body">
                                                            <a href="employer-dashboard-message.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="avatar dot-status">
                                                                        <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h4 class="widget-title">Michelle Moreno</h4>
                                                                        <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                        <span class="time">5 min ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                            <a href="employer-dashboard-message.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="avatar dot-status online-status">
                                                                        <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h4 class="widget-title">Alex Smith</h4>
                                                                        <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                        <span class="time">2 days ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                            <a href="employer-dashboard-message.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="avatar dot-status">
                                                                        <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h4 class="widget-title">Michelle Moreno</h4>
                                                                        <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                        <span class="time">5 min ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                            <a href="employer-dashboard-message.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="avatar dot-status online-status">
                                                                        <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h4 class="widget-title">Alex Smith</h4>
                                                                        <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                        <span class="time">2 days ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                            <a href="employer-dashboard-message.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="avatar dot-status">
                                                                        <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h4 class="widget-title">Alex Smith</h4>
                                                                        <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                        <span class="time">2 days ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                        </div><!-- end mess__body -->
                                                        <div class="mess__item border-bottom-0 text-center">
                                                            <a href="#" class="theme-btn w-100">View All Messages</a>
                                                        </div><!-- end mess__item -->
                                                    </div><!-- end mess-dropdown -->
                                                </div><!-- end dropdown-menu -->
                                            </div><!-- end dropdown -->
                                        </div>
                                    </div>
                                    <div class="user-action-wrap">
                                        <div class="notification-item">
                                            <div class="dropdown">
                                                <button class="notification-btn dot-status online-status dropdown-toggle" type="button" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('assets/img/logo/logo1.png') }}" alt="Logo">
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="userDropdownMenu">
                                                    <div class="mess-dropdown">
                                                        <div class="mess__title d-flex align-items-center">
                                                            <div class="image dot-status online-status">
                                                                <a href="#">
                                                                    <img src="{{ asset('assets/img/logo/logo1.png') }}" alt="Logo">
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="widget-title font-size-16">
                                                                    <a href="#">Bluetech, Inc</a>
                                                                </h4>
                                                                <span class="email">bluetechinc@example.com</span>
                                                            </div>
                                                        </div><!-- end mess__title -->
                                                        <div class="mess__body">
                                                            <ul class="list-items">
                                                                <li class="mb-0">
                                                                    <a href="employer-dashboard.html" class="d-block">
                                                                        <i class="fa fa-user"></i> Account
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="employer-dashboard-bookmark.html" class="d-block">
                                                                        <i class="fa fa-bookmark"></i> Bookmarks
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="employer-dashboard.html" class="d-block">
                                                                        <i class="fa fa-plus"></i> Post a Job
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="employer-dashboard.html" class="d-block">
                                                                        <i class="fa fa-question"></i> Help
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="employer-dashboard.html" class="d-block">
                                                                        <i class="fa fa-gear"></i> Settings
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <div class="section-block mt-2 mb-2"></div>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="index.html" class="d-block">
                                                                        <i class="fa fa-power-off"></i> Logout
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- end mess__body -->
                                                    </div><!-- end mess-dropdown -->
                                                </div><!-- end dropdown-menu -->
                                            </div><!-- end dropdown -->
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-toggler d-flex align-items-center">
                                    <div class="side-menu-open">
                                        <span class="menu__bar"></span>
                                        <span class="menu__bar"></span>
                                        <span class="menu__bar"></span>
                                    </div><!-- end side-menu-open -->
                                    <div class="user-menu-open">
                                        <i class="fa fa-user"></i>
                                    </div><!-- end user-menu-open -->
                                </div>
                            </div><!-- end logo-right-content -->
                        </div><!-- end menu-full-width -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-wrapper -->
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
                            <li><a href="index4.html">Home 4</a></li>
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
                            <li><a href="all-category.html">All Category</a></li>
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
            </div><!-- end side-menu-wrap -->
        </div><!-- end side-nav-container -->
        <div class="user-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <div class="user-panel-nav">
                <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="notification-tab" data-toggle="tab" href="#notification-home" role="tab" aria-controls="notification-home" aria-selected="true">
                            Notifications
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="message-tab" data-toggle="tab" href="#message-home" role="tab" aria-controls="message-home" aria-selected="false">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="account-tab" data-toggle="tab" href="#account-home" role="tab" aria-controls="account-home" aria-selected="false">Account</a>
                    </li>
                </ul>
            </div>
            <div class="user-panel-content">
                <div class="tab-content" id="tab-tabContent">
                    <div class="tab-pane fade show active" id="notification-home" role="tabpanel" aria-labelledby="notification-tab">
                        <div class="user-sidebar-item">
                            <div class="mess-dropdown">
                                <div class="mess__body">
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="icon-element">
                                                <i class="fa fa-bolt"></i>
                                            </div>
                                            <div class="content">
                                                <p class="text">Your Resume Updated!</p>
                                                <span class="time">5 hours ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="icon-element">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                            <div class="content">
                                                <p class="text">You changed password</p>
                                                <span class="time">2 day ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="icon-element">
                                                <i class="fa fa-check-circle"></i>
                                            </div>
                                            <div class="content">
                                                <p class="text">You applied for a job <span class="color-text">Front-end Developer</span></p>
                                                <span class="time">1 day ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="icon-element">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div class="content">
                                                <p class="text">Your account has been created successfully</p>
                                                <span class="time">1 minute ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="icon-element">
                                                <i class="fa fa-download"></i>
                                            </div>
                                            <div class="content">
                                                <p class="text">Someone downloaded resume</p>
                                                <span class="time">Yesterday</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="icon-element">
                                                <i class="fa fa-check-circle"></i>
                                            </div>
                                            <div class="content">
                                                <p class="text">Application has been approved</p>
                                                <span class="time">1 hour ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="icon-element">
                                                <i class="fa fa-flag"></i>
                                            </div>
                                            <div class="content">
                                                <p class="text">New report has been received</p>
                                                <span class="time">10 hours ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="icon-element">
                                                <i class="fa fa-bell-o"></i>
                                            </div>
                                            <div class="content">
                                                <p class="text">New user feedback received</p>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                </div><!-- end mess__body -->
                            </div><!-- end mess-dropdown -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="message-home" role="tabpanel" aria-labelledby="message-tab">
                        <div class="user-sidebar-item">
                            <div class="mess-dropdown">
                                <div class="mess__body">
                                    <a href="employer-dashboard-message.html" class="d-block">
                                        <div class="mess__item">
                                            <div class="avatar dot-status">
                                                <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h4 class="widget-title">Michelle Moreno</h4>
                                                <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                <span class="time">5 min ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="employer-dashboard-message.html" class="d-block">
                                        <div class="mess__item">
                                            <div class="avatar dot-status online-status">
                                                <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h4 class="widget-title">Alex Smith</h4>
                                                <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                <span class="time">2 days ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="employer-dashboard-message.html" class="d-block">
                                        <div class="mess__item">
                                            <div class="avatar dot-status">
                                                <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h4 class="widget-title">Michelle Moreno</h4>
                                                <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                <span class="time">5 min ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="employer-dashboard-message.html" class="d-block">
                                        <div class="mess__item">
                                            <div class="avatar dot-status online-status">
                                                <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h4 class="widget-title">Alex Smith</h4>
                                                <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                <span class="time">2 days ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="employer-dashboard-message.html" class="d-block">
                                        <div class="mess__item">
                                            <div class="avatar dot-status">
                                                <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h4 class="widget-title">Alex Smith</h4>
                                                <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                <span class="time">2 days ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="employer-dashboard-message.html" class="d-block">
                                        <div class="mess__item">
                                            <div class="avatar dot-status">
                                                <img src="images/small-team6.jpg" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h4 class="widget-title">Michelle Moreno</h4>
                                                <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                <span class="time">5 min ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="employer-dashboard-message.html" class="d-block">
                                        <div class="mess__item">
                                            <div class="avatar dot-status online-status">
                                                <img src="images/small-team6.jpg" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h4 class="widget-title">Kamran Adi</h4>
                                                <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                </div><!-- end mess__body -->
                            </div><!-- end mess-dropdown -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-home" role="tabpanel" aria-labelledby="account-tab">
                        <div class="user-action-wrap user-sidebar-panel">
                            <div class="mess-dropdown">
                                <div class="mess__title d-flex align-items-center">
                                    <div class="image dot-status online-status">
                                        <a href="#">
                                            <img src="images/company-logo.jpg" alt="Bluetech, Inc">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="widget-title">
                                            <a href="#">Bluetech, Inc</a>
                                        </h4>
                                        <span class="email">bluetechinc@example.com</span>
                                    </div>
                                </div><!-- end mess__title -->
                                <div class="mess__body">
                                    <a href="employer-dashboard.html" class="d-block">
                                        <i class="fa fa-user"></i> Account
                                    </a>
                                    <a href="employer-dashboard-bookmark.html" class="d-block">
                                        <i class="fa fa-bookmark"></i> Bookmarks
                                    </a>
                                    <a href="employer-dashboard.html" class="d-block">
                                        <i class="fa fa-plus"></i> Post a Job
                                    </a>
                                    <a href="employer-dashboard.html" class="d-block">
                                        <i class="fa fa-question"></i> Help
                                    </a>
                                    <a href="employer-dashboard.html" class="d-block">
                                        <i class="fa fa-gear"></i> Settings
                                    </a>
                                    <div class="section-block mt-2 mb-2"></div>
                                    <a href="index.html" class="d-block">
                                        <i class="fa fa-power-off"></i> Logout
                                    </a>
                                </div><!-- end mess__body -->
                            </div><!-- end mess-dropdown -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end user-nav-container -->
    </header>

    <section class="dashboard-area">
        <div class="dashboard-sidebar">
            <div class="dashboard-nav-trigger">
            <div class="dashboard-nav-trigger-btn">
                <i class="fa fa-bars"></i> Dashboard Navigation
            </div>
            </div>
            <div class="dashboard-nav-container">
                <div class="humburger-menu">
                    <div class="humburger-menu-lines side-menu-close"></div>
                </div>
                <div class="side-menu-wrap">
                    <ul class="side-menu-ul">
                        <li class="page-active"><a href="employer-dashboard.html"><i class="fa fa-dashboard icon-element"></i> Dashboard</a></li>
                        <li><a href="employer-dashboard-message.html"><i class="fa fa-envelope icon-element"></i> Messages <span class="badge badge-info radius-rounded p-1">3</span></a></li>
                        <li><a href="employer-dashboard-bookmark.html"><i class="fa fa-bookmark icon-element"></i> Bookmarks</a></li>
                        <li><a href="employer-transactions.html"><i class="fa fa-line-chart icon-element"></i>Transactions</a></li>
                        <li><a href="employer-job-alert.html"><i class="fa fa-bell-o icon-element"></i>Job Alerts</a></li>
                        <li>
                            <a href="#"><i class="fa fa-gear icon-element"></i> Settings <span class="fa fa-caret-down btn-toggle"></span></a>
                            <ul class="dropdown-menu-item">
                                <li><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>
                                <li><a href="employer-dashboard-change-password.html">Change Password</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-briefcase icon-element"></i> Jobs <span class="fa fa-caret-down btn-toggle"></span></a>
                            <ul class="dropdown-menu-item">
                                <li><a href="employer-dashboard-manage-job.html">Manage Jobs</a></li>
                                <li><a href="employer-dashboard-manage-candidate.html">Manage Candidates</a></li>
                                <li><a href="employer-dashboard-post-job.html">Post New Job</a></li>
                            </ul>
                        </li>
                        <li><div class="section-block margin-top-30px mb-3"></div></li>
                        <li><a href="employer-details.html"><i class="fa fa-user icon-element"></i> View Profile</a></li>
                        <li><a href="index.html"><i class="fa fa-power-off icon-element"></i> Logout</a></li>
                    </ul>
                </div><!-- end side-menu-wrap -->
            </div>
        </div><!-- end dashboard-sidebar -->
        <div class="dashboard-content-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                            <div class="section-heading">
                                <h2 class="sec__title line-height-45">Welcome, Bluetech!</h2>
                            </div><!-- end section-heading -->
                            <ul class="list-items d-flex align-items-center">
                                <li class="active__list-item"><a href="index.html">Home</a></li>
                                <li class="active__list-item">Employers</li>
                                <li>Dashboard</li>
                            </ul>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row mt-5">
                    <div class="col-lg-3 column-lg-half responsive-column">
                        <div class="overview-item">
                            <div class="icon-box bg-1 mb-0 d-flex align-items-center">
                                <div class="icon-element flex-shrink-0">
                                    <i class="fa fa-cloud-upload"></i>
                                </div><!-- end icon-element-->
                                <div class="info-content">
                                    <span class="info__count">11</span>
                                    <h4 class="info__title font-size-16 mt-2">Total Job Posted</h4>
                                </div><!-- end info-content -->
                            </div>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 column-lg-half responsive-column">
                        <div class="overview-item">
                            <div class="icon-box bg-2 mb-0 d-flex align-items-center">
                                <div class="icon-element flex-shrink-0">
                                    <i class="fa fa-file-text-o"></i>
                                </div><!-- end icon-element-->
                                <div class="info-content">
                                    <span class="info__count">121</span>
                                    <h4 class="info__title font-size-16 mt-2">Application Submit</h4>
                                </div><!-- end info-content -->
                            </div>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 column-lg-half responsive-column">
                        <div class="overview-item">
                            <div class="icon-box bg-3 mb-0 d-flex align-items-center">
                                <div class="icon-element flex-shrink-0">
                                    <i class="fa fa-eye"></i>
                                </div><!-- end icon-element-->
                                <div class="info-content">
                                    <span class="info__count">504</span>
                                    <h4 class="info__title font-size-16 mt-2">This Month Views</h4>
                                </div><!-- end info-content -->
                            </div>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 column-lg-half responsive-column">
                        <div class="overview-item">
                            <div class="icon-box bg-4 mb-0 d-flex align-items-center">
                                <div class="icon-element flex-shrink-0">
                                    <i class="fa fa-phone"></i>
                                </div><!-- end icon-element-->
                                <div class="info-content">
                                    <span class="info__count">10</span>
                                    <h4 class="info__title font-size-16 mt-2">Call for interview</h4>
                                </div><!-- end info-content -->
                            </div>
                        </div>
                    </div><!-- end col-lg-3 -->
                </div><!-- end row -->
                <div class="row mt-2">
                    <div class="col-lg-7 column-lg-full">
                        <div class="chart-box chart-item">
                            <div class="chart-headline d-flex align-items-center justify-content-between mb-4">
                                <h3 class="widget-title font-size-16 pb-0"><i class="font-size-20 fa fa-bar-chart mr-1"></i>Profile Views</h3>
                                <div class="user-chosen-select-container">
                                    <select class="user-chosen-select">
                                        <option value="this-week">This Week</option>
                                        <option value="this-month">This Month</option>
                                        <option value="last-months">Last 6 Months</option>
                                        <option value="this-year">This Year</option>
                                    </select>
                                </div><!-- end short-option -->
                            </div>
                            <canvas id="line-chart"></canvas>
                            <div class="chart-legend mt-4">
                                <ul>
                                    <li><span class="legend__item legend__one"></span>Green</li>
                                </ul>
                            </div>
                        </div><!-- end chart-box -->
                    </div><!-- end col-lg-7 -->
                    <div class="col-lg-5 column-lg-full">
                        <div class="dashboard-shared">
                            <div class="mess-dropdown">
                                <div class="mess__title">
                                    <img src="images/bg-title-2.jpg" alt="" class="img-fluid">
                                    <div class="mess__title-inner p-4">
                                        <h4 class="widget-title font-size-16 d-flex align-items-center">
                                            <i class="font-size-20 fa fa-comment mr-1"></i> Messages
                                            <a href="#" class="text-white ml-auto font-size-12">Mark all as read</a>
                                        </h4>
                                    </div>
                                </div><!-- end mess__title -->
                                <div class="mess__body" style="">
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="avatar dot-status">
                                                <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h4 class="widget-title">Michelle Moreno</h4>
                                                <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                <span class="time">5 min ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="avatar dot-status online-status">
                                                <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h4 class="widget-title">Alex Smith</h4>
                                                <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                <span class="time">2 days ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="avatar dot-status">
                                                <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h4 class="widget-title">Michelle Moreno</h4>
                                                <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                <span class="time">5 min ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="avatar dot-status online-status">
                                                <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h4 class="widget-title">Alex Smith</h4>
                                                <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                <span class="time">2 days ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="avatar dot-status">
                                                <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                            </div>
                                            <div class="content">
                                                <h4 class="widget-title">Alex Smith</h4>
                                                <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                <span class="time">2 days ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                </div><!-- end mess__body -->
                                <div class="mess__item border-bottom-0 text-center">
                                    <button type="button" class="theme-btn border-0 w-100">Load More</button>
                                </div><!-- end mess__item -->
                            </div>
                        </div><!-- end dashboard-shared -->
                    </div><!-- end col-lg-5 -->
                </div><!-- end row -->
                <div class="row margin-top-30px">
                    <div class="col-lg-6">
                        <div class="chart-box">
                            <div class="chart-headline margin-bottom-40px">
                                <h3 class="widget-title font-size-16 pb-0"><i class="font-size-20 fa fa-chart-line mr-1"></i>Static Analytics</h3>
                            </div>
                            <canvas id="doughnut-chart"></canvas>
                            <div class="chart-legend margin-top-40px">
                                <ul>
                                    <li><span class="legend__item"></span>Applied Jobs</li>
                                    <li><span class="legend__item legend__bg-1"></span>Posted Jobs</li>
                                    <li><span class="legend__item legend__bg-2"></span>Active Bids</li>
                                </ul>
                            </div>
                        </div><!-- end chart-box -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="dashboard-shared note-dashboard">
                            <div class="mess-dropdown">
                                <div class="mess__title">
                                    <img src="images/bg-title-1.jpg" alt="" class="img-fluid">
                                    <div class="mess__title-inner padding-top-30px pr-4 pl-4 pb-4">
                                        <h4 class="widget-title font-size-16 pb-0">
                                            <i class="font-size-20 fa fa-file-text-o mr-1"></i> Notes
                                        </h4>
                                    </div>
                                </div><!-- end mess__title -->
                                <div class="timeline-body">
                                    <div class="mess__body">
                                        <div class="mess__item">
                                            <div class="note-badge-wrap d-flex align-items-center justify-content-between">
                                                <span class="badge badge-primary note-badge note-badge-bg-2 p-2">High Priority</span>
                                                <ul class="info-list">
                                                    <li class="d-inline-block"><a href="#" ><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="content mt-2">
                                                <p class="line-height-24 font-size-13">Medecins du Monde Jane Addams reduce child
                                                    mortality challenges Ford Foundation.Diversification shifting
                                                    landscape advocate pathway to a better life rights international</p>
                                            </div>
                                        </div><!-- end mess__item -->
                                        <div class="mess__item">
                                            <div class="note-badge-wrap d-flex align-items-center justify-content-between">
                                                <span class="badge badge-success note-badge note-badge-bg-2 p-2">Low Priority</span>
                                                <ul class="info-list">
                                                    <li class="d-inline-block"><a href="#" ><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="content mt-2">
                                                <p class="line-height-24 font-size-13">Medecins du Monde Jane Addams reduce child
                                                    mortality challenges Ford Foundation.Diversification shifting
                                                    landscape advocate pathway to a better life rights international</p>
                                            </div>
                                        </div><!-- end mess__item -->
                                        <div class="mess__item">
                                            <div class="note-badge-wrap d-flex align-items-center justify-content-between">
                                                <span class="badge badge-warning text-white note-badge note-badge-bg-2 p-2">Medium Priority</span>
                                                <ul class="info-list">
                                                    <li class="d-inline-block"><a href="#" ><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                    <li class="d-inline-block"><a href="#"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="content mt-2">
                                                <p class="line-height-24 font-size-13">Medecins du Monde Jane Addams reduce child
                                                    mortality challenges Ford Foundation.Diversification shifting
                                                    landscape advocate pathway to a better life rights international</p>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </div><!-- end mess__body -->
                                </div>
                                <div class="mess__item border-bottom-0 text-center">
                                    <button type="button" class="theme-btn border-0 w-100">Add Note</button>
                                </div><!-- end mess__item -->
                            </div><!-- end mess-dropdown -->
                        </div><!-- end dashboard-shared -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="dashboard-shared margin-top-30px">
                            <div class="mess-dropdown">
                                <div class="mess__title">
                                    <img src="images/bg-title-2.jpg" alt="" class="img-fluid">
                                    <div class="mess__title-inner p-4">
                                        <h4 class="widget-title font-size-16 d-flex align-items-center">
                                            <i class="font-size-20 fa fa-bell mr-1"></i> Notifications
                                            <a href="#" class="text-white ml-auto font-size-12">Mark all as read</a>
                                        </h4>
                                        <p class="mt-1 text-white">You have 5 Notifications</p>
                                    </div>
                                </div><!-- end mess__title -->
                                <div class="mess__body" style="">
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="icon-element">
                                                <i class="fa fa-bolt"></i>
                                            </div>
                                            <div class="content">
                                                <p class="text">Your Resume Updated!</p>
                                                <span class="time">5 hours ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="icon-element">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                            <div class="content">
                                                <p class="text">You changed password</p>
                                                <span class="time">2 day ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="icon-element">
                                                <i class="fa fa-check-circle"></i>
                                            </div>
                                            <div class="content">
                                                <p class="text">You applied for a job <span class="color-text">Front-end Developer</span></p>
                                                <span class="time">1 day ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="icon-element">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div class="content">
                                                <p class="text">Your account has been created successfully</p>
                                                <span class="time">1 minute ago</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                    <a href="#" class="d-block">
                                        <div class="mess__item">
                                            <div class="icon-element">
                                                <i class="fa fa-download"></i>
                                            </div>
                                            <div class="content">
                                                <p class="text">Someone downloaded resume</p>
                                                <span class="time">Yesterday</span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </a>
                                </div><!-- end mess__body -->
                                <div class="mess__item border-bottom-0 text-center">
                                    <a href="#" class="theme-btn w-100">View All Notifications</a>
                                </div><!-- end mess__item -->
                            </div><!-- end mess-dropdown -->
                        </div><!-- end dashboard-shared -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="dashboard-shared timeline-dashboard margin-top-30px">
                            <div class="mess-dropdown">
                                <div class="mess__title">
                                    <img src="images/bg-title-1.jpg" alt="" class="img-fluid">
                                    <div class="mess__title-inner p-4">
                                        <h4 class="widget-title font-size-16">
                                            <i class="font-size-20 fa fa-bolt mr-1"></i> Latest Activity
                                        </h4>
                                        <p class="mt-1 text-white">You have 5 Tasks</p>
                                    </div>
                                </div><!-- end mess__title -->
                                <div class="timeline-body">
                                    <div class="mess__body">
                                        <div class="mess__item">
                                            <div class="ring-icon ring-bg-1"></div>
                                            <div class="content">
                                                <p class="color-text-2">Development & Update</p>
                                                <span class="time color-text-3">Lorem ipsum dolor sit amet, <a href="#" class="color-text">More</a></span>
                                            </div>
                                        </div><!-- end mess__item -->
                                        <div class="mess__item">
                                            <div class="ring-icon ring-bg-2"></div>
                                            <div class="content">
                                                <p class="color-text-2">Miscellaneous</p>
                                                <span class="time color-text-3">Lorem ipsum dolor sit amet, <a href="#" class="color-text">More</a></span>
                                            </div>
                                        </div><!-- end mess__item -->
                                        <div class="mess__item">
                                            <div class="ring-icon ring-bg-3"></div>
                                            <div class="content">
                                                <p class="color-text-2">Showcases</p>
                                                <span class="time color-text-3">Lorem ipsum dolor sit amet, <a href="#" class="color-text">More</a></span>
                                            </div>
                                        </div><!-- end mess__item -->
                                        <div class="mess__item">
                                            <div class="ring-icon ring-bg-4"></div>
                                            <div class="content">
                                                <p class="color-text-2">Miscellaneous</p>
                                                <span class="time color-text-3">Lorem ipsum dolor sit amet, <a href="#" class="color-text">More</a></span>
                                            </div>
                                        </div><!-- end mess__item -->
                                        <div class="mess__item">
                                            <div class="ring-icon ring-bg-5"></div>
                                            <div class="content">
                                                <p class="color-text-2">Your Manager Posted.</p>
                                                <span class="time color-text-3">Lorem ipsum dolor sit amet, <a href="#" class="color-text">More</a></span>
                                            </div>
                                        </div><!-- end mess__item -->
                                    </div><!-- end mess__body -->
                                </div>
                                <div class="mess__item border-bottom-0 text-center">
                                    <button type="button" class="theme-btn border-0 w-100">Load More</button>
                                </div><!-- end mess__item -->
                            </div><!-- end mess-dropdown -->
                        </div><!-- end dashboard-shared -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copy-right margin-top-40px padding-top-20px padding-bottom-20px">
                            <p class="copy__desc">
                                Copyright &copy;2020 Zobstar Inc. Made with
                                <span class="fa fa-heart-o"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                            </p>
                            <ul class="list-items">
                                <li><a href="#">Terms of Use,</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div><!-- end copy-right -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div>
    </section>

@endsection
