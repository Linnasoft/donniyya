@extends('member.layouts.app')

@section('content')

    <section class="padding-top-150px padding-bottom-80px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="mb-4">
                        <h4 class="font-weight-semi-bold color-text-dark-1">Notifications</h4>
                    </div>
                    <div class="">
                        <div class="bg-white border-bottom" id="">
                            <div class="d-flex flex-row">
                                <a href="" class="d-block pt-3 pb-3" style="width: 98%;">
                                    <div class="d-flex flex-row">
                                        <div class="notification-image">
                                            <div class="avatar avatar">
                                                <span class="avatar-title rounded-circle">AG</span>
                                            </div>
                                        </div>
                                        
                                        <div class="notification-body pl-3">
                                            <h6>Lorem ipsum dolor sit amet consectetur</h6>
                                            <p class="">10 octobre 2021</p>
                                        </div>
                                    </div>
                                </a>
                                
                                <div class="notification-footer ml-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x mt-18 btn_remove_notification" data-target="" id=""><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </div>
                                
                            </div>
                        </div>
                        <div class="bg-white border-bottom" id="">
                            <div class="d-flex flex-row">
                                <a href="" class="d-block pt-3 pb-3" style="width: 98%;">
                                    <div class="d-flex flex-row">
                                        <div class="notification-image">
                                            <div class="avatar avatar">
                                                <span class="avatar-title rounded-circle">AG</span>
                                            </div>
                                        </div>
                                        
                                        <div class="notification-body pl-3 pr-3">
                                            <h6>Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur</h6>
                                            <p class="">10 octobre 2021</p>
                                        </div>
                                    </div>
                                </a>
                                
                                <div class="notification-footer ml-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x btn_remove_notification" data-target="" id=""><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-block"></div>

@endsection
