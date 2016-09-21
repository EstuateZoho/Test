<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Information</title>
   
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>

 </head>

  <body>
	<header class="header">  </header>
	
        <!-- start Header -->
        <div class="container-fluid" style="min-height:700px;">
			<div class="col-xs-12 col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1" style="margin-top: 5%;">
				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="panel panel-b">
						<div class="panel-heading new-panel-heading">
							<div id="account-info-panel" class="panel-body new-panel">
								<h3 class="panel-title panel-text">Account Summary</h3>
							</div>
						</div>
						<div class="panel-body" id="contact-info-panel" style="height: 225px;overflow-y: auto;">
							<ul class="list-group">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<li class="list-group-item list-bk">
										<b>Account Name : </b>
										<p id="AccountName"></p>		
									</li>
									<li class="list-group-item list-bk">
										<b>Account Number : </b>
										<p id="AccountNum"></p>	
										<input type="hidden" id="account" value="">
									</li>
									<li class="list-group-item list-bk">
										<b>Account Balance : </b>
										<p id="AccountBal"></p>
									</li>
								</div>	
								<div class="col-xs-12 col-sm-6 col-md-6">
									<li class="list-group-item list-bk">
										<b>Last Invoiced : </b>
										<p id="lastInv"></p>
									</li>
									<li class="list-group-item list-bk">
										<b>Last Payment Date : </b>
										<p id="LastPaid"></p>
									</li>
									<li class="list-group-item list-bk">
										<b>Last Payment : </b>
										<p id="LastPayment"></p>
									</li>
								</div>	
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="panel panel-b">
						<div class="panel-heading new-panel-heading">
							<div class="panel-body new-panel">
								<div class="row">
									<div style="float:left;">
										<h3 class="panel-title panel-text">Contact Info</h3>
									</div>
									<div style="float:right;">
										<button class="btn btn-secondary pull-right update_contact" id="updateContact">Update Contact Info</button>
										<button class="btn btn-secondary Cancel hidden">Cancel</button>&nbsp;									
										<button class="btn btn-secondary pull-right save-contact hidden">Save Changes</button>
									</div>
								</div>
								<div class="success_message row hidden">
									<div role="alert" class="alert alert-success">
										<span class="fa fa-check"></span> <span id="contact_success"></span>
									</div>
								</div>
								<div class="error_message row hidden">
									<div role="alert" class=" alert alert-warning">
										<span class="fa fa-exclamation-circle"></span> <span id="contact_error"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="panel-body" id="contact-info-panel" style="height: 225px;overflow-y: auto;">
							<ul class="list-group">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<li class="list-group-item list-bk">
										<b>First Name : </b>
										<p id="fname"></p>
										<input id="fname_input" class="contact-input hidden" type="text" value="">
									</li>
									<li class="list-group-item list-bk">
										<b>Last Name : </b>
										<p id="lname"></p>
										<input id="lname_input" class="contact-input hidden" type="text" value="">
									</li>
									<li class="list-group-item list-bk">
										<b>Email : </b>
										<p id="email"></p>
										<input id="email_input" class="contact-input hidden" type="text" value="">
									</li>

									<li class="list-group-item list-bk">
										<b>Phone : </b>
										<p id="phone"></p>
										<input id="phone_input" class="contact-input hidden" type="text" value="">
									</li>

									<li class="list-group-item list-bk">
										<input type="hidden" id="contact_id" value="">
									</li>
								</div>	
								<div class="col-xs-12 col-sm-6 col-md-6">
									<li class="list-group-item list-bk">
										<b>Address : </b>
										<p id="address"></p>
										<input id="address_input" class="contact-input hidden" type="text" value="">
									</li>
									<li class="list-group-item list-bk">
										<b>Country : </b>
										<p id="country"></p>
										<!--<input id="country_input" class="contact-input hidden" type="text" value="">-->
										<select id="country_input" name="country_input" class="form-control address-input contact-input hidden" onchange = "changeState();">
											<option ></option>
											<option >Afghanistan</option>
											<option >Albania</option>
											<option >American Samoa</option>
											<option >Andorra</option>
											<option >Anguilla</option>
											<option >Antarctica</option>
											<option >Antiqua and Barbuda</option>
											<option >Argentina</option>
											<option >Armenia</option>
											<option >Aruba</option>
											<option >Australia</option>
											<option >Austria</option>
											<option >Azerbaijan</option>
											<option >Bahamas</option>
											<option >Bahrain</option>
											<option >Bangladesh</option>
											<option >Barbados</option>
											<option >Benin</option>
											<option >Belarus</option>
											<option >Belize</option>
											<option >Belgium</option>
											<option >Bermuda</option>
											<option >Bhutan</option>
											<option >Bolivia</option>
											<option >Bouvet Islands</option>
											<option >Brazil</option>
											<option >British Indian Ocean Territory</option>
											<option >British Virgin Islands</option>
											<option >Brunei</option>
											<option >Bulgaria</option>
											<option >Burkina Faso</option>
											<option >Burundi</option>
											<option >Canada</option>
											<option >Cambodia</option>
											<option >Cameroon</option>
											<option >Cape Verde</option>
											<option >Cayman Islands</option>
											<option >Central African Republic</option>
											<option >Chad</option>
											<option >Chile</option>
											<option >China</option>
											<option >Colombia</option>
											<option >Comoros</option>
											<option >Congo</option>
											<option >Costa Rica</option>
											<option >Cote D'Ivoire</option>
											<option >Croatia</option>
											<option >Cyprus</option>
											<option >Czech Republic</option>
											<option >Denmark</option>
											<option >Djibouti</option>
											<option >Dominica</option>
											<option >Dominican Republic</option>
											<option >Ecuador</option>
											<option >Egypt</option>
											<option >El Salvador</option>
											<option >Equatorial Guinea</option>
											<option >Eritrea</option>
											<option >Estonia Faroe Islands</option>
											<option >Ethiopia</option>
											<option >Falkland Islands</option>
											<option >Faroe Islands</option>
											<option >Federated States of Micronesia</option>
											<option >Fiji</option>
											<option >Finland</option>
											<option >France</option>
											<option >French Guiana</option>
											<option >French Polynesia</option>
											<option >Gabon</option>
											<option >Gambia</option>
											<option >Georgia</option>
											<option >Germany</option>
											<option >Ghana</option>
											<option >Gibraltar</option>
											<option >Greece</option>
											<option >Greenland</option>
											<option >Grenada</option>
											<option >Guadeloupe</option>
											<option >Guam</option>
											<option >Guatemala</option>
											<option >Guinea- Bissau</option>
											<option >Guyana</option>
											<option >Haiti</option>
											<option >Honduras</option>
											<option >Hong Kong</option>
											<option >Hungary</option>
											<option >Iceland</option>
											<option >India</option>
											<option >Indonesia</option>
											<option >Ireland</option>
											<option >Israel</option>
											<option >Italy</option>
											<option >Jamaica</option>
											<option >Japan</option>
											<option >Jordan</option>
											<option >Kazakhstan</option>
											<option >Kenya</option>
											<option >Kiribati</option>
											<option >Kuwait</option>
											<option >Kyrgyzstan</option>
											<option >Laos</option>
											<option >Latvia</option>
											<option >Lebanon</option>
											<option >Lesotho</option>
											<option >Liechtenstein</option>
											<option >Lithuania</option>
											<option >Luxembourg</option>
											<option >Macau</option>
											<option >Madagascar</option>
											<option >Malawi</option>
											<option >Malaysia</option>
											<option >Maldives</option>
											<option >Mali</option>
											<option >Malta</option>
											<option >Marshall Islands</option>
											<option >Martinique</option>
											<option >Mauritania</option>
											<option >Mayotte</option>
											<option >Metropolitan France</option>
											<option >Mexico</option>
											<option >Moldova</option>
											<option >Mongolia</option>
											<option >Morocco</option>
											<option >Mozambique</option>
											<option >Namibia</option>
											<option >Nauru</option>
											<option >Nepal</option>
											<option >Netherlands</option>
											<option >Netherlands Antilles</option>
											<option >New Caledonia</option>
											<option >New Zealand</option>
											<option >Nicaragua</option>
											<option >Niger</option>
											<option >Nigeria</option>
											<option >Northern Mariana Islands</option>
											<option >Norway</option>
											<option >Oman</option>
											<option >Pakistan</option>
											<option >Palau</option>
											<option >Panama</option>
											<option >Papua New Guinea</option>
											<option >Paraguay</option>
											<option >Peru</option>
											<option >Philippines</option>
											<option >Pitcairn</option>
											<option >Poland</option>
											<option >Portugal</option>
											<option >Puerto Rico</option>
											<option >Qatar</option>
											<option >Reunion</option>
											<option >Republic of Korea</option>
											<option >Romania</option>
											<option >Russia</option>
											<option >Sao Tome and Principe</option>
											<option >Saudi Arabia</option>
											<option >Senegal</option>
											<option >Seychelles</option>
											<option >Sierra Leone</option>
											<option >Singapore</option>
											<option >Slovakia</option>
											<option >Slovenia</option>
											<option >Solomon Islands</option>
											<option >Somalia</option>
											<option >South Africa</option>
											<option >Spain</option>
											<option >Sri Lanka</option>
											<option >St. Helena</option>
											<option >St. Kitts and Nevis</option>
											<option >St. Lucia</option>
											<option >St. Vincent and the Grenadines</option>
											<option >Sudan</option>
											<option >Suriname</option>
											<option >Svalbard and Jan Mayen Islands</option>
											<option >Swaziland</option>
											<option >Sweden</option>
											<option >Switzerland</option>
											<option >Syria</option>
											<option >Taiwan</option>
											<option >Tajikistan</option>
											<option >Tanzania</option>
											<option >Thailand</option>
											<option >Togo</option>
											<option >Tonga</option>
											<option >Trinidad and Tobago</option>
											<option >Turkey</option>
											<option >Turkmenistan</option>
											<option >Turks and Caicos Islands</option>
											<option >Tuvalu</option>
											<option >Uganda</option>
											<option >Ukraine</option>
											<option >United Arab Emirates</option>
											<option >United Kingdom</option>
											<option >United States</option>
											<option >Uruguay</option>
											<option >Uzbekistan</option>
											<option >Vanuatu</option>
											<option >Vatican City</option>
											<option >Vietnam</option>
											<option >Venezuela</option>
											<option >Western Sahara</option>
											<option >Yemen</option>
											<option >The former Yugoslav Republic of Macedonia</option>
											<option >Yugoslavia</option>
											<option >Zaire</option>
											<option >Zambia</option>
											<option >Zimbabwe</option>
										</select>
									</li>
									<li class="list-group-item list-bk">
										<b>State : </b>
										<p id="state"></p>
										<!--<input id="state_input" class="contact-input hidden" type="text" value="">-->
										<select id="state_input" name="state_input" class="form-control address-input contact-input hidden" style="display:none;">
											 <option value="Alaska">Alaska</option>
											 <option value="Arizona">Arizona</option>
											 <option value="Arkansas">Arkansas</option>
											 <option value="Armed Forces">Armed Forces</option>
											 <option value="Armed Forces America">Armed Forces America</option>
											 <option value="Armed Forces Pacific">Armed Forces Pacific</option>
											 <option value="California">California</option>
											 <option value="Colorado">Colorado</option>
											 <option value="Connecticut">Connecticut</option>
											 <option value="Delaware">Delaware</option>
											 <option value="Florida">Florida</option>
											 <option value="Georgia">Georgia</option>
											 <option value="Hawaii">Hawaii</option>
											 <option value="Idaho">Idaho</option>
											 <option value="Illinois">Illinois</option>
											 <option value="Indiana">Indiana</option>
											 <option value="Iowa">Iowa</option>
											 <option value="Kansas">Kansas</option>
											 <option value="Kentucky">Kentucky</option>
											 <option value="Louisiana">Louisiana</option>
											 <option value="Maine">Maine</option>
											 <option value="Maryland">Maryland</option>
											 <option value="Massachusetts">Massachusetts</option>
											 <option value="Michigan">Michigan</option>
											 <option value="Minnesota">Minnesota</option>
											 <option value="Mississippi">Mississippi</option>
											 <option value="Missouri">Missouri</option>
											 <option value="MMontanaT">MMontanaT</option>
											 <option value="Nebraska">Nebraska</option>
											 <option value="Nevada">Nevada</option>
											 <option value="New Hampshire">New Hampshire</option>
											 <option value="New Jersey">New Jersey</option>
											 <option value="New Mexico">New Mexico</option>
											 <option value="New York">New York</option>
											 <option value="North Carolina">North Carolina</option>
											 <option value="North Dakota">North Dakota</option>
											 <option value="Ohio">Ohio</option>
											 <option value="Oklahoma">Oklahoma</option>
											 <option value="OregonR">OregonR</option>
											 <option value="Pennsylvania">Pennsylvania</option>
											 <option value="Rhode Island">Rhode Island</option>
											 <option value="South Carolina">South Carolina</option>
											 <option value="South Dakota">South Dakota</option>
											 <option value="Tennessee">Tennessee</option>
											 <option value="Texas">Texas</option>
											 <option value="Utah">Utah</option>
											 <option value="Vermont">Vermont</option>
											 <option value="Virginia">Virginia</option>
											 <option value="Washington">Washington</option>
											 <option value="Washington DC">Washington DC</option>
											 <option value="West Virginia">West Virginia</option>
											 <option value="Wisconsin">Wisconsin</option>
											 <option value="Wyoming">Wyoming</option>
										</select>
									<input type="text" name="state_input_text" id="state_input_text" class="form-control address-input contact-input hidden"  /> 
									</li>
									<li class="list-group-item list-bk">
										<b>City : </b>
										<p id="city"></p>
										<input id="city_input" class="contact-input hidden" type="text" value="">
									</li>
									<li class="list-group-item list-bk">
										<b>Postal Code : </b>
										<p id="postalcode"></p>
										<input id="postalcode_input" class="contact-input hidden" type="text" value="">
									</li>
									
								</div>	
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="panel panel-b">
						<div class="panel-heading new-panel-heading">
							<div class="panel-body new-panel">
								<div class="row">
									<div style="float:left;">
										<h3 class="panel-title panel-text  zero-pdng">Subscriptions</h3>
									</div>
									<div style="float:right;">
										<button class="btn btn-secondary pull-right" id="updatesub">Add New Service</button>
									</div>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<div id="subscription-info-panel">
								<div class="col-xs-12 col-sm-12 col-md-12" >
									<div class="panel panel-default subscription-summary-table" style="overflow-y: auto; height: 200px ! important;">
										<!--subscription data -->
										<center><img src="images/loading.gif" alt="loading!!!!" width="150px" height="150px" style="margin-top:30px !important;"></center>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
				  <div id="zuora_payment" ></div>
                  <div id="subscribe_loading" class="loading alert alert-warning hidden" role="alert">
                    <span class="fa fa-spinner fa-spin"></span> loading...
                  </div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="panel panel-default panel-b">
						<div class="panel-heading new-panel-heading">
							<div class="panel-body new-panel">
								<div class="row">
									<div style="float:left;">
										<h3 class="panel-title panel-text zero-pdng">Payment Methods</h3>
									</div>
									<div style="float:right;">
										<button class="btn btn-secondary pull-right" id="new_pm" >Add New Payment Method</button>

									</div>
								</div>
							</div>
						</div>
						<div id="pay-method-panel" class="panel-body ">
