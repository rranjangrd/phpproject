<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Generic - Transit by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
		<?php include('navbar.php'); ?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h3><pre>"Banking is very good business if you don't do anything dumb"</pre></h3>
					</header>
<h2 align="center"style="animation:running">!!!Sign Up Here!!!</h2>
<form method="post">
<table align="center" cellspacing="8" >
<tr>
        <td border="1" >First Name</td>
        <td><textarea name="firstname" required placeholder="enter your first name here"></textarea></td>
        <td border="1" >Last Name</td>
        <td><textarea name="lastname" required placeholder="enter your last name here"></textarea></td>
</tr>
<tr>
    <td>E-Mail</td>
    <td><input type="email" name="email" required placeholder="enter a valid email"></td>
</tr>
<tr>
        <td border="1" >Birthdate</td>
        <td><input type="date" name="birthdate" required placeholder="enter your birthdate here"></td>
        
         <td>Age</td>
       <td> <input type="number" name="age" min="14" max="59"></td>
</tr>
<tr>
    <td>Create password</td>
    <td><input type="password" name="npwd" required placeholder="enter your password"></td>
    
     <td>Confirm password</td>
    <td><input type="password" name="cpwd" required placeholder="enter your password"></td>
</tr>
<tr>
        <td border="1" >Home_No</td>
        <td><textarea name="home" required placeholder="enter your name here"></textarea></td>
        
        <td border="1" >Street</td>
        <td><textarea name="street" required placeholder="enter your name here"></textarea></td>
</tr>
<tr>
     <td>city</td>
     <td><select name="city">
      <option value=' '>SELECT CITY</option>
      <option>jharkhand</option>
      <option>bihar</option>
      <option>kolkata</option>
      </select></td>
</tr>
<tr>
    <td>Mob No.</td>
    <td><input type="number" name="mobno" required placeholder="enter your mobile number"></td>

    <td>Phone No.</td>
    <td><input type="number" name="phno" required placeholder="enter your phone number"></td>
</tr>

<tr>
     <td align="center" colspan="7"><input type='submit' name='ok'value='sign up'><input type='reset'></td>
</tr>

</table>
</form>

<?php

if(isset($_POST['ok'])){
	
	#verify email adrress
	
	
	
	$first_name=$_POST['firstname'];
	$last_name=$_POST['lastname'];
	$email=$_POST['email'];
	$birthdate=$_POST['birthdate'];
	$age=$_POST['age'];
	$password=$_POST['npwd'];
	$cpassword=$_POST['cpwd'];
	$home_no=$_POST['home'];
	$street=$_POST['street'];
	$city=$_POST['city'];			
	$mob_no=$_POST['mobno'];
	$ph_no=$_POST['phno'];
	
	if($password!=$cpassword){ ?>
				<script type="text/javascript">alert("confirm password is not matching");</script>
    <?php }else{

	$query_string ="INSERT INTO customer_details VALUES('0','$first_name','$last_name','$email','$birthdate','$age','$password','$home_no','$street','$city','$ph_no','$mob_no')";
  $date = date('d-m-Y H:i:s');
  $query_string1 = "INSERT INTO create_acc VALUES ('0','0','$date','5000')";
   $query_string2 = "INSERT INTO balance VALUES('0','0','5000')";
		//$query = "SELECT * FROM balance ORDER BY id DESC LIMIT 1";
		//$fire=mysqli_query($connect,$query) or die(mysqli_error($connect));
	$exec=mysqli_query($connect,$query_string) or die(mysqli_error($connect));
  $exec1 = mysqli_query($connect,$query_string1) or die(mysqli_error($connect));
  $exec2 = mysqli_query($connect,$query_string2) or die(mysqli_error($connect));
	
	if($exec==1){
		
		
		echo "CONGRATS !!! you have signed up with us<br>";
		
		 
		// $_SESSION['user'] = NULL;
		
		 //$_SESSION['user']=$first_name; ?>
		 
		// session_start();
		 //$_SESSION['user']['cust_id'] = $fire;
		 
		// echo $_SESSION['user']['first_name'];
	
		 //header('location:index.php');
		 
		  
		  
		  <script type="text/javascript">alert("you are Successfully Signed Up.... PLease Login to Use Ouer Services");
		   window.location.href='login.php';
			</script> 
            <?php
		
		
	}
} 
}

?>
			
					

				</div>
			</section>

		<!-- Footer -->
			
            <?php include('footer.php') ?>
	</body>
</html>