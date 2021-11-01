
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

<script src="{{asset('plugins/jquery-date-range-picker/dist/jquery.daterangepicker.min.js')}}"></script>

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

      @case('search_courses')
            <script>
                $(document).ready(function(){

                    /*************************FILTER COURSE TYPE***********************/
                        $(document).on('click', '.filter-course-type', function(){

                            let current_title = $('#filter-course-type-btn').attr('data-target-title');
                            let count_filter = $('.filter-course-type:checked').length;
                            
                            if($(this).is(':checked'))
                            {
                                if(count_filter == 1)
                                {
                                    let name = $(this).attr('name');
                                    let title = $(this).attr('data-title');
                                    $('#filter-course-type-btn').text(title);
                                }
                                else
                                {
                                    let f_string = '';
                                    let max_elt_to_display = 2;
                                    let i=0;
                                    $('.filter-course-type:checked').each(function(index){

                                        if(i < max_elt_to_display)
                                        {
                                            let name = $(this).attr('name'); 
                                            let title = $(this).attr('data-title');
                                                                        
                                            f_string += title;
                                            if(index !== (count_filter - 1))
                                            {
                                                f_string += ', ';
                                            }

                                            i++;
                                        }

                                    });
                                    f_string += ((count_filter > i)? 
                                             '+'+(count_filter - max_elt_to_display): 
                                             '');
                                    $('#filter-course-type-btn').text(f_string);
                                }

                                $('#filter-course-type-btn').addClass('active');
                            }
                            else
                            {
                                if(count_filter == 0)
                                {
                                    $('#filter-course-type-btn').text(current_title);
                                    $('#filter-course-type-btn').removeClass('active');
                                }
                                else
                                {
                                    let f_string = '';
                                    let max_elt_to_display = 2;
                                    let i=0;
                                    $('.filter-course-type:checked').each(function(index){

                                        if(i < max_elt_to_display)
                                        {
                                            let name = $(this).attr('name');   
                                            let title = $(this).attr('data-title');

                                            f_string += title;
                                            if(index !== (count_filter - 1))
                                            {
                                                f_string += ', ';
                                            }

                                            i++;
                                        }
                                        else
                                        {
                                            f_string += '+'+(count_filter - max_elt_to_display);
                                        }

                                    });
                                    $('#filter-course-type-btn').text(f_string);
                                }
                            }

                        });
                    /*************************FILTER COURSE TYPE***********************/
                    
                    /*************************FILTER COURSE PRICE***********************/
                        $(document).on('keyup', '.filter-course-price', function(){
                            
                            let id = $(this).attr('id');
                            let current_title = $('#filter-course-price-btn').attr('data-target-title');
                            let max = '';
                            let min = '';
                            
                            $('.filter-course-price').each(function(){
                                if($(this).attr('id') == 'min')
                                {
                                    min = $(this).val();
                                }
                                else if($(this).attr('id') == 'max')
                                {
                                    max = $(this).val();
                                }
                            });
                            
                            if(max != '' && min != '')
                            {
                                if(max == min)
                                {
                                    $('#filter-course-price-btn').text(max);
                                }
                                else
                                {
                                    $('#filter-course-price-btn').text(Math.min(max,min)+' - '+Math.max(max,min));
                                }
                                $('#filter-course-price-btn').addClass('active');
                            }
                            else if(min != '')
                            {
                                $('#filter-course-price-btn').text(min+' et plus');
                                $('#filter-course-price-btn').addClass('active');
                            }
                            else if(max != '')
                            {
                                $('#filter-course-price-btn').text(max+' et moins');
                                $('#filter-course-price-btn').addClass('active');
                            }
                            else
                            {
                                $('#filter-course-price-btn').text(current_title);
                                $('#filter-course-price-btn').removeClass('active');
                            }
                            
                        });
                    /*************************FILTER COURSE PRICE***********************/

                    $(document).on('click', '.btn-clear-filter', function(){
                        let target = $(this).attr('data-target');

                        alert(target);
                    });
                });
            </script>
      @break

@endswitch

<script>

    /**************************************FE FUNCTIONS******************************************/
        function return_number(number)
        {
            return ((isNaN(number) || parseFloat(number) < 0)? 0: parseFloat(number));
        }
    /**************************************FE FUNCTIONS******************************************/

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

        $(document).on('click', '.stop-propagation', function(e){
            e.stopPropagation();
        });

        $('.daterangepicker').dateRangePicker({
            autoClose: false,
            format: 'YYYY-MM-DD',
            language: 'en',
            startDate: false,
            endDate: false,
            minDays: 0,
            maxDays: 0,
            inline:true,
            container:'.daterangepicker-content',
            alwaysOpen:true,
            stickyMonths: false,
            applyBtnClass: '',
            monthSelect: false,
            yearSelect: false
        });

    });
</script>