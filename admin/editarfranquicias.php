<!DOCTYPE html>
<html>

 <?php include 'layout/header.php' ?>

<body class="dashboard-page sb-l-o sb-r-c">

    
    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
         <?php include 'layout/menu-superior.php'; ?>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <?php include 'layout/menu.php'; ?>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- Start: Topbar-Dropdown -->
            <div id="topbar-dropmenu">
                <div class="topbar-menu row">
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-success">
                            <span class="metro-icon glyphicons glyphicons-inbox"></span>
                            <p class="metro-title">Messages</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-info">
                            <span class="metro-icon glyphicons glyphicons-parents"></span>
                            <p class="metro-title">Users</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-alert">
                            <span class="metro-icon glyphicons glyphicons-headset"></span>
                            <p class="metro-title">Support</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-primary">
                            <span class="metro-icon glyphicons glyphicons-cogwheels"></span>
                            <p class="metro-title">Settings</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-warning">
                            <span class="metro-icon glyphicons glyphicons-facetime_video"></span>
                            <p class="metro-title">Videos</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-system">
                            <span class="metro-icon glyphicons glyphicons-picture"></span>
                            <p class="metro-title">Pictures</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End: Topbar-Dropdown -->

            <!-- Start: Topbar -->
           
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="animated fadeIn">
				
				<div class="tray tray-center p25 va-t posr">

                    <!-- Store Owner Details -->
                    <div class="panel panel-warning panel-border top mt20 mb35">
                        <div class="panel-heading">
                            <span class="panel-title">Owner Details</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form">
                                <div class="section row mb10">
                                    <label for="account-name" class="field-label col-md-3 text-center">Account Name:</label>
                                    <div class="col-md-9">
                                        <label for="account-name" class="field prepend-icon">
                                            <input type="text" name="account-name" id="account-name" class="gui-input" value="OwnerAccountName">
                                            <label for="account-name" class="field-icon"><i class="fa fa-home"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-email" class="field-label col-md-3 text-center">Account Email:</label>
                                    <div class="col-md-9">
                                        <label for="account-email" class="field prepend-icon">
                                            <input type="email" name="account-email" id="account-email" class="gui-input" value="owner@store.com">
                                            <label for="account-email" class="field-icon"><i class="fa fa-envelope-o"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="account-phone" class="field-label col-md-3 text-center">Account Phone:</label>
                                    <div class="col-md-9">
                                        <label for="account-phone" class="field prepend-icon">
                                            <input type="text" name="account-phone" id="account-phone" class="gui-input" value="888-888-8888" placeholder="">
                                            <label for="account-phone" class="field-icon"><i class="fa fa-phone"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="store-timezone" class="field-label col-md-3 text-center">Store Timezone:</label>
                                    <div class="col-md-9">
                                        <label class="field select">
                                            <select id="store-timezone" name="store-timezone">
                                                <option value="0" selected="selected">(GMT-8h) US/Pacific</option>
                                                <option value="1">(GMT-11h) Pacific/Samoa</option>
                                                <option value="2">(GMT-10h) Pacific/Johnston</option>
                                                <option value="3">(GMT-8h) Canada/Pacific</option>
                                                <option value="4">(GMT+10h) Pacific/Truk</option>
                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Store Information -->
                    <div class="panel panel-info panel-border top mb35">
                        <div class="panel-heading">
                            <span class="panel-title">Store Information</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form">
                                <div class="section row mb10">
                                    <label for="business-name" class="field-label col-md-3 text-center">Business Name:</label>
                                    <div class="col-md-9">
                                        <label for="business-name" class="field prepend-icon">
                                            <input type="text" name="business-name" id="business-name" class="gui-input" value="AdminDesigns">
                                            <label for="business-name" class="field-icon"><i class="fa fa-home"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="business-phone" class="field-label col-md-3 text-center">Business Phone:</label>
                                    <div class="col-md-9">
                                        <label for="business-phone" class="field prepend-icon">
                                            <input type="text" name="business-phone" id="business-phone" class="gui-input" value="888-888-8888">
                                            <label for="business-phone" class="field-icon"><i class="fa fa-phone"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>


                                <hr class="short alt">

                                <div class="section">
                                    <label for="lastaddr" class="field prepend-icon">
                                        <input type="text" name="lastaddr" id="lastaddr" class="gui-input" placeholder="Street address 2">
                                        <label for="lastaddr" class="field-icon"><i class="fa fa-map-marker"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <label class="field select">
                                        <select id="location" name="location">
                                            <option value="">Select country...</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan Republic</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BR">Brazil</option>
                                            <option value="BN">Brunei</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="C2">China Worldwide</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="CD">Democratic Republic of the Congo</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="GA">Gabon Republic</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Laos</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PW">Palau</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn Islands</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="QA">Qatar</option>
                                            <option value="CG">Republic of the Congo</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russia</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="KN">Saint Kitts and Nevis Anguilla</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">São Tomé and Príncipe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="KR">South Korea</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SH">St. Helena</option>
                                            <option value="LC">St. Lucia</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="TW">Taiwan</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TG">Togo</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VA">Vatican City State</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="VG">Virgin Islands (British)</option>
                                            <option value="WF">Wallis and Futuna Islands</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class="section row mbn">
                                    <div class="col-md-3">
                                        <label for="zip" class="field prepend-icon">
                                            <input type="text" name="zip" id="zip" class="gui-input" placeholder="Zip">
                                            <label for="zip" class="field-icon"><i class="fa fa-certificate"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="col-md-4">
                                        <label for="city" class="field prepend-icon">
                                            <input type="text" name="city" id="city" class="gui-input" placeholder="City">
                                            <label for="city" class="field-icon"><i class="fa fa-building-o"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="col-md-5">
                                        <label for="states" class="field select">
                                            <select id="states" name="states">
                                                <option value="">Choose state</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                </div>
                                <!-- end section row -->

                            </div>
                        </div>
                    </div>

                    <!-- Store Settings -->
                    <div class="panel panel-primary panel-border top mb35">
                        <div class="panel-heading">
                            <span class="panel-title">Store Settings</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form">

                                <div class="section row mb10">
                                    <label for="names" class="field-label col-md-3 text-center">Store Timezone:</label>
                                    <div class="col-md-9">
                                        <label class="field select">
                                            <select id="set-location" name="set-location">
                                                <option value="0" selected="selected">(GMT-8h) US/Pacific</option>
                                                <option value="1">(GMT-11h) Pacific/Samoa</option>
                                                <option value="2">(GMT-10h) Pacific/Johnston</option>
                                                <option value="3">(GMT-8h) Canada/Pacific</option>
                                                <option value="4">(GMT+10h) Pacific/Truk</option>
                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="store-currency" class="field-label col-md-3 text-center">Store Currency:</label>
                                    <div class="col-md-9">
                                        <label for="store-currency" class="field prepend-icon">
                                            <input type="text" name="store-currency" id="store-currency" class="gui-input" value="" placeholder="United States Dollar">
                                            <label for="store-currency" class="field-icon"><i class="fa fa-usd"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="store-units" class="field-label col-md-3 text-center">Store Unit System:</label>
                                    <div class="col-md-9">
                                        <label for="store-units" class="field prepend-icon">
                                            <input type="text" name="store-units" id="store-units" class="gui-input" value="" placeholder="Metric System">
                                            <label for="store-units" class="field-icon"><i class="fa fa-exchange"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="store-weight" class="field-label col-md-3 text-center">Store Weight Unit:</label>
                                    <div class="col-md-9">
                                        <label for="store-weight" class="field prepend-icon">
                                            <input type="text" name="store-weight" id="store-weight" class="gui-input" value="" placeholder="Pound(lb)">
                                            <label for="store-weight" class="field-icon"><i class="fa fa-anchor"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="store-desc" class="field-label col-md-3 text-center">Store Description:</label>
                                    <div class="col-md-9">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="store-desc" name="store-desc" placeholder="Store Description and Purposes"></textarea>
                                            <label for="store-desc" class="field-icon"><i class="fa fa-edit"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                    <!-- Store Policies -->
                    <div class="panel panel-success panel-border top mb35">
                        <div class="panel-heading">
                            <span class="panel-title">Store Policies</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form">


                                <div class="section row mb25">
                                    <label for="refund-policy" class="field-label col-md-3 text-center">Refund Policy</label>
                                    <div class="col-md-9">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="refund-policy" name="refund-policy" placeholder="Describe your return policy and conditions here..."></textarea>
                                            <label for="refund-policy" class="field-icon"><i class="fa fa-usd"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb25">
                                    <label for="privacy-policy" class="field-label col-md-3 text-center">Privacy Policy</label>
                                    <div class="col-md-9">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="privacy-policy" name="privacy-policy" placeholder="Describe the data your store, collect, and handle here..."></textarea>
                                            <label for="privacy-policy" class="field-icon"><i class="fa fa-edit"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb15">
                                    <label for="store-tos" class="field-label col-md-3 text-center">Terms of Service</label>
                                    <div class="col-md-9">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea" id="store-tos" name="store-tos" placeholder="Describe any business protocols or methodologies here..."></textarea>
                                            <label for="store-tos" class="field-icon"><i class="fa fa-edit"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Request Google Analytics -->
                    <div class="panel panel-system panel-border top mb35">
                        <div class="panel-heading">
                            <span class="panel-title">Google Analytics</span>
                        </div>
                        <div class="panel-body bg-light dark">
                            <div class="admin-form">

                                <h5 class="text-muted fw400 mb10"> Google Analytics account <small>(how do I set this up?)</small></h5>
                                <div class="section mbn">
                                    <label class="field prepend-icon">
                                        <textarea class="gui-textarea" id="google-insert" name="google-insert" placeholder="Paste your code from Google here"></textarea>
                                        <label for="google-insert" class="field-icon"><i class="fa fa-google"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                            </div>
                        </div>
                    </div>

                </div>
			
                <!-- Dashboard Tiles -->
                <div class="row mb10">
                    <div class="col-md-4">
                        <div class="panel bg-alert light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-comments-o"></i> </div>
                                <h2 class="mt15 lh15"> <b>523</b> </h2>
                                <h5 class="text-muted">Pedidos realizados</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel bg-info light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-twitter"></i> </div>
                                <h2 class="mt15 lh15"> <b>348</b> </h2>
                                <h5 class="text-muted">Franquicias suscritas</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel bg-danger light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-bar-chart-o"></i> </div>
                                <h2 class="mt15 lh15"> <b>267</b> </h2>
                                <h5 class="text-muted">Sucursales Pide Rapido</h5>
                            </div>
                        </div>
                    </div>
                   
                </div>

                <!-- Admin-panels -->
                <div class="admin-panels fade-onload sb-l-o-full">

						<div class="row">

						</div>
				</div>
    
    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Sparklines CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

    <!-- Chart Plugins -->
    <script type="text/javascript" src="vendor/plugins/highcharts/highcharts.js"></script>
    <script type="text/javascript" src="vendor/plugins/circles/circles.js"></script>
    <script type="text/javascript" src="vendor/plugins/raphael/raphael.js"></script>

    <!-- Holder js  -->
    <script type="text/javascript" src="assets/js/bootstrap/holder.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>

    <!-- Admin Panels  -->
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/json2.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript" src="assets/js/pages/widgets.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core      
            Core.init({
                sbm: "sb-l-c",
            });

            // Init Demo JS
            Demo.init();

            // Init Widget Demo JS
            // demoHighCharts.init();

            // Because we are using Admin Panels we use the OnFinish 
            // callback to activate the demoWidgets. It's smoother if
            // we let the panels be moved and organized before 
            // filling them with content from various plugins

            // Init plugins used on this page
            // HighCharts, JvectorMap, Admin Panels

            // Init Admin Panels on widgets inside the ".admin-panels" container
            $('.admin-panels').adminpanel({
                grid: '.admin-grid',
                draggable: true,
                preserveGrid: true,
                mobile: false,
                callback: function() {
                    bootbox.confirm('<h3>A Custom Callback!</h3>', function() {});
                },
                onFinish: function() {
                    $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                    // Init the rest of the plugins now that the panels
                    // have had a chance to be moved and organized.
                    // It's less taxing to organize empty panels
                    demoHighCharts.init();
                    runVectorMaps();

                    // We also refresh any "in-view" waypoints to ensure
                    // the correct position is being calculated after the 
                    // Admin Panels plugin moved everything
                    Waypoint.refreshAll();

                },
                onSave: function() {
                    $(window).trigger('resize');
                }
            });

            // Widget VectorMap
            function runVectorMaps() {

                // Jvector Map Plugin
                var runJvectorMap = function() {
                    // Data set
                    var mapData = [900, 700, 350, 500];
                    // Init Jvector Map
                    $('#WidgetMap').vectorMap({
                        map: 'us_lcc_en',
                        //regionsSelectable: true,
                        backgroundColor: 'transparent',
                        series: {
                            markers: [{
                                attribute: 'r',
                                scale: [3, 7],
                                values: mapData
                            }]
                        },
                        regionStyle: {
                            initial: {
                                fill: '#E5E5E5'
                            },
                            hover: {
                                "fill-opacity": 0.3
                            }
                        },
                        markers: [{
                            latLng: [37.78, -122.41],
                            name: 'San Francisco,CA'
                        }, {
                            latLng: [36.73, -103.98],
                            name: 'Texas,TX'
                        }, {
                            latLng: [38.62, -90.19],
                            name: 'St. Louis,MO'
                        }, {
                            latLng: [40.67, -73.94],
                            name: 'New York City,NY'
                        }],
                        markerStyle: {
                            initial: {
                                fill: '#a288d5',
                                stroke: '#b49ae0',
                                "fill-opacity": 1,
                                "stroke-width": 10,
                                "stroke-opacity": 0.3,
                                r: 3
                            },
                            hover: {
                                stroke: 'black',
                                "stroke-width": 2
                            },
                            selected: {
                                fill: 'blue'
                            },
                            selectedHover: {}
                        },
                    });
                    // Manual code to alter the Vector map plugin to 
                    // allow for individual coloring of countries
                    var states = ['US-CA', 'US-TX', 'US-MO',
                        'US-NY'
                    ];
                    var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
                    var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
                    $.each(states, function(i, e) {
                        $("#WidgetMap path[data-code=" + e + "]").css({
                            fill: colors[i]
                        });
                    });
                    $('#WidgetMap').find('.jvectormap-marker')
                        .each(function(i, e) {
                            $(e).css({
                                fill: colors2[i],
                                stroke: colors2[i]
                            });
                        });
                }

                if ($('#WidgetMap').length) {
                    runJvectorMap();
                }
            }

        });
    </script>

    <!-- END: PAGE SCRIPTS -->

</body>

</html>
