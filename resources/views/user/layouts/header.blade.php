<div class="loader_bg">
    <div class="loader"></div>
</div>

    <div id="scrolltotop_parent" class="scrolltotop_hide_onload">
        <div tabindex="0" id="scrolltotop_arrow">
        </div>
    </div>
    <nav class="navbar about navbar-expand-lg navbar-light  justify-content-lg-start fixed-top main-nav" id="mainNav">

        <!-- Navbar brand -->
        <a class=" navbar-brand" href=""><img src="{{ asset('user/img/Logo/logologo.png') }}" width="60" alt=""></a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <!-- Links -->
            <ul class=" navbar-nav mx-auto align-self-stretch " id="nav-menu">
                <li class="nav-item active">
                    <a class="nav-link " href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown"
                    data-delay="200" class="dropdown-toggle nav-link">About Us<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                    <li>
                        <div class="row">

                            <div class="col-md-6 col-lg-6">
                                <h5 style="color: #0276fd;">About </h5>
                                <ul class="list-unstyled mb-3">
                                    <li class="nav-item"><a href="/about" class="">About Us</a>
                                    </li>
                                    <li class="nav-item"><a href="our_branches.html" class="">Our Branches</a>
                                    </li>
                                    <li class="nav-item"><a href="/yearly" class="">Our Yearly Anchor</a>
                                    </li>
                                    <!-- <li class="nav-item"><a href="category.html" class="">Casual</a> -->
                                    <!-- </li>
                                    <li class="nav-item"><a href="category.html" class="">Hiking
                                            shoes</a></li>
                                    <li class="nav-item"><a href="category.html" class="">Casual</a>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <h5 style="color: #0276fd;">Ministries</h5>
                                <ul class="list-unstyled mb-3">
                                    <li class="nav-item"><a href="#" class="">Men
                                            Of
                                            Valor
                                            Fellowship</a>
                                    </li>
                                    <li class="nav-item"><a href="#" class="">Good
                                            Women
                                            Fellowship</a>
                                    </li>
                                    <li class="nav-item"><a href="#" class="">Youth
                                            Fellowwship</a></li>
                                    <li class="nav-item"><a href="#" class="">Rescue
                                            Voices</a></li>
                                    <li class="nav-item"><a href="#" class="">Boy's
                                            Brigade</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown"
                    data-delay="200" class="dropdown-toggle nav-link">Information center<b
                        class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                    <li>
                        <div class="row">

                            <div class="col-md-6 col-lg-6">
                                <h5 style="color: #0276fd;">Enquire </h5>
                                <ul class="list-unstyled mb-3">
                                    <li class="nav-item"><a href="#" class="">Baptism</a>
                                    </li>
                                    <li class="nav-item"><a href="#" class="">Getting
                                            Married</a>
                                    </li>
                                    <li class="nav-item"><a href="#" class="">Child Dedication</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <h5 style="color: #0276fd;">Connect</h5>
                                <ul class="list-unstyled mb-3">
                                    <li class="nav-item"><a href="/zone" class="">House
                                            Support
                                            Networks(Fellowship)</a>
                                    </li>
                                    <li class="nav-item"><a href="#" class="">Ministry
                                            Training
                                            Institute</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="ministries.html" id="dropdown04"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Events</a>
                <div class="dropdown-menu event" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="ministries.html">7 Prophetic Sunday</a>
                    <a class="dropdown-item" href="ministries.html">7 Special Wednesday</a>
                    <a class="dropdown-item" href="ministries.html">7 Variety Nights</a>
                    <a class="dropdown-item" href="ministries.html">3 Days Freedom Campaign</a>
                    <!-- <a class="dropdown-item" href="ministries.html">Request Prayer</a> -->
                </div>
            </li>

                <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Store</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="/contact_us">Contact Us</a>
                </li>
            </ul>
            {{-- <a href="/give" class="button btn btn-primary" style="margin-right:30px;">Give</a> --}}
                    
            <button class="button btn btn-primary" data-toggle="modal" data-target="#modalForm">
                Give
            </button>


        </div>
        <!-- Collapsible content -->
    </nav>
    <!--/.Navbar-->
   
    
