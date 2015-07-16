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

                    <!-- create new order panel -->
                    <div class="panel mb25 mt5">
                        <div class="panel-heading">
                            <span class="panel-title"> Add New Customer</span>
                            <ul class="nav panel-tabs-border panel-tabs">
                                <li class="active">
                                    <a href="#tab1_1" data-toggle="tab">General</a>
                                </li>
                                <li>
                                    <a href="#tab1_2" data-toggle="tab">Settings</a>
                                </li>
                                <li>
                                    <a href="#tab1_3" data-toggle="tab">Billing Address</a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body p20 pb10">
                            <div class="tab-content pn br-n admin-form">

                                <div id="tab1_1" class="tab-pane active">

                                    <div class="section row mbn">
                                        <div class="col-md-9 pl15">
                                            <div class="section row mb15">
                                                <div class="col-xs-6">
                                                    <label for="name1" class="field prepend-icon">
                                                        <input type="text" name="name1" id="name1" class="event-name gui-input br-light light" placeholder="First Name">
                                                        <label for="name1" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                                <div class="col-xs-6">
                                                    <label for="name2" class="field prepend-icon">
                                                        <input type="text" name="name2" id="name2" class="event-name gui-input br-light light" placeholder="Last Name">
                                                        <label for="name2" class="field-icon"><i class="fa fa-user"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section row mb15">
                                                <div class="col-xs-6">
                                                    <label for="password" class="field prepend-icon">
                                                        <input type="password" name="password" id="password" class="event-name gui-input br-light light" placeholder="Password">
                                                        <label for="name2" class="field-icon"><i class="fa fa-lock"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                                <div class="col-xs-6">
                                                    <label for="password2" class="field prepend-icon">
                                                        <input type="password2" name="password2" id="password2" class="event-name gui-input br-light light" placeholder="Confirm Password">
                                                        <label for="password2" class="field-icon"><i class="fa fa-unlock"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="section mb15">
                                                <label for="email" class="field prepend-icon">
                                                    <input type="text" name="email" id="email" class="event-name gui-input br-light bg-light" placeholder="Customer Email Address">
                                                    <label for="email" class="field-icon"><i class="fa fa-envelope-o"></i>
                                                    </label>
                                                </label>
                                            </div>
                                            <div class="section mb10">
                                                <input id="tagsinput" class="bg-light" type="text" value="IBM, Software, Friend">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                                                <div class="fileupload-preview thumbnail mb15">
                                                    <img data-src="holder.js/100%x147" alt="holder">
                                                </div>
                                                <span class="button btn-system btn-file btn-block ph5">
                                                            <span class="fileupload-new">Change</span>
                                                <span class="fileupload-exists">Change</span>
                                                <input type="file">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end section row -->

                                </div>
                                <div id="tab1_2" class="tab-pane">

                                    <div class="section row mbn">
                                        <div class="col-xs-6 pr15">
                                            <div class="section mb10">
                                                <label for="cust-phone" class="field prepend-icon">
                                                    <input type="text" name="cust-phone" id="cust-phone" class="event-name gui-input bg-light br-light" placeholder="Customer Phone Number...">
                                                    <label for="cust-phone" class="field-icon"><i class="fa fa-phone"></i>
                                                    </label>
                                                </label>
                                            </div>
                                            <div class="section mb10">
                                                <label for="customer-group" class="field select">
                                                    <select id="customer-group" name="customer-group">
                                                        <option value="0" selected="selected">Customer Group...</option>
                                                        <option value="1">Vendor</option>
                                                        <option value="2">Supplier</option>
                                                        <option value="3">Distributor</option>
                                                    </select>
                                                    <i class="arrow double"></i>
                                                </label>
                                            </div>
                                            <div class="section">
                                                <label for="customer-language" class="field select">
                                                    <select id="customer-language" name="customer-language">
                                                        <option value="0" selected="selected">Customer Language...</option>
                                                        <option value="1">English</option>
                                                        <option value="2">Spanish</option>
                                                        <option value="3">German</option>
                                                    </select>
                                                    <i class="arrow double"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <label class="field option">
                                                <input type="checkbox" name="info">
                                                <span class="checkbox mr10"></span> Customer is Tax Exempt
                                            </label>
                                            <br>
                                            <label class="field option mt15">
                                                <input type="checkbox" name="info">
                                                <span class="checkbox mr10"></span> Customer Accepts Marketing
                                            </label>
                                            <br>
                                            <label class="field option mt15">
                                                <input type="checkbox" name="info">
                                                <span class="checkbox mr10"></span> Activate/Enable Account?
                                            </label>
                                            <hr class="alt short mv15">
                                            <p class="text-muted"> <span class="fa fa-exclamation-circle text-warning fs15 pr5"></span> Grants the customer limited store access.</p>
                                        </div>
                                    </div>

                                    <hr class="short alt mtn">

                                    <div class="section mb15">
                                        <label class="field prepend-icon">
                                            <textarea class="gui-textarea br-light bg-light" id="cust-note" name="cust-note" placeholder="Customer Notes"></textarea>
                                            <label for="cust-note" class="field-icon"><i class="fa fa-edit"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                </div>
                                <div id="tab1_3" class="tab-pane">

                                    <div class="section">
                                        <label for="lastaddr" class="field prepend-icon">
                                            <input type="text" name="lastaddr" id="lastaddr" class="gui-input" placeholder="Street address">
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

                                    <div class="section row">
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
                                        <!-- end .col8 section -->

                                    </div>
                                    <!-- end section row section -->

                                    <div class="section row mbn">
                                        <div class="col-sm-8">
                                            <label class="field option mt10">
                                                <input type="checkbox" name="info" checked>
                                                <span class="checkbox"></span>Save Customer
                                                <em class="small-text text-muted">- A Random Unique ID will be generated</em>
                                            </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-right">
                                                <button class="btn btn-primary" type="button">Save Order</button>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end section -->

                                </div>
                            </div>
                        </div>
                    </div>
				
				<div class="panel">
                        <div class="panel-menu p12 admin-form theme-primary">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="field select">
                                        <select id="filter-purchases" name="filter-purchases">
                                            <option value="0">Filter by Purchases</option>
                                            <option value="1">1-49</option>
                                            <option value="2">50-499</option>
                                            <option value="1">500-999</option>
                                            <option value="2">1000+</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="field select">
                                        <select id="filter-group" name="filter-group">
                                            <option value="0">Filter by Group</option>
                                            <option value="1">Customers</option>
                                            <option value="2">Vendors</option>
                                            <option value="3">Distributors</option>
                                            <option value="4">Employees</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="field select">
                                        <select id="filter-status" name="filter-status">
                                            <option value="0">Filter by Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                            <option value="3">Suspended</option>
                                            <option value="4">Online</option>
                                            <option value="5">Offline</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body pn">
                            <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                                <thead>
                                    <tr class="bg-light">
                                        <th class="text-center">Select</th>
                                        <th class="">Avatar</th>
                                        <th class="">Name</th>
                                        <th class="">Email</th>
                                        <th class="">Registered</th>
                                        <th class="">Purchases</th>
                                        <th class="">Total Spent</th>
                                        <th class="text-right">Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <label class="option block mn">
                                                <input type="checkbox" name="mobileos" value="FR">
                                                <span class="checkbox mn"></span>
                                            </label>
                                        </td>
                                        <td class="w50">
                                            <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                                        </td>
                                        <td class="">Dave Robert</td>
                                        <td class="">dave@company.com</td>
                                        <td class="">12/03/2014</td>
                                        <td class="">222</td>
                                        <td class="">$3,600</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <label class="option block mn">
                                                <input type="checkbox" name="mobileos" value="FR">
                                                <span class="checkbox mn"></span>
                                            </label>
                                        </td>
                                        <td class="w50">
                                            <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/2.jpg">
                                        </td>
                                        <td class="">Sara Marshall</td>
                                        <td class="">sara@company.com</td>
                                        <td class="">12/03/2014</td>
                                        <td class="">16</td>
                                        <td class="">$4,200</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <label class="option block mn">
                                                <input type="checkbox" name="mobileos" value="FR">
                                                <span class="checkbox mn"></span>
                                            </label>
                                        </td>
                                        <td class="w50">
                                            <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/3.jpg">
                                        </td>
                                        <td class="">Larry Kingster</td>
                                        <td class="">larry@company.com</td>
                                        <td class="">12/03/2014</td>
                                        <td class="">46</td>
                                        <td class="">$16,200</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <label class="option block mn">
                                                <input type="checkbox" name="mobileos" value="FR">
                                                <span class="checkbox mn"></span>
                                            </label>
                                        </td>
                                        <td class="w50">
                                            <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/4.jpg">
                                        </td>
                                        <td class="">Emily Roundwheel</td>
                                        <td class="">emily@company.com</td>
                                        <td class="">12/03/2014</td>
                                        <td class="">06</td>
                                        <td class="">$1,400</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <label class="option block mn">
                                                <input type="checkbox" name="mobileos" value="FR">
                                                <span class="checkbox mn"></span>
                                            </label>
                                        </td>
                                        <td class="w50">
                                            <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/5.jpg">
                                        </td>
                                        <td class="">Nick Cannoneer</td>
                                        <td class="">sara@company.com</td>
                                        <td class="">12/03/2014</td>
                                        <td class="">43</td>
                                        <td class="">$13,600</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <label class="option block mn">
                                                <input type="checkbox" name="mobileos" value="FR">
                                                <span class="checkbox mn"></span>
                                            </label>
                                        </td>
                                        <td class="w50">
                                            <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/6.jpg">
                                        </td>
                                        <td class="">Morgan Lunar</td>
                                        <td class="">morgan@company.com</td>
                                        <td class="">12/03/2014</td>
                                        <td class="">11</td>
                                        <td class="">$3,200</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <label class="option block mn">
                                                <input type="checkbox" name="mobileos" value="FR">
                                                <span class="checkbox mn"></span>
                                            </label>
                                        </td>
                                        <td class="w50">
                                            <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/4.jpg">
                                        </td>
                                        <td class="">Emily Roundwheel</td>
                                        <td class="">emily@company.com</td>
                                        <td class="">12/03/2014</td>
                                        <td class="">06</td>
                                        <td class="">$1,400</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> In-Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <label class="option block mn">
                                                <input type="checkbox" name="mobileos" value="FR">
                                                <span class="checkbox mn"></span>
                                            </label>
                                        </td>
                                        <td class="w50">
                                            <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/2.jpg">
                                        </td>
                                        <td class="">Sara Marshall</td>
                                        <td class="">sara@company.com</td>
                                        <td class="">12/03/2014</td>
                                        <td class="">16</td>
                                        <td class="">$4,200</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> In-Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <label class="option block mn">
                                                <input type="checkbox" name="mobileos" value="FR">
                                                <span class="checkbox mn"></span>
                                            </label>
                                        </td>
                                        <td class="w50">
                                            <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                                        </td>
                                        <td class="">Roger Rover</td>
                                        <td class="">roger@company.com</td>
                                        <td class="">12/03/2014</td>
                                        <td class="">33</td>
                                        <td class="">$17,100</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> In-Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <label class="option block mn">
                                                <input type="checkbox" name="mobileos" value="FR">
                                                <span class="checkbox mn"></span>
                                            </label>
                                        </td>
                                        <td class="w50">
                                            <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/2.jpg">
                                        </td>
                                        <td class="">Laura Smileton</td>
                                        <td class="">laura@company.com</td>
                                        <td class="">12/03/2014</td>
                                        <td class="">12</td>
                                        <td class="">$3,100</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Suspended
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <label class="option block mn">
                                                <input type="checkbox" name="mobileos" value="FR">
                                                <span class="checkbox mn"></span>
                                            </label>
                                        </td>
                                        <td class="w50">
                                            <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                                        </td>
                                        <td class="">Dave Robert</td>
                                        <td class="">dave@company.com</td>
                                        <td class="">12/03/2014</td>
                                        <td class="">222</td>
                                        <td class="">$3,600</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Suspended
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="active">
                                                        <a href="#">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suspend</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Remove</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                    <!--div class="col-md-3">
                        <div class="panel bg-warning light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-envelope"></i> </div>
                                <h2 class="mt15 lh15"> <b>714</b> </h2>
                                <h5 class="text-muted">Comments</h5>
                            </div>
                        </div>
                    </div-->
                </div>

                <!-- Admin-panels -->
                <div class="admin-panels fade-onload sb-l-o-full">

                    <!-- full width widgets -->
                    <div class="row">

                        <!-- Three panes -->
                        <div class="col-md-12 admin-grid">
                            <div class="panel sort-disable" id="p0">
                                <div class="panel-heading">
                                    <span class="panel-title">Data Panel Widget</span>
                                </div>
                                <div class="panel-body mnw700 of-a">
                                    <div class="row">

                                        <!-- Chart Column -->
                                        <div class="col-md-4 pln br-r mvn15">
                                            <h5 class="ml5 mt20 ph10 pb5 br-b fw700">Visitors <small class="pull-right fw600">13,253 <span class="text-primary">(8,251 unique)</span> </small> </h5>
                                            <div id="high-column2" style="width: 100%; height: 255px; margin: 0 auto"></div>
                                        </div>

                                        <!-- Multi Text Column -->
                                        <div class="col-md-4 br-r">
                                            <h5 class="mt5 mbn ph10 pb5 br-b fw700">Top Referrals <small class="pull-right fw700 text-primary">View Report </small> </h5>
                                            <table class="table mbn tc-med-1 tc-bold-last tc-fs13-last">
                                                <thead>
                                                    <tr class="hidden">
                                                        <th>Source</th>
                                                        <th>Count</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><i class="fa fa-circle text-warning fs8 pr15"></i>
                                                            <span>www.google.com</span>
                                                        </td>
                                                        <td>1,926</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-circle text-warning fs8 pr15"></i>
                                                            <span>www.yahoo.com</span>
                                                        </td>
                                                        <td>1,254</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-circle text-warning fs8 pr15"></i>
                                                            <span>www.themeforest.com</span>
                                                        </td>
                                                        <td>783</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h5 class="mt15 mbn ph10 pb5 br-b fw700">Top Search Terms <small class="pull-right fw700 text-primary">View Report </small> </h5>
                                            <table class="table mbn tc-med-1 tc-bold-last tc-fs13-last">
                                                <thead>
                                                    <tr class="hidden">
                                                        <th>Source</th>
                                                        <th>Count</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><i class="fa fa-circle text-warning fs8 pr15"></i>
                                                            <span>admin theme</span>
                                                        </td>
                                                        <td>988</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-circle text-warning fs8 pr15"></i>
                                                            <span>admin dashboard</span>
                                                        </td>
                                                        <td>612</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-circle text-warning fs8 pr15"></i>
                                                            <span>admin template</span>
                                                        </td>
                                                        <td>256</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Flag/Icon Column -->
                                        <div class="col-md-4">
                                            <h5 class="mt5 ph10 pb5 br-b fw700">Traffic Sources <small class="pull-right fw700 text-primary">View Stats </small> </h5>
                                            <table class="table mbn">
                                                <thead>
                                                    <tr class="hidden">
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="flag-xs flag-us mr5 va-b"></span>United States</td>
                                                        <td class="fs15 fw700 text-right">24%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="flag-xs flag-de mr5 va-b"></span>Germany</td>
                                                        <td class="fs15 fw700 text-right">7%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="flag-xs flag-fr mr5 va-b"></span>France</td>
                                                        <td class="fs15 fw700 text-right">14%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="flag-xs flag-tr mr5 va-b"></span>Spain</td>
                                                        <td class="fs15 fw700 text-right">31%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="flag-xs flag-es mr5 va-b"></span>Turkey</td>
                                                        <td class="fs15 fw700 text-right">22%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="flag-xs flag-us mr5 va-b"></span>United States</td>
                                                        <td class="fs15 fw700 text-right">24%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Icon Column -->
                                        <div class="col-md-4 hidden">
                                            <h5 class="mt5 ph10 pb5 br-b fw700">Content Viewed <small class="pull-right fw700 text-primary">Refresh </small> </h5>
                                            <table class="table mbn">
                                                <thead>
                                                    <tr class="hidden">
                                                        <th class="mw30">#</th>
                                                        <th>First Name</th>
                                                        <th>Revenue</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fs17 text-center w30">
                                                            <span class="fa fa-desktop text-warning"></span>
                                                        </td>
                                                        <td class="va-m fw600 text-muted">Television</td>
                                                        <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-up text-info pr10"></i>$855,913</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs17 text-center">
                                                            <span class="fa fa-microphone text-primary"></span>
                                                        </td>
                                                        <td class="va-m fw600 text-muted">Radio</td>
                                                        <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-down text-danger pr10"></i>$349,712</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs17 text-center">
                                                            <span class="fa fa-newspaper-o text-info"></span>
                                                        </td>
                                                        <td class="va-m fw600 text-muted">Newspaper</td>
                                                        <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-up text-info pr10"></i>$1,259,742</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs17 text-center">
                                                            <span class="fa fa-facebook text-alert"></span>
                                                        </td>
                                                        <td class="va-m fw600 text-muted">Social Media</td>
                                                        <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-up text-info pr10"></i>$3,512,672</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs17 text-center">
                                                            <span class="fa fa-bank text-alert"></span>
                                                        </td>
                                                        <td class="va-m fw600 text-muted">Investments</td>
                                                        <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-up text-info pr10"></i>$3,512,672</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: .col-md-12.admin-grid -->

                    </div>
                    <!-- end: .row -->

                    <!-- partial width widgets -->
                    <div class="row">

                        <div class="col-md-6 col-lg-5 admin-grid">

                            <!-- Circle Stats -->
                            <div class="panel" id="p5">
                                <div class="panel-heading">
                                    <span class="panel-title">Circulars</span>
                                </div>
                                <div class="panel-body">
                                    <div class="mb20 text-right">
                                        <span class="fs11 text-muted ml10"><i class="fa fa-circle text-primary fs12 pr5"></i> Facebook</span>
                                        <span class="fs11 text-muted ml10"><i class="fa fa-circle text-info fs12 pr5"></i> Twitter</span>
                                        <span class="fs11 text-muted ml10"><i class="fa fa-circle text-warning fs12 pr5"></i> Google+</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <div class="info-circle" id="c1" value="80" data-circle-color="primary"></div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="info-circle" id="c2" value="30" data-circle-color="info"></div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="info-circle" id="c3" value="55" data-circle-color="warning"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Column Graph -->
                            <div class="panel" id="p6">
                                <div class="panel-heading">
                                    <span class="panel-title"><i class="fa fa-pencil hidden"></i> Column Graph</span>
                                </div>
                                <div class="panel-body pn">
                                    <div class="row table-layout">
                                        <div class="col-xs-5 va-m">
                                            <div id="high-column" style="width: 100%; height: 197px; margin: 0 auto"></div>
                                        </div>
                                        <div class="col-xs-7 br-l pn">
                                            <div class="admin-form">
                                                <!-- Panel Break Field(Hidden) -->
                                                <label class="field prepend-icon hidden">
                                                    <input type="text" name="firstname" id="firstname" class="gui-input br-n br-b" placeholder="Add Network">
                                                    <label for="firstname" class="field-icon"><i class="fa fa-plus"></i> </label>
                                                </label>
                                                <!-- Panel Break Smart Widget -->
                                                <div class="smart-widget sm-right smr-50">
                                                    <label class="field">
                                                        <input type="text" name="sub" id="sub" class="gui-input br-n br-b" placeholder="Add Social Network">
                                                    </label>
                                                    <button type="submit" class="button br-n br-b br-l"> <i class="fa fa-plus"></i> </button>
                                                </div>
                                            </div>
                                            <table class="table mbn tc-med-1 tc-bold-last">
                                                <thead>
                                                    <tr class="hidden">
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span class="fa fa-circle text-warning fs14 mr10"></span>Behance</td>
                                                        <td>24%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="fa fa-circle text-info fs14 mr10"></span>Twitter</td>
                                                        <td>7%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="fa fa-circle text-primary fs14 mr10"></span>Facebook</td>
                                                        <td>14%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="fa fa-circle text-alert fs14 mr10"></span>Dribble</td>
                                                        <td>21%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stats Top Graph Bot -->
                            <div class="panel" id="p7">
                                <div class="panel-heading">
                                    <span class="panel-title"><i class="fa fa-pencil hidden"></i> Area Graph</span>
                                </div>
                                <div class="panel-menu hidden">
                                    <div class="chart-legend" data-chart-id="#high-line3">
                                        <a data-chart-id="0" class="legend-item btn btn-sm btn-primary mr10">Data 1</a>
                                        <a data-chart-id="0" class="legend-item btn btn-info btn-sm">Data 2</a>
                                    </div>
                                </div>
                                <div class="panel-body pn">
                                    <div class="br-b admin-form">
                                        <div class="smart-widget sm-right smr-50">
                                            <label class="field">
                                                <input type="text" name="sub" id="sub" class="gui-input br-n" placeholder="Search State">
                                            </label>
                                            <button type="submit" class="button br-n br-l"> <i class="fa fa-caret-down"></i> </button>
                                        </div>
                                        <table class="table mbn br-t">
                                            <thead>
                                                <tr class="hidden">
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="va-m fw600 text-muted">
                                                        <span class="fa fa-female text-primary fs14 ml5 mr10"></span>Male</td>
                                                    <td class="fs14 fw700 text-right">54%</td>
                                                </tr>
                                                <tr>
                                                    <td class="va-m fw600 text-muted">
                                                        <span class="fa fa-male text-info fs14 ml5 mr10"></span>Female</td>
                                                    <td class="fs14 fw700 text-right">46%</td>
                                                </tr>
                                                <tr>
                                                    <td class="va-m fw600 text-muted">
                                                        <span class="fa fa-child text-warning fs15 ml5 mr10"></span>Unemployed</td>
                                                    <td class="fs14 fw700 text-right">14%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="high-line3" style="width: 100%; height: 210px; margin: 0 auto"></div>
                                </div>
                            </div>

                            <!-- Column Graph -->
                            <div class="panel" id="p8">
                                <div class="panel-heading">
                                    <span class="panel-title"><i class="fa fa-pencil hidden"></i> State Icon</span>
                                </div>
                                <div class="panel-body pn">
                                    <div class="row table-layout">
                                        <div class="col-xs-4 text-center posr">
                                            <span data-toggle="tooltip" data-placement="top" title="Missouri" class="stateface stateface-mo fs70 text-info light t-center"></span>
                                        </div>
                                        <div class="col-xs-8 br-l pn admin-form">
                                            <div class="smart-widget sm-right smr-50">
                                                <label class="field">
                                                    <input type="text" name="sub" id="sub" class="gui-input br-n br-b" placeholder="Search State">
                                                </label>
                                                <button type="submit" class="button br-n br-b br-l"> <i class="fa fa-caret-down"></i> </button>
                                            </div>
                                            <table class="table mbn">
                                                <thead>
                                                    <tr class="hidden">
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="fa fa-female text-primary fs14 mr10"></span>Male</td>
                                                        <td class="fs14 fw700 text-right">54%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="fa fa-male text-info fs14 mr10"></span>Female</td>
                                                        <td class="fs14 fw700 text-right">46%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="fa fa-child text-warning fs15 mr10"></span>Unemployed</td>
                                                        <td class="fs14 fw700 text-right">14%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Geo Map + Table Stats -->
                            <div class="panel" id="p9">
                                <div class="panel-heading">
                                    <span class="panel-title"><i class="fa fa-pencil hidden"></i> Visitor Geography</span>
                                </div>
                                <div class="panel-body">
                                    <div id="WidgetMap" class="jvector-colors hide-jzoom" style="width: 100%; height: 220px;"></div>
                                </div>
                                <div class="panel-menu admin-form pn">
                                    <!-- Panel Break Field(Hidden) -->
                                    <label class="field prepend-icon hidden">
                                        <input type="text" name="firstname" id="firstname" class="gui-input br-n br-b" placeholder="Add Network">
                                        <label for="firstname" class="field-icon"><i class="fa fa-plus"></i> </label>
                                    </label>

                                    <!-- Panel Break Smart Widget -->
                                    <div class="smart-widget sm-right smr-50">
                                        <label class="field">
                                            <input type="text" name="sub" id="sub" class="gui-input br-n" placeholder="United States of America" disabled>
                                        </label>
                                        <button type="submit" class="button br-n br-l"> <i class="fa fa-caret-down"></i> </button>
                                    </div>
                                </div>
                                <div class="panel-body pn">
                                    <table class="table mbn">
                                        <thead>
                                            <tr class="hidden">
                                                <th>#</th>
                                                <th>First Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="va-m fw600 text-muted">
                                                    <span class="fa fa-circle text-alert fs14 mr10"></span>New York</td>
                                                <td class="fs15 fw700 text-right">7%</td>
                                            </tr>
                                            <tr>
                                                <td class="va-m fw600 text-muted">
                                                    <span class="fa fa-circle text-info fs14 mr10"></span>Missouri</td>
                                                <td class="fs15 fw700 text-right">14%</td>
                                            </tr>
                                            <tr>
                                                <td class="va-m fw600 text-muted">
                                                    <span class="fa fa-circle text-primary fs14 mr10"></span>Texas</td>
                                                <td class="fs15 fw700 text-right">7%</td>
                                            </tr>
                                            <tr>
                                                <td class="va-m fw600 text-muted">
                                                    <span class="fa fa-circle text-warning fs14 mr10"></span>California</td>
                                                <td class="fs15 fw700 text-right">24%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!-- end: .col-md-5-->

                        <div class="col-md-6 col-lg-4 admin-grid">

                            <!-- Pie Chart -->
                            <div class="panel" id="p10">
                                <div class="panel-heading">
                                    <span class="panel-title">Pie Chart</span>
                                </div>
                                <div class="panel-body pn">
                                    <div id="high-pie" style="width: 100%; height: 200px; margin: 0 auto"></div>
                                </div>
                            </div>

                            <!-- Column Graph -->
                            <div class="panel" id="p11">
                                <div class="panel-heading">
                                    <span class="panel-title"><i class="fa fa-pencil hidden"></i> Response Time</span>
                                </div>
                                <div class="panel-menu pn bg-white">
                                    <ul class="nav nav-justified text-center fw600 chart-legend" data-chart-id="#high-column3">
                                        <li>
                                            <a href="#" class="legend-item" data-chart-id="0"> Tech </a>
                                        </li>
                                        <li class="br-l">
                                            <a href="#" class="legend-item" data-chart-id="1"> Support </a>
                                        </li>
                                        <li class="br-l">
                                            <a href="#" class="legend-item" data-chart-id="2"> Service </a>
                                        </li>
                                        <li class="br-l">
                                            <a href="#" class="legend-item" data-chart-id="3"> Another </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="panel-body pbn">
                                    <div id="high-column3" style="width: 100%; height: 400px; margin: 0 auto"></div>
                                    <p class="hidden br-t pt15 text-muted text-center mh20 fw400">A percent measure of tickets with <b class="text-info">first</b> reply time</p>
                                </div>
                                <div class="panel-footer p15">
                                    <p class="text-muted text-center mbn">A percent measure of tickets with <b class="text-info">first</b> reply time</p>
                                </div>
                            </div>

                            <!-- Bar Graph -->
                            <div class="panel" id="p12">
                                <div class="panel-heading">
                                    <span class="panel-title"><i class="fa fa-pencil hidden"></i> Bar Graph</span>
                                </div>
                                <div class="panel-menu">
                                    <div class="chart-legend" data-chart-id="#high-bars">
                                        <a data-chart-id="0" class="legend-item btn btn-warning btn-sm mr5">Data 1</a>
                                        <a data-chart-id="1" class="legend-item btn btn-primary btn-sm mr5">Data 2</a>
                                        <a data-chart-id="2" class="legend-item btn btn-info btn-sm">Data 3</a>
                                    </div>
                                </div>
                                <div class="panel-body pn">
                                    <div id="high-bars" style="width: 100%; height: 140px; margin: 0 auto"></div>
                                </div>
                            </div>

                            <!-- Sparklines -->
                            <div class="panel" id="p13">
                                <div class="panel-heading">
                                    <span class="panel-title">Sparklines</span>
                                </div>
                                <div class="panel-body pn of-a">
                                    <table class="table mbn">
                                        <thead>
                                            <tr class="hidden">
                                                <th class="mw30">1</th>
                                                <th>Data</th>
                                                <th>Sparkline</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fs18 text-center w30">
                                                    <span class="fa fa-desktop text-warning"></span>
                                                </td>
                                                <td class="fw600 text-muted">Desktop Viewers</td>
                                                <td>
                                                    <span class="inlinesparkline pull-right" data-spark-color="warning" values="5,6,7,9,9,5,3,2,2,4,6"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fs18 text-center">
                                                    <span class="fa fa-tablet text-primary"></span>
                                                </td>
                                                <td class="fw600 text-muted">Tablet Viewers</td>
                                                <td>
                                                    <span class="inlinesparkline pull-right" data-spark-color="info" values="4,6,7,9,9,5,3,2,2,4,6,7"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fs18 text-center">
                                                    <span class="fa fa-phone text-info"></span>
                                                </td>
                                                <td class="fw600 text-muted">Customer Support</td>
                                                <td>
                                                    <span class="inlinesparkline pull-right" data-spark-color="primary" values="7,3,2,2,4,6,7,6,7,9"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fs18 text-center">
                                                    <span class="fa fa-rocket text-success"></span>
                                                </td>
                                                <td class="fw600 text-muted">Rocket Explosions</td>
                                                <td>
                                                    <span class="inlinesparkline pull-right" data-spark-color="alert" values="2,6,7,9,9,5,3,2,2,4,6,7"></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Area Graph -->
                            <div class="panel" id="p14">
                                <div class="panel-heading">
                                    <span class="panel-title"><i class="fa fa-pencil hidden"></i> Area Graph</span>
                                </div>
                                <div class="panel-menu">
                                    <div class="chart-legend" data-chart-id="#high-area">
                                        <a data-chart-id="0" class="legend-item btn btn-sm btn-warning ph20 mr10">Data 1</a>
                                        <a data-chart-id="1" class="legend-item btn btn-sm btn-primary mr10">Data 2</a>
                                        <a data-chart-id="2" class="legend-item btn btn-sm btn-info mr10">Data 3</a>
                                    </div>
                                </div>
                                <div class="panel-body pn">
                                    <div id="high-area" style="width: 100%; height: 230px; margin: 0 auto"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end: .col-md-4-->

                        <div class="col-md-6 col-lg-3 admin-grid">

                            <!-- Dot List -->
                            <div class="panel" id="p15">
                                <div class="panel-heading">
                                    <span class="panel-title"><i class="fa fa-pencil hidden"></i> Dot List</span>
                                </div>
                                <div class="panel-menu admin-form pn">
                                    <!-- Panel Break Smart Widget -->
                                    <div class="smart-widget sm-right smr-50">
                                        <label class="field">
                                            <input type="text" name="sub" id="sub" class="gui-input br-n" placeholder="Add Social Network">
                                        </label>
                                        <button type="submit" class="button br-n br-l"> <i class="fa fa-plus"></i> </button>
                                    </div>
                                </div>
                                <div class="panel-body pn">
                                    <table class="table mbn tc-med-1 tc-bold-last">
                                        <thead>
                                            <tr class="hidden">
                                                <th>#</th>
                                                <th>First Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-circle text-warning fs14 mr10"></span>Behance</td>
                                                <td>24%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-circle text-info fs14 mr10"></span>Twitter</td>
                                                <td>7%</td>
                                            </tr>
                                            <tr>
                                                <td class="va-m fw600 text-muted">
                                                    <span class="fa fa-circle text-primary fs14 mr10"></span>Facebook</td>
                                                <td>14%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Country List -->
                            <div class="panel" id="p16">
                                <div class="panel-heading">
                                    <span class="panel-title">Country List</span>
                                </div>
                                <div class="panel-body pn">
                                    <table class="table mbn tc-med-1 tc-bold-last">
                                        <thead>
                                            <tr class="hidden">
                                                <th>#</th>
                                                <th>First Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="flag-xs flag-us mr5 va-b"></span>United States</td>
                                                <td>24%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="flag-xs flag-de mr5 va-b"></span>Germany</td>
                                                <td>7%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="flag-xs flag-fr mr5 va-b"></span>France</td>
                                                <td>14%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="flag-xs flag-tr mr5 va-b"></span>Spain</td>
                                                <td>31%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="flag-xs flag-es mr5 va-b"></span>Turkey</td>
                                                <td>22%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Search List -->
                            <div class="panel" id="p17">
                                <div class="panel-heading">
                                    <span class="panel-title">Crawler List</span>
                                </div>
                                <div class="panel-body pn">
                                    <table class="table mbn tc-med-1 tc-bold-last">
                                        <thead>
                                            <tr class="hidden">
                                                <th>#</th>
                                                <th>First Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="favicons google va-t mr10"></span>United States</td>
                                                <td>24%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="favicons google va-t mr10"></span>Germany</td>
                                                <td>7%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="favicons yahoo va-t mr10"></span>France</td>
                                                <td>14%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="favicons google va-t mr10"></span>Spain</td>
                                                <td>31%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="favicons bing va-t mr10"></span>Turkey</td>
                                                <td>22%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Browser List -->
                            <div class="panel" id="p18">
                                <div class="panel-heading">
                                    <span class="panel-title">Browser List</span>
                                </div>
                                <div class="panel-body pn">
                                    <table class="table mbn tc-med-1 tc-bold-2">
                                        <thead>
                                            <tr class="hidden">
                                                <th>#</th>
                                                <th>First Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="favicons chrome va-t mr10"></span>United States</td>
                                                <td>39%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="favicons firefox va-t mr10"></span>Germany</td>
                                                <td>43%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="favicons ie va-t mr10"></span>France</td>
                                                <td>14%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="favicons safari va-t mr10"></span>Spain</td>
                                                <td>3%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Icon List -->
                            <div class="panel" id="p19">
                                <div class="panel-heading">
                                    <span class="panel-title">Icon List</span>
                                </div>
                                <div class="panel-body pn">
                                    <table class="table mbn tc-icon-1 tc-med-2 tc-bold-last">
                                        <thead>
                                            <tr class="hidden">
                                                <th class="mw30">#</th>
                                                <th>First Name</th>
                                                <th>Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-desktop text-warning"></span>
                                                </td>
                                                <td>T.V.</td>
                                                <td><i class="fa fa-caret-up text-info pr10"></i>$855,913</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-microphone text-primary"></span>
                                                </td>
                                                <td>Radio</td>
                                                <td><i class="fa fa-caret-down text-danger pr10"></i>$349,712</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-newspaper-o text-info"></span>
                                                </td>
                                                <td>Paper</td>
                                                <td><i class="fa fa-caret-up text-info pr10"></i>$95,342</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-android text-alert"></span>
                                                </td>
                                                <td>Android</td>
                                                <td><i class="fa fa-caret-up text-info pr10"></i>$452,672</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-power-off text-system"></span>
                                                </td>
                                                <td>Digital</td>
                                                <td><i class="fa fa-caret-up text-info pr10"></i>$12,352</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Dot Stats -->
                            <div class="panel" id="p20">
                                <div class="panel-heading">
                                    <span class="panel-title"><i class="fa fa-pencil hidden"></i> Dot/Addon Stats</span>
                                </div>
                                <div class="panel-body pn">
                                    <table class="table mbn tc-med-1 tc-bold-last ">
                                        <thead>
                                            <tr class="hidden">
                                                <th>#</th>
                                                <th>First Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-circle text-warning fs14 mr10"></span>Behance</td>
                                                <td>24%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-circle text-info fs14 mr10"></span>Twitter</td>
                                                <td>7%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-circle text-primary fs14 mr10"></span>Facebook</td>
                                                <td>14%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-circle text-alert fs14 mr10"></span>Google Plus</td>
                                                <td>24%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-circle text-system fs14 mr10"></span>Dribble</td>
                                                <td>7%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Text List -->
                            <div class="panel" id="p21">
                                <div class="panel-heading">
                                    <span class="panel-title">Text List</span>
                                </div>
                                <div class="panel-body pn">
                                    <table class="table mbn tc-list-1 tc-text-muted-2 tc-fw600-2">
                                        <thead>
                                            <tr class="hidden">
                                                <th class="w30">#</th>
                                                <th>First Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Lorem ipsum dolor sit</td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Lorem ipsc beyond ray</td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Amet, consectetur adipi</td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Lorem consec iscing</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end: .col-md-3-->

                    </div>
                    <!-- end: .row -->

                </div>

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

        <!-- Start: Right Sidebar -->
        <aside id="sidebar_right" class="nano">
            <div class="sidebar_right_content nano-content">
                <div class="tab-block sidebar-block br-n">
                    <ul class="nav nav-tabs tabs-border nav-justified hidden">
                        <li class="active">
                            <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                        </li>
                    </ul>
                    <div class="tab-content br-n">
                        <div id="sidebar-right-tab1" class="tab-pane active">

                            <h5 class="title-divider text-muted mb20"> Server Statistics <span class="pull-right"> 2013 <i class="fa fa-caret-down ml5"></i> </span> </h5>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                    <span class="fs11">DB Request</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                    <span class="fs11 text-left">Server Load</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                    <span class="fs11 text-left">Server Connections</span>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">132</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 13.2% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">212</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 25.6% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">82.5</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-danger mn"> <i class="fa fa-caret-down"></i> 17.9% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt40 mb20"> Server Statistics <span class="pull-right text-primary fw600">USA</span> </h5>
                            <div id="sidebar-right-map" class="hide-jzoom" style="width: 100%; height: 180px;"></div>

                        </div>
                        <div id="sidebar-right-tab2" class="tab-pane"></div>
                        <div id="sidebar-right-tab3" class="tab-pane"></div>
                    </div>
                    <!-- end: .tab-content -->
                </div>
            </div>
        </aside>
        <!-- End: Right Sidebar -->

    </div>
    <!-- End: Main -->

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
