@extends('layouts.site')

@section('content')

    <section class="hero-wrapper hero-wrapper-4" style="background-image:url('{{ asset('assets/img/bg/index-1.jpg') }}')">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content-wrapper">
                        <div class="hero-heading text-center">
                            <div class="section-heading">
                                <h2 class="sec__title">{{ __('index.find_formation_text') }}</h2>
                                <p class="sec__desc font-size-20 font-weight-medium cd-headline zoom">
                                    {{ __('index.find_formation_subtext_1') }}
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">{{ __('index.find_formation_subtext_2') }}</b>
                                        <b>{{ __('index.find_formation_subtext_3') }}</b>
                                        <b>{{ __('index.find_formation_subtext_4') }}</b>
                                    </span>
                                    {{ __('index.find_formation_subtext_5') }}
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">{{ __('index.find_formation_subtext_6') }}</b>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="hero-form-wrap hero-form-wrap-2 position-relative">
                            <div class="main-search-input">
                                <div class="main-search-input-item">
                                    <div class="contact-form-action">
                                        <form action="#">
                                            <div class="form-group mb-0">
                                                <span class="fa fa-search form-icon"></span>
                                                <input class="form-control" type="text" placeholder="{{ __('index.search_keywords_placeholder') }}">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="main-search-input-item user-chosen-select-container">
                                    <select class="user-chosen-select">
                                        <option value="1">{{ __('index.search_categories_placeholder') }}</option>
                                        <option value="2">Accountancy</option>
                                        <option value="3">Banking</option>
                                        <option value="4">Digital & Creative</option>
                                        <option value="5">Charity & Voluntary</option>
                                        <option value="6">Delivery Driver Jobs</option>
                                        <option value="7">Leisure & Tourism jobs</option>
                                        <option value="8">Graphic Designer Jobs</option>
                                        <option value="9">IT Contractor</option>
                                        <option value="10">Graduate</option>
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
                                    <a href="/recherche/keyword/category/location" class="button theme-btn line-height-50">
                                        {{ __('index.search_formation_btn') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cat-area padding-top-100px padding-bottom-80px text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="sec__title">{{ __('index.top_categories_text') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-3 responsive-column">
                    <div class="category-item">
                        <a href="job-grid-view.html" class="cat-fig-box d-block p-4">
                            <div class="icon-element mb-3">
                                <i class="fa fa-paint-brush"></i>
                            </div>
                            <div class="cat-content">
                                <h4 class="cat__title mb-2">Design & Multimedia</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="category-item">
                        <a href="job-grid-view.html" class="cat-fig-box d-block p-4">
                            <div class="icon-element mb-3">
                                <i class="fa fa-chart-line"></i>
                            </div>
                            <div class="cat-content">
                                <h4 class="cat__title mb-2">Accounting / Finance</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="category-item">
                        <a href="job-grid-view.html" class="cat-fig-box d-block p-4">
                            <div class="icon-element mb-3">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="cat-content">
                                <h4 class="cat__title mb-2">Telecommunications</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="category-item">
                        <a href="job-grid-view.html" class="cat-fig-box d-block p-4">
                            <div class="icon-element mb-3">
                                <i class="fa fa-hammer"></i>
                            </div>
                            <div class="cat-content">
                                <h4 class="cat__title mb-2">Construction</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="category-item">
                        <a href="job-grid-view.html" class="cat-fig-box d-block p-4">
                            <div class="icon-element mb-3">
                                <i class="fa fa-paint-brush"></i>
                            </div>
                            <div class="cat-content">
                                <h4 class="cat__title mb-2">Design & Multimedia</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="category-item">
                        <a href="job-grid-view.html" class="cat-fig-box d-block p-4">
                            <div class="icon-element mb-3">
                                <i class="fa fa-chart-line"></i>
                            </div>
                            <div class="cat-content">
                                <h4 class="cat__title mb-2">Accounting / Finance</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="category-item">
                        <a href="job-grid-view.html" class="cat-fig-box d-block p-4">
                            <div class="icon-element mb-3">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="cat-content">
                                <h4 class="cat__title mb-2">Telecommunications</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="category-item">
                        <a href="job-grid-view.html" class="cat-fig-box d-block p-4">
                            <div class="icon-element mb-3">
                                <i class="fa fa-hammer"></i>
                            </div>
                            <div class="cat-content">
                                <h4 class="cat__title mb-2">Construction</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-area section-bg responsive-text-center padding-top-80px padding-bottom-80px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="section-heading">
                        <h2 class="sec__title mb-2 font-size-26 line-height-35">
                            {!! __('index.create_a_trainer_account_text') !!}
                        </h2>
                        <p class="sec__desc__">
                            {{ __('index.create_a_trainer_account_sub_text') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="btn-box">
                        <a href="" class="theme-btn">{{ __('index.create_a_trainer_account_btn') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-block"></div>

@endsection
