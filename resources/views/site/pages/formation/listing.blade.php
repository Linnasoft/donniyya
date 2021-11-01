@extends('layouts.site')

@section('content')

    <section class="hero-wrapper-1" style="background-image:url('{{ asset('assets/img/bg/index-2.jpg') }}')">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content-wrapper position-relative">
                        <div class="hero-form-wrap position-absolute shadow">
                            <div class="main-search-input">
                                <div class="main-search-input-item">
                                    <div class="contact-form-action">
                                        <form action="#">
                                            <div class="form-group mb-0">
                                                <span class="fa fa-search form-icon"></span>
                                                <input class="form-control" type="text" placeholder="{{ __('index.search_keywords_placeholder') }}" value="">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="main-search-input-item user-chosen-select-container">
                                    <select class="user-chosen-select">
                                        <option value="1">{{ __('index.search_categories_placeholder') }}</option>
                                        <optgroup label="Cat 1">
                                            <option value="2">Accountancy</option>
                                            <option value="3">Banking</option>
                                        </optgroup>
                                        <optgroup label="Cat 2">
                                            <option value="4">Digital & Creative</option>
                                            <option value="5">Charity & Voluntary</option>
                                            <option value="6">Delivery Driver Jobs</option>
                                            <option value="7">Leisure & Tourism jobs</option>
                                            <option value="8">Graphic Designer Jobs</option>
                                            <option value="9">IT Contractor</option>
                                            <option value="10">Graduate</option>
                                        </optgroup>
                                        <option value="11">Manufacturing jobs</option>
                                        <option value="12">Marketing & PR</option>
                                        <option value="13">Media</option>
                                        <option value="14">Medical jobs</option>
                                        <option value="15">Media, Digital & Creative jobs</option>
                                        <option value="16">Motoring & Automotive</option>
                                        <option value="17">Public Sector</option>
                                        <option value="18">Retail</option>
                                        <option value="19">Sales & Marketing</option>
                                        <option value="20">Software Engineer Jobs</option>
                                        <option value="21">Pharmacist Jobs</option>
                                    </select>
                                </div>
                                <div class="main-search-input-item user-chosen-select-container">
                                    <select class="user-chosen-select">
                                        <option value>{{ __('index.search_localisation_placeholder') }}</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua &amp; Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AC">Ascension Island</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BA">Bosnia &amp; Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="VG">British Virgin Islands</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="BQ">Caribbean Netherlands</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo - Brazzaville</option>
                                        <option value="CD">Congo - Kinshasa</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Côte d’Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CW">Curaçao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czechia</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="SZ">Eswatini</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong SAR China</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="XK">Kosovo</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao SAR China</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar (Burma)</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="MK">North Macedonia</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PS">Palestinian Territories</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn Islands</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Réunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">São Tomé &amp; Príncipe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia &amp; South Sandwich Islands</option>
                                        <option value="KR">South Korea</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="BL">St. Barthélemy</option>
                                        <option value="SH">St. Helena</option>
                                        <option value="KN">St. Kitts &amp; Nevis</option>
                                        <option value="LC">St. Lucia</option>
                                        <option value="MF">St. Martin</option>
                                        <option value="PM">St. Pierre &amp; Miquelon</option>
                                        <option value="VC">St. Vincent &amp; Grenadines</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard &amp; Jan Mayen</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad &amp; Tobago</option>
                                        <option value="TA">Tristan da Cunha</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks &amp; Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VA">Vatican City</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="WF">Wallis &amp; Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="main-search-input-btn">
                                    <a href="#" class="button theme-btn line-height-50">
                                        {{ __('index.search_formation_btn') }}
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 mx-auto mt-4">
                                <ul class="list-items job-tags d-flex flex-wrap justify-content-center">
                                    <li class="dropdown filter-dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle filter-dropdown-link" id="filter-course-type-btn" data-target-title="{{ __('navigation.filter_by_type_text') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            {{ __('navigation.filter_by_type_text') }}
                                        </a>
                                        <div class="dropdown-menu stop-propagation position-absolute" aria-labelledby="filter-course-type-btn">
                                            <div class="">
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input filter-course-type" name="course_online" 
                                                    data-title="{{ __('navigation.course_online_text') }}" />
                                                    <span class="new-control-indicator"></span> 
                                                    {{ __('navigation.course_online_text') }}
                                                    </label>
                                                </div>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input filter-course-type" name="course_face_to_face" 
                                                    data-title="{{ __('navigation.course_face_to_face_text') }}" />
                                                    <span class="new-control-indicator"></span> 
                                                    {{ __('navigation.course_face_to_face_text') }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <div class="d-flex flex-row justify-content-between pt-2">
                                                <button class="btn-custom-light color-text-3 bg-white btn-clear-filter" data-target="course_type">
                                                    {{ __('navigation.filter_action_btn_clear') }}
                                                </button>
                                                <button class="btn-custom-light color-text bg-white btn-apply-filter" data-target="course_type">
                                                    {{ __('navigation.filter_action_btn_save') }}
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown filter-dropdown">
                                        <a href="javascript:void(0);" data-display="static" class="dropdown-toggle filter-dropdown-link" id="filter2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            {{ __('navigation.filter_by_dates_text') }}
                                        </a>
                                        <div class="dropdown-menu stop-propagation position-absolute width-500px" aria-labelledby="filter2">
                                            <div class="">
                                                <input type="hidden" class="daterangepicker" id="filter-dates" />
                                                <div class="daterangepicker-content"></div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <div class="d-flex flex-row justify-content-between pt-2">
                                                <button class="btn-custom-light color-text-3 bg-white">
                                                        {{ __('navigation.filter_action_btn_clear') }}
                                                </button>
                                                <button class="btn-custom-light color-text bg-white">
                                                        {{ __('navigation.filter_action_btn_save') }}
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown filter-dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle filter-dropdown-link" id="filter-course-price-btn" data-target-title="{{ __('navigation.filter_by_price_text') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            {{ __('navigation.filter_by_price_text') }}
                                        </a>
                                        <div class="dropdown-menu stop-propagation position-absolute width-300px" aria-labelledby="filter-course-price-btn">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="">
                                                            {{  __('navigation.filter_min_price_text') }}
                                                        </label>
                                                        <input type="text" class="form-control filter-course-price" id="min" name="" value="" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"  />
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="">
                                                            {{ __('navigation.filter_max_price_text') }}
                                                        </label>
                                                        <input type="text" class="form-control filter-course-price" id="max" name="" value="" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"  />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <div class="d-flex flex-row justify-content-between pt-2">
                                                <button class="btn-custom-light color-text-3 bg-white">
                                                    {{ __('navigation.filter_action_btn_clear') }}
                                                </button>
                                                <button class="btn-custom-light color-text bg-white">
                                                    {{ __('navigation.filter_action_btn_save') }}
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown filter-dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle filter-dropdown-link" id="filter4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            {{ __('navigation.filter_by_availables_seats_text') }}
                                        </a>
                                        <div class="dropdown-menu stop-propagation position-absolute width-275px" aria-labelledby="filter4">
                                            <div class="">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <button class="btn-fil-nb btn-custom-light btn-custom-2 mb-2">
                                                        1
                                                    </button>
                                                    <button class="btn-fil-nb btn-custom-light btn-custom-2 mb-2">
                                                        2
                                                    </button>
                                                    <button class="btn-fil-nb btn-custom-light btn-custom-2 mb-2">
                                                        3
                                                    </button>
                                                    <button class="btn-fil-nb btn-custom-light btn-custom-2 mb-2">
                                                        4
                                                    </button>
                                                    <button class="btn-fil-nb btn-custom-light btn-custom-2 mb-2">
                                                        5
                                                    </button>
                                                </div>
                                                <div class="d-flex flex-row justify-content-between">
                                                    <button class="btn-fil-nb active btn-custom-light btn-custom-2 mb-2">
                                                        6
                                                    </button>
                                                    <button class="btn-fil-nb btn-custom-light btn-custom-2 mb-2">
                                                        7
                                                    </button>
                                                    <button class="btn-fil-nb btn-custom-light btn-custom-2 mb-2">
                                                        8
                                                    </button>
                                                    <button class="btn-fil-nb btn-custom-light btn-custom-2 mb-2">
                                                        9
                                                    </button>
                                                    <button class="btn-fil-nb btn-custom-light btn-custom-2 mb-2">
                                                        10+
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <div class="d-flex flex-row justify-content-between pt-2">
                                                <button class="btn-custom-light color-text-3 bg-white">
                                                    {{ __('navigation.filter_action_btn_clear') }}
                                                </button>
                                                <button class="btn-custom-light color-text bg-white">
                                                    {{ __('navigation.filter_action_btn_save') }}
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown filter-dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle filter-dropdown-link" id="filter5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            {{ __('navigation.filter_by_certification_text') }}
                                        </a>
                                        <div class="dropdown-menu stop-propagation position-absolute" aria-labelledby="filter5">
                                            <div class="">
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox new-checkbox-rounded checkbox-success">
                                                    <input type="radio" class="new-control-input">
                                                    <span class="new-control-indicator"></span> 
                                                    {{ __('navigation.filter_certified_yes_text') }}
                                                    </label>
                                                </div>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox new-checkbox-rounded checkbox-danger">
                                                    <input type="radio" class="new-control-input">
                                                    <span class="new-control-indicator"></span> 
                                                    {{ __('navigation.filter_certified_no_text') }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <div class="d-flex flex-row justify-content-between pt-2">
                                                    <button class="btn-custom-light color-text-3 bg-white">
                                                        {{ __('navigation.filter_action_btn_clear') }}
                                                    </button>
                                                    <button class="btn-custom-light color-text bg-white">
                                                        {{ __('navigation.filter_action_btn_save') }}
                                                    </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="card-area padding-top-100px padding-bottom-100px">
        <div class="container">
            <!-- 
            <div class="row">
                <div class="col-lg-12">
                <div class="calendar"></div>
                </div>
            </div>
            -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="margin-bottom-30px">
                        <p class="showing__text text-left"></p>
                        <div class="sort-option user-chosen-select-container mr-3">
                            <select class="user-chosen-select">
                                <option value="">{{ __('navigation.sort_by_newest') }}</option>
                                <option value="">{{ __('navigation.sort_by_oldest') }}</option>
                                <option value="">{{ __('navigation.sort_by_price_high_to_low') }}</option>
                                <option value="">{{ __('navigation.sort_by_price_low_to_high') }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="jobs-wrapper">
                        <div class="job-content">
                            <div class="row"> 
                                <div class="col-md-6 col-lg-4 responsive-column">
                                    <a href="/formation/microsoft-excel/382991602">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <span class="d-block">
                                                        <img alt="logo" src="{{asset('assets/img/logo/excel.png')}}" class="">
                                                        </span>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><span>Bureautique - Microsoft Excel</span></h4>
                                                        <p class="card-sub">
                                                            <span class="badge badge-primary">Formation certifiante</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2">
                                                        <span>Créer un logiciel de gestion avec Excel</span>
                                                    </h4>
                                                    <p class="card-sub">
                                                        Venez apprendre en quelques jours à créer vos propres outils de gestion d'ent ...
                                                    </p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13">
                                                    <i class="fas fa-chair"></i> Physique
                                                    </span>
                                                    <span class="color-text-2 font-size-13">
                                                        <i class="fa fa-users"></i> 10 places disponibles
                                                    </span>
                                                    <span class="color-text-2 font-size-13"> 
                                                        25 000 fcfa
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-4 responsive-column">
                                    <a href="/formation/microsoft-excel/382991602">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <span class="d-block">
                                                        <img alt="logo" src="{{asset('assets/img/logo/start-up.png')}}" class="">
                                                        </span>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><span>Business - Entrepreneuriat</span></h4>
                                                        <p class="card-sub">
                                                            <span class="badge badge-warning">Formation non certifiante</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2">
                                                        <span>Apprendre à rediger un plan d'affaire</span>
                                                    </h4>
                                                    <p class="card-sub">
                                                        Vous allez apprendre à monter un bon plan d'affaire pour votre projet ...
                                                    </p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13">
                                                    <i class="fas fa-laptop"></i> En ligne
                                                    </span>
                                                    <span class="color-text-2 font-size-13">
                                                        <i class="fa fa-users"></i> 30 places disponibles
                                                    </span>
                                                    <span class="color-text-2 font-size-13"> 
                                                        30 000 fcfa
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-4 responsive-column">
                                    <a href="/formation/microsoft-excel/382991602">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <span class="d-block">
                                                        <img alt="logo" src="{{asset('assets/img/logo/social-media-marketing.png')}}" class="">
                                                        </span>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><span>Digital - Réseaux sociaux</span></h4>
                                                        <p class="card-sub">
                                                            <span class="badge badge-primary">Formation certifiante</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2">
                                                        <span>Maîtriser votre présence sur les réseaux sociaux</span>
                                                    </h4>
                                                    <p class="card-sub">
                                                        Venez apprendre en quelques jours à créer vos propres outils de gestion d'ent ...
                                                    </p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13">
                                                    <i class="fas fa-chair"></i> Physique
                                                    </span>
                                                    <span class="color-text-2 font-size-13">
                                                        <i class="fa fa-users"></i> 18 places disponibles
                                                    </span>
                                                    <span class="color-text-2 font-size-13"> 
                                                        35 000 fcfa
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-4 responsive-column">
                                    <a href="/formation/microsoft-excel/382991602">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <span class="d-block">
                                                        <img alt="logo" src="{{asset('assets/img/logo/idea.png')}}" class="">
                                                        </span>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><span>Design - Graphisme</span></h4>
                                                        <p class="card-sub">
                                                            <span class="badge badge-warning">Formation non certifiante</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2">
                                                        <span>Créer des visuels avec Adobe Photoshop</span>
                                                    </h4>
                                                    <p class="card-sub">
                                                        Venez apprendre en quelques jours à créer vos propres outils de gestion d'ent ...
                                                    </p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13">
                                                    <i class="fas fa-laptop"></i> En ligne
                                                    </span>
                                                    <span class="color-text-2 font-size-13">
                                                        <i class="fa fa-users"></i> 22 places disponibles
                                                    </span>
                                                    <span class="color-text-2 font-size-13"> 
                                                        45 000 fcfa
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-4 responsive-column">
                                    <a href="/formation/microsoft-excel/382991602">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <span class="d-block">
                                                        <img alt="logo" src="{{asset('assets/img/logo/ecommerce.png')}}" class="">
                                                        </span>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><span>Digital - E-commerce</span></h4>
                                                        <p class="card-sub">
                                                            <span class="badge badge-primary">Formation certifiante</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2">
                                                        <span>Lancer votre business sur internet</span>
                                                    </h4>
                                                    <p class="card-sub">
                                                        Venez apprendre en quelques jours à créer vos propres outils de gestion d'ent ...
                                                    </p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13">
                                                    <i class="fas fa-chair"></i> Physique
                                                    </span>
                                                    <span class="color-text-2 font-size-13">
                                                        <i class="fa fa-users"></i> 13 places disponibles
                                                    </span>
                                                    <span class="color-text-2 font-size-13"> 
                                                        65 000 fcfa
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-4 responsive-column">
                                    <a href="/formation/microsoft-excel/382991602">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <span class="d-block">
                                                        <img alt="logo" src="{{asset('assets/img/logo/requirements.png')}}" class="">
                                                        </span>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><span>Business - Soft Skills</span></h4>
                                                        <p class="card-sub">
                                                            <span class="badge badge-warning">Formation non certifiante</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2">
                                                        <span>Les meilleures techniques de vente</span>
                                                    </h4>
                                                    <p class="card-sub">
                                                        Venez apprendre en quelques jours à créer vos propres outils de gestion d'ent ...
                                                    </p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13">
                                                    <i class="fas fa-chair"></i> Physique
                                                    </span>
                                                    <span class="color-text-2 font-size-13">
                                                        <i class="fa fa-users"></i> 7 places disponibles
                                                    </span>
                                                    <span class="color-text-2 font-size-13"> 
                                                        15 000 fcfa
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-navigation-wrap mt-4">
                        <div class="page-navigation mx-auto">
                            <a href="#" class="page-go page-prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <ul class="page-navigation-nav">
                                <li><a href="#" class="page-go-link">1</a></li>
                                <li class="active"><a href="#" class="page-go-link">2</a></li>
                                <li><a href="#" class="page-go-link">3</a></li>
                                <li><a href="#" class="page-go-link">4</a></li>
                                <li><a href="#" class="page-go-link">5</a></li>
                            </ul>
                            <a href="#" class="page-go page-next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-block"></div>

@endsection
