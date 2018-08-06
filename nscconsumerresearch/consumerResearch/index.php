<!-- contact -->
<?php include('../deepPageHeader.php'); ?>
<style>
	label.btn span {
	  font-size: 1.5em ;
	}
	label input[type="checkbox"] ~ i.fa.fa-square-o{
		color: #c8c8c8;    display: inline;
	}
	label input[type="checkbox"] ~ i.fa.fa-check-square-o{
		display: none;
	}
	label input[type="checkbox"]:checked ~ i.fa.fa-square-o{
		display: none;
	}
	label input[type="checkbox"]:checked ~ i.fa.fa-check-square-o{
		color: #7AA3CC;    display: inline;
	}
	label:hover input[type="checkbox"] ~ i.fa {
	color: #7AA3CC;
	}
	div[data-toggle="buttons"] label.active{
		color: #7AA3CC;
	}
	div[data-toggle="buttons"] label {
	display: inline-block;
	padding: 6px 12px;
	margin-bottom: 0;
	font-size: 10px;
	font-weight: normal;
	line-height: 2em;
	text-align: left;
	white-space: nowrap;
	vertical-align: top;
	cursor: pointer;
	background-color: none;
	border: 0px solid 
	#c8c8c8;
	border-radius: 3px;
	color: #c8c8c8;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none;
	}
	div[data-toggle="buttons"] label:hover {
	color: #7AA3CC;
	}
	div[data-toggle="buttons"] label:active, div[data-toggle="buttons"] label.active {
	-webkit-box-shadow: none;
	box-shadow: none;
	}
	</style>
	<div class="row">
		<div class="col-sm-12">
			<div class="banner">
				<img src="../images/heroes/about_contact-advanced.png" alt="hero image">
			</div>
		</div>	
	</div>

	<div class="row">
		<div class="col-sm-12">
			<h1 class="CR-h1">CONSUMER RESEARCH STUDY<h1/>
			<p class="CR-p-text">We welcome you to participate in our current study on our Advanced line Nightly Face Treatment and Daily Face Cream. To participate in our NeriumRX product survey, specify below. Please fill out the below form and we will send you a link to participate in our research study. 
			<br/><br/>
			Once we have received your initial feedback we will send one night and day cream each for you to use. Following about 30 days of use we will send you a follow up survey to collect the results of your experience of our products. </p>
		</div>	
	</div>

<form class="CR-form" method="POST" action="CR-contact-script/process.php">

	<div class="row">
		<div class="col-xs-12 ">
		  Please select product surveys you wish to participate in:
		  <br>
		  <div class="btn-group btn-group-vertical" data-toggle="buttons">
			<!-- AW removed per Mike White request 8/6/18
			<label class="btn active">
			  <input type="checkbox" name='advDayNight' checked><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i> <span> Advanced Day and Night</span>
			</label>
			-->
			<label class="btn">
			  <input type="checkbox" name='rxColdSore'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span> Cold Sore</span>
			</label>
			<label class="btn">
			  <input type="checkbox" name='rxPS'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span> Psoriasis</span>
			</label>
			<label class="btn">
				<input type="checkbox" name='rxDermal'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span> Shingles or Dermatitis</span>
			  </label>
			  <br/>
		  </div>
		</div>
	</div>

	<div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="firstName">First and Last Name*</label>
			</div>
			<div class="col-sm-9">  
				<input type="text" class="form-control" id="name" placeholder="Full Name" name="name" required>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="exampleInputEmail1">Email address*</label>
			</div>
			<div class="col-sm-9">  
				<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" required>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="telephone">Telephone</label>
			</div>
			<div class="col-sm-9">  
				<input type="text" class="form-control" id="telephone" name="phone" placeholder="000-000-0000">
			</div>
		</div>
	</div>	

	<div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="address">Address*</label>
			</div>
			<div class="col-sm-9">  
				<input type="text" class="form-control" id="address" name="address" placeholder="Address"required>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="address">City*</label>
			</div>
			<div class="col-sm-9">  
				<input type="text" class="form-control" id="city" name="city" placeholder="City"required>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="state">State*</label>
			</div>
			<div class="col-sm-9">  
				<select name="state" class="form-control" id="state">
					<option value="" selected="selected">Select a State</option>
					<option value="notUS">Not in the United States</option>
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
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="zipcode">Zipcode*</label>
			</div>
			<div class="col-sm-9">  
				<input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zipcode"required>
			</div>
		</div>
	</div>
    
    <div class="row">
            <div class="form-group">
                 <div class="col-sm-20">  
                Enter the Captcha code: &nbsp;<input name="captcha" type="text">&nbsp;
             <img src="captcha.php" /><br/>
                </div>
        </div>
    </div>
		 <div class="col-sm-4">
		<button type="submit" class="btn btn-default submitButton">Submit</button>
        </div>
</form>

<?php include('../deepPageFooter.php'); ?>
