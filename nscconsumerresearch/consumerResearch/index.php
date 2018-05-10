<!-- contact -->
<?php include('../deepPageHeader.php'); ?>

	<div class="row">
		<div class="col-sm-12">
			<div class="banner">
				<img src="../images/heroes/about_contact-advanced.png" alt="hero image">
			</div>
		</div>	
	</div>

	<div class="row">
		<div class="col-sm-12">
			<h1 class="CR-h1">Consumer Research Study<h1/>
			<p class="CR-p-text">We welcome you to participate in our current study on our Advanced line Nightly Face Treatment and Daily Face Cream. Please fill out the below form and we will send you a link to participate in our research study. 
			<br/><br/>
			Once we have received your initial feedback we will send one night and day cream each for you to use. Following about 30 days of use we will send you a follow up survey to collect the results of your experience of our products. </p>
		</div>	
	</div>

<form class="CR-form" method="POST" action="CR-contact-script/process.php">
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
