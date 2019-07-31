<?php
	session_start();
	//error_reporting(0);
	

		$conn = new mysqli('localhost','root','','grocery_shope');
		if($conn->connect_error)
		{
			echo 'Connection Failed'.$conn->connect_error;
		}
		else
		{
			$email = $_SESSION['email'];
			$query = "select * from profile where `Email` = '$email' limit 1";
			$data = mysqli_query($conn,$query);
			$result = mysqli_fetch_assoc($data);
				$fname = $result['First Name'];
				$lname = $result['Last Name'];
				$country = $result['Country'];
				$address1 = $result['Address1'];
				$address2 = $result['Address2'];
				$city = $result['City'];
				$zipCode = $result['zipCode'];
				$state = $result['State'];
				$phone = $result['Phone'];
			
			$conn->close();
		}
?>
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
					<form>
						<div class="">
						<input type="text" name="fname" placeholder="First Name" required="" disabled="" value = "<?php echo $fname?>">
						</div>
						<div class="">
							<input type="text" name="lname" placeholder="Last Name" required="" disabled="" value = "<?php echo $lname?>">
						</div>
						<div class="">
							<input class="email" type="email" name="email" placeholder="Email" required="" value = "<?php echo $email?>" >
						</div>

							<div class="">
								<input  type="text" name="country" placeholder="Country" required="" disabled="" value = "<?php echo $country?>">
							</div>
							<div class="">
								<input type="text" name="address1" placeholder="Address 1" required="" disabled="" value = "<?php echo $address1?>">
							</div>

							<div class="">
								<input  type="text" name="address2" placeholder="Address 2" disabled="" value = "<?php echo $address2?>">
							</div>
							
							<div class="">
								<input  type="text" name="city" placeholder="City" required="" disabled="" value = "<?php echo $city?>">
							</div>
							<div class="">
								<input  type="text" name="state" placeholder="State" disabled="" value = "<?php echo $state?>">
							</div>
							<div class="">
								<input  type="text" name="zipCode" placeholder="Zip Code" required="" disabled="" value = "<?php echo $zipCode?>">
							</div>
							<div class="">
								<input  type="text" name="phone" placeholder="Phone Number" required="" disabled="" value = "<?php echo $phone?>">
							</div>
							<input type="submit" name = "submit" value="Save" disabled="" >
						</form>
					</div>
				</div>
			</div>
			<!-- //contact -->
		</div>
	</div>