<!-------------------------------------------------------------------------------------------------------------------------->
							<div id="paymentmethod-summary-table" > 
							</div>
<!-------------------------------------------------------------------------------------------------------------------------->	
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="panel panel-default panel-b">
						<div class="panel-heading new-panel-heading">
							<div class="panel-body new-panel">
								<div style="float:left;">
									<h3 class="panel-title panel-text col-sm-6 zero-pdng">Invoices</h3>
								</div>
								<div style="float:right;">
									<button class="btn btn-secondary pull-right" id="amountpay">Pay Now</button>
								</div>
							</div>
							
						</div>
						<div class="panel-body">
							<div class="panel table-responsive" style="overflow-y: auto; height: 200px ! important;">
								<table class="table table-hover table-condensed invoice-history-table">
									<thead>
										<tr>
											<th>View PDF</th>
											<th>Invoice #</th>
											<th>Created Date</th>
											<th>Due Date</th>
											<th>Amount</th>
											<th>Tax</th>
											<th>Balance</th>
											<th class="pay-input-col">Status</th>
										</tr>
									</thead>
								</table>
								<center><img id='loadingimage' src='images/loading.gif' alt='loading!!!!' width='150px' height='150px' style='margin-top:30px !important;'></center>
								</div>
						</div>
					</div>
				</div>
			</div>
        </div>
		
    <script type="text/javascript" src='js/jquery.min.js'></script>

        <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/function.js" ></script>
