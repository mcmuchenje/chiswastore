@extends('store/layout')

@section('banner')

<section class="bg_light_yellow breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="/store/images/breadcrumb_bg.png" style="background-image: url(&quot;/store/images/breadcrumb_bg.png&quot;); background-position: center center; background-size: cover;">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-12 text-center">
            	<div class="page-title">
            		<h1>Checkout</h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

@endsection

@section('content')

<section>
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="toggle_info">
                <span>Returning customer? <a href="#loginform" data-toggle="collapse" class="collapsed" aria-expanded="false">Click here to login</a></span>
              </div>
              <div class="panel-collapse collapse login_form mb-3" id="loginform">
                  <div class="panel-body">
                      <form method="post" class="login">
                          <p>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
      
                          <div class="form-group">
                              <label>Username or email <span class="required">*</span></label>
                              <input type="text" required="" class="form-control" name="username">
                          </div>
                          <div class="form-group">
                              <label>Password <span class="required">*</span></label>
                              <input class="form-control" required="" type="password" name="password">
                          </div>
                          <div class="form-group">
                              <button type="submit" class="btn btn-default btn-block" name="login" value="Log in">Log in</button>
                          </div>
                          <div class="login_footer">
                              <a href="#">Lost your password?</a>
                              <label>
                                  <input name="rememberme" type="checkbox" value="forever"> <span>Remember me</span>
                              </label>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="heading_s2">
              <h5>Billing Details</h5>
              </div>
              <form method="post">
                <div class="row">
                      <div class="form-group col-md-6">
                          <label>First name <span class="required">*</span></label>
                          <input type="text" required="" class="form-control" name="fname" value="">
                      </div>
                      <div class="form-group col-md-6">
                          <label>Last name <span class="required">*</span></label>
                          <input type="text" required="" class="form-control" name="lname" value="">
                      </div>
                      <div class="form-group col-md-6">
                          <label>Company Name:</label>
                          <input class="form-control" required="" type="text" name="cname">
                      </div>
                      <div class="form-group col-md-6">
                          <label>Country <span class="required">*</span></label>
                          <div class="custom_select">
                              <select>
                                  <option value="">Choose a option...</option>
                                  <option value="AX">Aland Islands</option>
                                  <option value="AF">Afghanistan</option>
                                  <option value="AL">Albania</option>
                                  <option value="DZ">Algeria</option>
                                  <option value="AD">Andorra</option>
                                  <option value="AO">Angola</option>
                                  <option value="AI">Anguilla</option>
                                  <option value="AQ">Antarctica</option>
                                  <option value="AG">Antigua and Barbuda</option>
                                  <option value="AR">Argentina</option>
                                  <option value="AM">Armenia</option>
                                  <option value="AW">Aruba</option>
                                  <option value="AU">Australia</option>
                                  <option value="AT">Austria</option>
                                  <option value="AZ">Azerbaijan</option>
                                  <option value="BS">Bahamas</option>
                                  <option value="BH">Bahrain</option>
                                  <option value="BD">Bangladesh</option>
                                  <option value="BB">Barbados</option>
                                  <option value="BY">Belarus</option>
                                  <option value="PW">Belau</option>
                                  <option value="BE">Belgium</option>
                                  <option value="BZ">Belize</option>
                                  <option value="BJ">Benin</option>
                                  <option value="BM">Bermuda</option>
                                  <option value="BT">Bhutan</option>
                                  <option value="BO">Bolivia</option>
                                  <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                  <option value="BA">Bosnia and Herzegovina</option>
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
                                  <option value="KY">Cayman Islands</option>
                                  <option value="CF">Central African Republic</option>
                                  <option value="TD">Chad</option>
                                  <option value="CL">Chile</option>
                                  <option value="CN">China</option>
                                  <option value="CX">Christmas Island</option>
                                  <option value="CC">Cocos (Keeling) Islands</option>
                                  <option value="CO">Colombia</option>
                                  <option value="KM">Comoros</option>
                                  <option value="CG">Congo (Brazzaville)</option>
                                  <option value="CD">Congo (Kinshasa)</option>
                                  <option value="CK">Cook Islands</option>
                                  <option value="CR">Costa Rica</option>
                                  <option value="HR">Croatia</option>
                                  <option value="CU">Cuba</option>
                                  <option value="CW">CuraÇao</option>
                                  <option value="CY">Cyprus</option>
                                  <option value="CZ">Czech Republic</option>
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
                                  <option value="GT">Guatemala</option>
                                  <option value="GG">Guernsey</option>
                                  <option value="GN">Guinea</option>
                                  <option value="GW">Guinea-Bissau</option>
                                  <option value="GY">Guyana</option>
                                  <option value="HT">Haiti</option>
                                  <option value="HM">Heard Island and McDonald Islands</option>
                                  <option value="HN">Honduras</option>
                                  <option value="HK">Hong Kong</option>
                                  <option value="HU">Hungary</option>
                                  <option value="IS">Iceland</option>
                                  <option value="IN">India</option>
                                  <option value="ID">Indonesia</option>
                                  <option value="IR">Iran</option>
                                  <option value="IQ">Iraq</option>
                                  <option value="IM">Isle of Man</option>
                                  <option value="IL">Israel</option>
                                  <option value="IT">Italy</option>
                                  <option value="CI">Ivory Coast</option>
                                  <option value="JM">Jamaica</option>
                                  <option value="JP">Japan</option>
                                  <option value="JE">Jersey</option>
                                  <option value="JO">Jordan</option>
                                  <option value="KZ">Kazakhstan</option>
                                  <option value="KE">Kenya</option>
                                  <option value="KI">Kiribati</option>
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
                                  <option value="MO">Macao S.A.R., China</option>
                                  <option value="MK">Macedonia</option>
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
                                  <option value="MD">Moldova</option>
                                  <option value="MC">Monaco</option>
                                  <option value="MN">Mongolia</option>
                                  <option value="ME">Montenegro</option>
                                  <option value="MS">Montserrat</option>
                                  <option value="MA">Morocco</option>
                                  <option value="MZ">Mozambique</option>
                                  <option value="MM">Myanmar</option>
                                  <option value="NA">Namibia</option>
                                  <option value="NR">Nauru</option>
                                  <option value="NP">Nepal</option>
                                  <option value="NL">Netherlands</option>
                                  <option value="AN">Netherlands Antilles</option>
                                  <option value="NC">New Caledonia</option>
                                  <option value="NZ">New Zealand</option>
                                  <option value="NI">Nicaragua</option>
                                  <option value="NE">Niger</option>
                                  <option value="NG">Nigeria</option>
                                  <option value="NU">Niue</option>
                                  <option value="NF">Norfolk Island</option>
                                  <option value="KP">North Korea</option>
                                  <option value="NO">Norway</option>
                                  <option value="OM">Oman</option>
                                  <option value="PK">Pakistan</option>
                                  <option value="PS">Palestinian Territory</option>
                                  <option value="PA">Panama</option>
                                  <option value="PG">Papua New Guinea</option>
                                  <option value="PY">Paraguay</option>
                                  <option value="PE">Peru</option>
                                  <option value="PH">Philippines</option>
                                  <option value="PN">Pitcairn</option>
                                  <option value="PL">Poland</option>
                                  <option value="PT">Portugal</option>
                                  <option value="QA">Qatar</option>
                                  <option value="IE">Republic of Ireland</option>
                                  <option value="RE">Reunion</option>
                                  <option value="RO">Romania</option>
                                  <option value="RU">Russia</option>
                                  <option value="RW">Rwanda</option>
                                  <option value="ST">São Tomé and Príncipe</option>
                                  <option value="BL">Saint Barthélemy</option>
                                  <option value="SH">Saint Helena</option>
                                  <option value="KN">Saint Kitts and Nevis</option>
                                  <option value="LC">Saint Lucia</option>
                                  <option value="SX">Saint Martin (Dutch part)</option>
                                  <option value="MF">Saint Martin (French part)</option>
                                  <option value="PM">Saint Pierre and Miquelon</option>
                                  <option value="VC">Saint Vincent and the Grenadines</option>
                                  <option value="SM">San Marino</option>
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
                                  <option value="GS">South Georgia/Sandwich Islands</option>
                                  <option value="KR">South Korea</option>
                                  <option value="SS">South Sudan</option>
                                  <option value="ES">Spain</option>
                                  <option value="LK">Sri Lanka</option>
                                  <option value="SD">Sudan</option>
                                  <option value="SR">Suriname</option>
                                  <option value="SJ">Svalbard and Jan Mayen</option>
                                  <option value="SZ">Swaziland</option>
                                  <option value="SE">Sweden</option>
                                  <option value="CH">Switzerland</option>
                                  <option value="SY">Syria</option>
                                  <option value="TW">Taiwan</option>
                                  <option value="TJ">Tajikistan</option>
                                  <option value="TZ">Tanzania</option>
                                  <option value="TH">Thailand</option>
                                  <option value="TL">Timor-Leste</option>
                                  <option value="TG">Togo</option>
                                  <option value="TK">Tokelau</option>
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
                                  <option value="GB">United Kingdom (UK)</option>
                                  <option value="US">USA (US)</option>
                                  <option value="UY">Uruguay</option>
                                  <option value="UZ">Uzbekistan</option>
                                  <option value="VU">Vanuatu</option>
                                  <option value="VA">Vatican</option>
                                  <option value="VE">Venezuela</option>
                                  <option value="VN">Vietnam</option>
                                  <option value="WF">Wallis and Futuna</option>
                                  <option value="EH">Western Sahara</option>
                                  <option value="WS">Western Samoa</option>
                                  <option value="YE">Yemen</option>
                                  <option value="ZM">Zambia</option>
                                  <option value="ZW">Zimbabwe</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-group col-md-6">
                          <label>Address: <span class="required">*</span></label>
                          <input type="text" value="" class="form-control" name="billing_address" required="">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Address line2:</label>
                          <input type="text" value="" class="form-control" name="billing_address2" required="">
                      </div>
                      <div class="form-group col-md-6">
                          <label>City / Town: <span class="required">*</span></label>
                          <input class="form-control" required="" type="text" name="city">
                      </div>
                      <div class="form-group col-md-6">
                          <label>State / County</label>
                          <input class="form-control" required="" type="text" name="state">
                      </div>
                      <div class="form-group col-md-6">
                          <label>Postcode / ZIP <span class="required">*</span></label>
                          <input class="form-control" required="" type="text" name="zipcode">
                      </div>
                      <div class="form-group col-md-6">
                          <label>Phone <span class="required">*</span></label>
                          <input class="form-control" required="" type="text" name="phone">
                      </div>
                      <div class="form-group col-md-6">
                          <label>Email address <span class="required">*</span></label>
                          <input class="form-control" required="" type="text" name="email">
                      </div>
                    <div class="form-group col-md-12">
                          <label>
                              <input name="createaccount" id="createaccount" type="checkbox" value=""> <span> Create an account?</span>
                          </label>
                      </div>
                      <div class="form-group col-md-6 create-account" style="display: none;">
                          <label>Create account password <span class="required">*</span></label>
                          <input class="form-control" required="" type="password" placeholder="Password" name="password">
                      </div>
                  </div>
              </form>
          </div>
      </div>
      <div class="row">
        <div class="col-12">
            <div class="small_divider clearfix"></div>
          </div>
      </div>
      <div class="row">
        <div class="col-12">
            <div class="heading_s2">
              <h5>Your Orders</h5>
              </div>
              <div class="table-responsive order_table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                              <th>Product</th>
                              <th>Total</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                              <td>Fresh Organic Strawberry <span class="product-qty">x 2</span></td>
                              <td>$70.00</td>
                          </tr>
                          <tr>
                              <td>Fresh Organic Grapes <span class="product-qty">x 1</span></td>
                              <td>$40.00</td>
                          </tr>
                          <tr>
                              <td>Fresh Organic Cucumber <span class="product-qty">x 3</span></td>
                              <td>$156.00</td>
                          </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                            <th>SubTotal</th>
                              <td class="product-subtotal">$266.00</td>
                          </tr>
                          <tr>
                            <th>Shipping</th>
                              <td>Free Shipping</td>
                          </tr>
                        <tr>
                            <th>Total</th>
                              <td class="product-subtotal">$266.00</td>
                          </tr>
                      </tfoot>
                  </table>
              </div>
          </div>
      </div>
      <div class="row">
        <div class="col-12">
            <div class="small_divider clearfix"></div>
          </div>
      </div>
      <div class="row">
          <div class="col-12">
              <div class="payment_method">
                  <div class="custome-radio">
                    <form id="payment-form">
                      <div id="card-element"><!--Stripe.js injects the Card Element--></div>
                      <button id="submit">
                        <div class="spinner hidden" id="spinner"></div>
                        <span id="button-text">Pay now</span>
                      </button>
                      <p id="card-error" role="alert"></p>
                      <p class="result-message hidden">
                        Payment succeeded, see the result in your
                        <a href="" target="_blank">Stripe dashboard.</a> Refresh the page to pay again.
                      </p>
                    </form>
                  </div>
                  <div class="custome-radio">
                      <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="option5">
                      <label class="form-check-label" for="exampleRadios5">Paypal</label>
                      <p data-method="option5" class="payment-text">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                  </div>
              </div>
              <a href="#" class="btn btn-default">Place Order</a>
          </div>
      </div>
  </div>
</section>

@endsection