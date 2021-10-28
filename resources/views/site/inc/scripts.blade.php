
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script> 

<script>var _token = $('meta[name="csrf-token"]').attr('content');</script>
<script src="{{ asset('assets/js/site/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/site/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/site/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/site/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/site/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/site/isotope-3.0.6.min.js') }}"></script>
<script src="{{ asset('assets/js/site/chosen.min.js') }}"></script>
<script src="{{ asset('assets/js/site/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/site/animated-headline.js') }}"></script>
<script src="{{ asset('assets/js/site/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/site/purecounter.js') }}"></script>
<script src="{{ asset('assets/js/site/pricing-script.js') }}"></script>
<script src="{{ asset('assets/js/site/progresscircle.js') }}"></script>
<script src="{{asset('plugins/notification/snackbar/snackbar.min.js')}}"></script>
<script src="{{ asset('assets/js/site/main.js') }}"></script>

<script src="{{asset('plugins/font-icons/fontawesome/web/js/all.js')}}"></script>

@switch($page_name)

      @case('login')
            <script>
                $(document).ready(function(){
                    if($('#success_notification').attr('data-status') != '')
                    {
                        Snackbar.show({
                            text: '<b>'+$('#success_notification').attr('data-status')+'</b>',
                            duration: 4000,
                            actionText: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>',
                            actionTextColor: '#fff',
                            backgroundColor: '#4aa81f',
                            pos: 'top-center'
                        });
                    }
                });
            </script>
      @break

@endswitch

<script>
    $(document).ready(function(){
        if($('#successfully_logged_notification').attr('data-status') != '')
        {
            Snackbar.show({
                text: '<b>'+$('#successfully_logged_notification').attr('data-status')+'</b>',
                duration: 8000,
                actionText: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>',
                actionTextColor: '#fff',
                backgroundColor: '#389108',
                pos: 'bottom-left'
            });
        }

        if($('#successfully_logged_out_notification').attr('data-status') != '')
        {
            Snackbar.show({
                text: '<b>'+$('#successfully_logged_out_notification').attr('data-status')+'</b>',
                duration: 5000,
                actionText: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>',
                actionTextColor: '#fff',
                backgroundColor: '#be2a2a',
                pos: 'bottom-left'
            });
        }
    });
</script>