<script type="text/javascript" src="js/zuora-min.js"/></script>
	<script type="text/javascript" src="js/blockUI.js" ></script>

		<script type="text/javascript">
        $(document).ready(function(){
			$(".header").load("commonHeader2.html"); 

			IsUserLoggedIn();
	        validateLoggedInEmail();
			getInitialCart();

			$("#updatesub").click(function(){
				location.href = "carted_products.html";
			});

			
        });
		
		$(document).on('click', "#updateContact", function(event) {
			event.preventDefault();
		});
		
		$(".update_contact").on('click', function(event){
			inputContactDetail();
		});
		
		$(".Cancel").on('click', function(event){
			$('.update_contact').removeClass('hidden');
			$('.contact-output').removeClass('hidden');
			$('.contact-input').addClass('hidden');
			$('.save-contact').addClass('hidden');
			$('.Cancel').addClass('hidden');
		});
		
		
		$(".save-contact").on('click', function(event){
			saveContactChange(event);
		});
		
		function changeState(){
			var country = $('#country_input').val();
			if(country == "United States")
			{
				$("#state_input_text").attr("value","");
				$('#state_input_text').css("display","none");
				$('#state_input').css("display","inline-block");
			}
			else
			{
				$("#state_input").attr("value","");
				$('#state_input').css("display","none");
				$('#state_input_text').css("display","inline-block");
			}
		}
		function inputContactDetail(){
			$('.update_contact').addClass('hidden');
			$('.contact-output').addClass('hidden');
			$('.contact-input').removeClass('hidden');
			$('.save-contact').removeClass('hidden');
			$('.Cancel').removeClass('hidden');
			
			var country = $('#country_input').val();
			var state =	$('#state').text();
			if(country== "United States")
			{
				$('#state_input_text').css("display","none");
				$('#state_input').css("display","inline-block");
				$("#state_input > option").each(function() {
					if(this.value == state){
						var st = $("#state_input");
						$('option:contains("'+state+'")', st).prop('selected', true);
					}
				});
			}
			else
			{
				$('#state_input').css("display","none");
				$('#state_input_text').css("display","inline-block");
				$("#state_input_text").attr("value",state);
			}
		};
		
	function saveContactChange(){
		$('.update_contact').removeClass('hidden');
        $('.contact-output').removeClass('hidden');
        $('.contact-input').addClass('hidden');
        $('.save-contact').addClass('hidden');
			$('.Cancel').addClass('hidden');

		//Update Contact

		var contact_id = $('#contact_id').val();
		var first_name = $('#fname_input').val();
		var mailing_state = $('#state_input').val();
		var last_name = $('#lname_input').val();
		var mailing_code = $('#postalcode_input').val();
		var mailing_address = $('#address_input').val();
		var mailing_country = $('#country_input').val();
		var mailing_city = $('#city_input').val();
		var email = $('#email_input').val();
		var phone = $('#phone_input').val();
		
		var state_text = $('#state_input_text').val(); 
		if(mailing_country != "United States")
			mailing_state = state_text;
		
		$.getJSON("backend/index.php?type=UpdateContact", {contactId:contact_id, firstName:first_name, lastName:last_name, address:mailing_address, city:mailing_city, state:mailing_state, postalCode:mailing_code, country:mailing_country, email:email, phone:phone},
			function(data){
				//Get back success result
                // console.log(data);
				var success = data.msg[0].Success;
				if(success){
                    $('#fname').text(first_name);
                    $('#state').text(mailing_state);
                    $('#lname').text(last_name);
                    $('#postalcode').text(mailing_code);
                    $('#address').text(mailing_address);
                    $('#country').text(mailing_country);
                    $('#city').text(mailing_city);
                    $('#email').text(email);
                    $('#phone').text(phone);

					//If true, show success message, re-render panel
					$('#contact_success').text('Contact successfully saved!');
					$('.success_message').removeClass('hidden').fadeOut(3000);

				} else {
					//If false, show failure message, don't rerender panel
					var errors = data.msg[0].Errors;
					var error_output = "";
					for(var ei in errors){
						var error = errors[ei];
						error_output += error.Message + "\n";
					}
					$('#contact_error').text(error_output);
					$('.error_message').removeClass('hidden').fadeOut(3000);
				}
        	}
		);

		$('.update_contact').removeClass('hidden');
		$('.save-contact').addClass('hidden');
	}
	
		function IsUserLoggedIn(){	
			$.getJSON("backend/index.php?type=IsUserLoggedIn",
			function(data){
				if(!data.success) {	
					if(data.msg[0].msg=='SESSION_NOT_SET'){
						window.location.replace('index.html');
					}
				}
			});
		}
		
		function validateLoggedInEmail(){
			loadAccountSummaries();
		}
	
		function loadAccountSummaries(){
			
			$.blockUI({ 
					message: '<img src="images/loading.gif" width="100px" height="100px"/>',
					overlayCSS: { backgroundColor: '#000' },
					css: { 
						border: '2px', 
						padding: '15px', 
						backgroundColor: '#fff',
						'-webkit-border-radius': '15px', 
						//'-moz-border-radius': '15px',
						'border-radius': '15px',
						opacity: .9, 
					} 
			}); 
			getAccountSummary();
			getSubscriptionSummary();
			getInvoiceHistory();
			getPaymentMethodSummary();
		}
		
		var getInitialCart = function(){
            $.getJSON("backend/index.php?type=GetInitialCart",
            function(data){
                if(!data.success) {	
                    addError(data.msg); 
                }else{ 
					var count = data.msg[0].cart_items.length;
					$(".badge").text(count);
                }
            });
        };
		
		function getAccountSummary(){

        $.getJSON("backend/index.php?type=GetCompleteSummary",
        function(data){
            if(data.msg[0].msg=='USER_DOESNT_EXIST'){
                window.location.replace('subscriberlogin.html');
                return;
            }
            if(data.msg[0].msg=='INVALID_ZLOGIN'){
                alert('There is an error with the server. Please try again later.');
                window.location.replace('subscriberlogin.html');
                return;
            }
			if(!data.success) {	
				$('#AccountName').html("No Data Available"); 
                 $.unblockUI();

			}
			else{
				var acc = data.msg[0];
				/* Show Account Info */
				$('#AccountName').html(acc.Name); 
				$('#AccountNum').html(acc.AccountNumber); 
				$('#account').val(acc.Id); 
				$('#LastPayment').html((acc.LastPaymentAmount!=null ? '$'+parseFloat(acc.LastPaymentAmount).toFixed(2) : 'N/A'));

				$('#AccountBal').html((acc.Balance!=null ? '$'+parseFloat(acc.Balance).toFixed(2) : ' '));
				//$('.account_balance').html('$'+acc.Balance+'.00');
				$('#LastPaid').html((acc.LastPaymentDate!=null ? formatZDate(acc.LastPaymentDate).replace(/\s/g, "") : 'N/A'));
				$('#lastInv').html((acc.LastInvoiceDate!=null ? formatZDate(acc.LastInvoiceDate).replace(/\s/g, "") : 'N/A'));

				//Show Contact Info
				var con = data.msg[0].contactSummary;
				//Set input and output fields to User Contacts
				
				$('#fname_input').val(con.FirstName);
				$('#contact_id').val(con.Id);
				$('#lname_input').val(con.LastName);
				$('#email_input').val(con.PersonalEmail);
				$('#phone_input').val(con.MobilePhone);
				$('#address_input').val(con.Address1);
				$('#country_input').val(con.Country);
				$('#state_input').val(con.State);
				$('#city_input').val(con.City);
				$('#postalcode_input').val(con.PostalCode);

				$('#fname').text(con.FirstName);				
				$('#state').text(con.State);
				$('#lname').text(con.LastName);
				$('#postalcode').text(con.PostalCode);
				$('#address').text(con.Address1);
				$('#country').text(con.Country);
				$('#city').text(con.City);
				$('#phone').text(con.MobilePhone);
				$('#email').text(con.PersonalEmail);	
$('#welcome').text("Welcome "+con.FirstName+" "+con.LastName);
                $.unblockUI();

			}
			}

		);

	}
	
		var getSubscriptionSummary = function(){

		$.getJSON("backend/index.php?type=GetLatestSubscription",
		function(data){
			if(!data.success) {	
				$('.subscription-summary-table').html("No subscriptions available");
			}else{
				var subs = data.msg[0];

				var html = "<div class='panel-body new-panel table-responsive'><table class='table table-hover' width='100%'>";//"<table class='TblWrp innerBlock' style='width:100%'><tr><th width='1%'></th><th width='50%'>Subscription Name</th><th>Subscription Start Date</th><th>Recipient Name</th></tr>";
				html += "<thead><tr><th width='3%'></th><th width='25%'>Product Name</th><th width='40%'>Description</th><th width='10%'>Quantity</th><th>Subscription Start Date</th></tr></thead><tbody>"

				for(var i in subs.active_plans){

					var rp = subs.active_plans[i];
					if(rp.quantity == null)
						rp.quantity = " - ";
                    html += "<tr ><td width='3%'></td><td width='25%'>"+rp.ProductName+"</td><td width='40%'>"+rp.Name+"</td><td width='10%'>"+rp.quantity+"</td><td>"+formatZDate(rp.startDate).replace(/\s/g, "")+"</td></tr><tr></tr>";

				}
				html += "</tbody></table></div>";
				$('.subscription-summary-table').html(html);
			}
        }

		);

	}
	
		var getInvoiceHistory = function(){
		$.getJSON("backend/index.php?type=getInvoiceHistory",

			function(data){
			if(!data.success) {	
				$('.invoice-history-table').append("No Invoice records found");
			}else{
					var bills = data.msg[0];
					var html = "";
					for(var i = 0; i < bills.invoiceSummaries.length; i++){
						var rp = bills.invoiceSummaries[i];
						html+= "<tr class='border_bottom_dashed'>";
						html += "<td style='width:5%'><a href=javascript:viewPdf('"+rp.Id+"'); ><img class = 'image-size' src='images/pdf.jpg'></a></td>";
						html += "<td>"+rp.InvoiceNumber+"</td>";
						html += "<td>"+rp.PostedDate+"</td>";
						html += "<td>"+rp.DueDate+"</td>";
						html += "<td>$"+parseFloat(rp.Amount).toFixed(2)+"</td>";
						html += "<td>$"+parseFloat(rp.TaxAmount).toFixed(2)+"</td>";
						html += "<td>$"+parseFloat(rp.Balance).toFixed(2)+"</td>";
						html += "<td>"+rp.Status+"</td>";
						html += "</tr>";
					}
				$('#loadingimage').hide();
					$('.invoice-history-table').append(html);
				}
        	}

		);

	}
	
	function viewPdf(id){
		
		window.open('backend/getPDF.php?id='+id);

	}
	function getPaymentMethodSummary(){
        var templateFileName = "payment-methods-summary.handlebars";
        var targetId = "payment-methods";

        $.getJSON("backend/index.php?type=GetPaymentMethodSummary",
            function(data){
				if(data.success){
                    var html = "";
                    var ps = data.msg[0];
                    paymentMethods = ps;
                    if(paymentMethods.hasPaymentMethods == true){
                        //For each payment method, print out
                        for(var i in ps.paymentMethodSummaries){
                            var pm = ps.paymentMethodSummaries[i];

							
                            html+="<div class='col-xs-12 col-sm-4 col-md-3 pay-method-item'><div class='panel panel-b'><div class='panel-heading new-panel-heading'><div class='panel-body new-panel'>";
                            html+=" <div class='panel-title panel-text'><span></span>Card Authorized</div>";
                            html+=" </div></div>";
                            html+="<div class='panel-body new-panel'><span><b><span class='fa fa-credit-card'></span>"+pm.CardType+"</b></span><br>";
                            html+="            <span class='card_masked_number'>"+pm.MaskedNumber+"</span><br>";
                            html+="            Exp: <span class='card_expiration_month'>"+pm.ExpirationMonth+"</span>/<span class='card_expiration_year'>"+pm.ExpirationYear+"</span><br>";
                            html+="<span>"+pm.CardHolderName+"</span><br>";
                            if(pm.isDefault==false){
                                html+="        <div class='panel-footer new-panel-footer'><a href='javascript:' id='pm_update_"+pm.Id+"' class='btn_submit item_button btn_make_default' style='font-size:14px;color: #fff !important;'>Make Default</a>";
                                html+="        <a href='javascript:' id='pm_remove_"+pm.Id+"' class='btn_submit item_button btn_remove_default' style='font-size:14px;float:right;color: #fff !important'>Remove</a></td></div>";
                            } else {
                                html+=" <div class='panel-footer new-panel-footer'><span>*</span>"; 
                                html += "<span style='font-size:14px;'> Default Payment Method</span></div>";     
                            }
                            html+="</div></div></div>";
                        }

                    } else {

                        html+="    <p style='margin-left:150px;'> <i>No payment methods attached to this account.</i></p>";
                    }
                    
                    $('#paymentmethod-summary-table').html(html);
                                    $.unblockUI();
                
        
					$('.btn_remove_default').on('click', function(){
						
						$.blockUI({ 
								message: '<img src="images/loading.gif" width="100px" height="100px"/>',
								overlayCSS: { backgroundColor: '#000' },
								css: { 
									border: '2px', 
									padding: '15px', 
									backgroundColor: '#fff',
									'-webkit-border-radius': '15px', 
									//'-moz-border-radius': '15px',
									'border-radius': '15px',
									opacity: .9, 
								} 
						}); 
			
						var buttonId = $(this).attr("id");
						var pmId = buttonId.replace("pm_remove_", "");
						removePm(pmId);
                    });
                }
            }
        );
    }

		function removePm(pmId){
		$.getJSON("backend/index.php?type=RemovePaymentMethod", {pmId:pmId},
			function(data){
                getPaymentMethodSummary();
        	}
		);
	};
	
	$("#new_pm").on('click', function(){
		getHPM2info();
	});

	function getHPM2info(){
		// HPM 2.0 load 
		$.ajax({
		 url: "backend/index.php?type=getNewIframeSrc",
		 dataType:"json",
		 async:false,
		 cache: false,
		 success: function(data) { 
			 	if(!data.success) {
						addError(data.msg);
					} else {
						$('#zuora_payment').removeClass('hidden');
							loadHostedPage(data);
					}	
				
		 }        
		});
	}
	
	function hideNewPaymentMethodPanel(){
		$(".z_hppm_iframe").remove();
		$("#zuora_payment").addClass('hidden');

	}
	
	$(document).on("click", ".btn_make_default" , function() {

				$.blockUI({ 
                    message: '<img src="images/loading.gif" width="100px" height="100px"/>',
                    overlayCSS: { backgroundColor: '#000' },
                    css: { 
                        border: '2px', 
                        padding: '15px', 
                        backgroundColor: '#fff',
                        '-webkit-border-radius': '15px', 
                        //'-moz-border-radius': '15px',
						'border-radius': '15px',
                        opacity: .9, 
                    } 
	    	}); 
			
		var btn_default = $(this).attr("id");
		var pmId = btn_default.replace("pm_update_", "");
		changeDefaultPm(pmId);
    });
	
	function changeDefaultPm(pmId){		
		$.getJSON("backend/index.php?type=UpdatePaymentMethod", {pmId:pmId},
			function(data){
				getPaymentMethodSummary();

			}
		);
	}
	
	function callback_success() {
        getPaymentMethodSummary();
        hideNewPaymentMethodPanel();
	}
	
	var prepopulateFields = {};

    // Sample params for rendering iframe on the client side
    var params = {
       tenantId: "",
       id:"",
       token: "",
       signature: "",
       style:"overlay",
       key: "",
       submitEnabled:"true",
       // this line is added to add payment method for existing accounts
       field_accountId: $('#account').val(),
       // locale:"fr_FR",
       url:"https://apisandbox.zuora.com/apps/PublicHostedPageLite.do",
       // paymentGateway: "Test Gateway" //payment gateway name
    };

    function callback(response) {
      // console.log(response);
       $('#loading_pay_method').addClass('hidden');
       if(response.success) {
          callback_success();
       } else {
          alert("errorcode="+response.errorCode + ", errorMessage="+response.errorMessage);
       }
    }

    function loadHostedPage(data) {
      //console.log(data.msg[0]);
      params["id"] = data.msg[0].id;
      params["tenantId"] = data.msg[0].tenantId;
      params["token"] = data.msg[0].token;
      params["signature"] = data.msg[0].signature;
      params["key"] = data.msg[0].key;
	  params["field_accountId"] = $('#account').val();
   
       Z.render(
          params,
          prepopulateFields,
          callback
       );
       $(".loading").addClass('hidden');
    }
	$("#amountpay").on('click', function(){
		window.location.href = 'invoiceSummary.html';
	});
       </script>
	   
<footer class="footer">  </footer>



    </body>
</html>