<?php
	session_start();
	error_reporting(0);
	if(isset($_POST['submit']) )
	{
		$email = $_SESSION['email'];
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$email2 = trim($_POST['email']);
		$country = trim($_POST['country']);
		$address1 = trim($_POST['address1']);
		$address2 = trim($_POST['address2']);
		$city = trim($_POST['city']);
		$zipCode = trim($_POST['zipCode']);
		$state = trim($_POST['state']);
		$phone = trim($_POST['phone']);

		if(isset($_POST['fname']) && $_POST['fname'] != '')
		{
			$fname = $_POST['fname'];
		}
		else
		{
			$error[] = 'First Name is missing.';
		}
		if(isset($_POST['lname']) && $_POST['lname'] != '')
		{
			$lname = $_POST['lname'];
		}
		else
		{
			$error[] = 'Last Name is missing.';
		}
		
		if(isset($_POST['email']) && $_POST['email'] != '')
		{
			$email2 = $_POST['email'];
		}
		else
		{
			$error[] = 'Email is missing.';
		}
		
		if(isset($_POST['country']) && $_POST['country'] != '')
		{
			$country = $_POST['country'];
		}
		else
		{
			$error[] = 'Country Name is missing.';
		}
		
		if(isset($_POST['address1']) && $_POST['address1'] != '')
		{
			$address1 = $_POST['address1'];
		}
		else
		{
			$error[] = 'First Address is missing.';
		}
		if(isset($_POST['city']) && $_POST['city'] != '')
		{
			$city = $_POST['city'];
		}
		else
		{
			$error[] = 'City Name is missing.';
		}

		if(isset($_POST['state']) && $_POST['state'] != '')
		{
			$state = $_POST['state'];
		}
		else
		{
			$error[] = 'State Name is missing.';
		}
		
		if(isset($_POST['zipCode']) && $_POST['zipCode'] != '')
		{
			$zipCode = $_POST['zipCode'];
		}
		else
		{
			$error[] = 'Zip Code is missing.';
		}
		
		if(isset($_POST['phone']) && $_POST['phone'] != '')
		{
			$phone = $_POST['phone'];
		}
		else
		{
			$error[] = 'Phone Number is missing.';
		}

		if($email != $email2)
		{
			$error[] = 'You have change your Email';
		}
		
		if(!(isset($error)))
		{
			$conn = new mysqli('localhost','root','','grocery_shope');
			if($conn->connect_error)
			{
				echo 'Connection Failed:'. $conn->connect_error;
			}

			else
			{
				$stmt = $conn->prepare("insert into profile(`Id`,`First Name`,`Last Name`,`Email`,`Country`,`Address1`,`Address2`,`City`,`State`,`ZipCode`,`Phone`) values (null,?,?,?,?,?,?,?,?,?,?)");
				$stmt->bind_param("ssssssssii",$fname,$lname,$email2,$country,$address1,$address2,$city,$state,$zipCode,$phone);
				$stmt->execute();
				echo 'Data successfully added.';
				$stmt->close();
				$conn->close();
				header('location:index.php');
			}
		}

		else
		{

		}

	}
?>

	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="myAccount.php">My Account</a>
						<i>|</i>
					</li>
					<li>My Profile</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- contact page -->
	<div class="contact-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">My Profile
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- contact -->
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form  method="post">
							<div class="">
								<input type="text" name="fname" placeholder="First Name" required="">
							</div>
							<div class="">
								<input type="text" name="lname" placeholder="Last Name" required="" >
							</div>
							<div class="">
								<input class="email" type="email" name="email" placeholder="Email" required="" value = "<?php echo $email?>" >
							</div>

							<div class="">
								<input  type="text" name="country" placeholder="Country" required="">
							</div>
							<div class="">
								<input type="text" name="address1" placeholder="Address 1" required="">
							</div>

							<div class="">
								<input  type="text" name="address2" placeholder="Address 2" >
							</div>
							
							<div class="">
								<input  type="text" name="city" placeholder="City" required="">
							</div>
							<div class="">
								<input  type="text" name="state" placeholder="State" >
							</div>
							<div class="">
								<input  type="text" name="zipCode" placeholder="Zip Code" required="">
							</div>
							<div class="">
								<input  type="text" name="phone" placeholder="Phone Number" required="">
							</div>
							<input type="submit" name = "submit" value="Save">
						</form>
					</div>
				</div>
			</div>
			<!-- //contact -->
		</div>
	</div>