<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog mw-100 w-75">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Contact Form</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>

                    <span class="sr-only">Close</span>
                </button>
                
            </div>
            
           <!-- Modal Body -->
           <div class="modal-body ">
            <p class="statusMsg"></p>
            <div class="wrap">
                <div class="container">
                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal cool-b4-form" role="form">
                        <h2 class="text-center mt-4">Contact Us</h2>
                    <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group ">
                          <input type="text" class="form-control" name="full_name" id="name">
                          <label for="name">Full Name</label>
                          <span class="input-highlight"></span>
                        </div>
                        <div class="form-group mt-4">
                          <input type="email" class="form-control" name="email" id="email">
                          <label for="email">Email <span style="color: #ff0000;">*</span></label>
                          <span class="input-highlight"></span>
                        </div>
                        <div class="form-group mt-4">
                            Giving For: <span style="color: #ff0000;">*</span>
                          <select name="giving" id="" class="form-control"">
                              <option value="">Select A Purpose</option>
                              <option value="">Tithe & Offering</option>
                              <option value="">Building</option>
                          </select>
                          <span class="input-highlight"></span>
                        </div>
                        <div class="form-group mt-4">
                            <input type="number" class="form-control" name="amount" id="amount">
                            <label for="amount">Amount <span style="color: #ff0000;">*</span></label>
                            <span class="input-highlight"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" name="phone" id="phone">
                          <label for="phone">Phone Number</label>
                          <span class="input-highlight"></span>
                        </div>
                        <div class="form-group">
                           Select A Currency: <span style="color: #ff0000;">*</span>
                            <select name="currency" id="" class="form-control">
                                <option value="">Select A Purpose</option>
                                <option value="">Tithe & Offering</option>
                                <option value="">Building</option>
                            </select>
                          <span class="input-highlight"></span>
                        </div>
                       
                        <div class="form-group mt-4">
                            Select A Country: <span style="color: #ff0000;">*</span>
                            <select id="country" name="country"  class="form-control">
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canary Islands">Canary Islands</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Island">Cocos Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote DIvoire">Cote DIvoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaco">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Ter">French Southern Ter</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="India">India</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea North">Korea North</option>
                                <option value="Korea Sout">Korea South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nambia">Nambia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherland Antilles">Netherland Antilles</option>
                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option value="Nevis">Nevis</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau Island">Palau Island</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                <option value="Republic of Serbia">Republic of Serbia</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="St Barthelemy">St Barthelemy</option>
                                <option value="St Eustatius">St Eustatius</option>
                                <option value="St Helena">St Helena</option>
                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option value="St Lucia">St Lucia</option>
                                <option value="St Maarten">St Maarten</option>
                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tahiti">Tahiti</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uraguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State">Vatican City State</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option value="Wake Island">Wake Island</option>
                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                             </select>
                           <span class="input-highlight"></span>
                         </div>
                      </div>
                    </div>
                        <div class="row" style="margin-bottom:40px;">
                          <div class="col-md-8 col-md-offset-2">
                            <input type="hidden" name="email" value="ckreglomsmc@gmail.com"> {{-- required --}}
                            <input type="hidden" name="orderID" value="345">
                            <input type="hidden" name="amount" value="8000"> {{-- required in kobo --}}
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="metadata" value="{{ json_encode($array  = [ 'full_name' => Auth::user()]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                
                             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                
                
                            <p>
                                <div class="row justify-content-center">
                                    <button class="mr-4 btn btn-success btn-lg " type="submit" value="Pay Now!">
                                        <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                    </button>
                                </div>
                              
                            </p>
                          </div>
                        </div>
                </div>
                    </form>
                </div>
            </div>
           </div>
        </div>
    </div>
</div>
    
