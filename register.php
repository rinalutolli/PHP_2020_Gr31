 <?php 
	include('dbconnect.php');
	
	$f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
	$email=$_POST['email'];
	$birthday=$_POST['birthday'];//validimi
	$gender=$_POST['gender'];
	$password1=$_POST['password'];
	$mobile=$_POST['mobile'];
	$name = "/^[A-Z][a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[+][383][0-9]+$/"; 


	if(empty($f_name) || empty($l_name) || empty($email) || empty($password1) || empty($mobile) || empty($gender) || empty($birthday)){
		echo "<div class='alert alert-danger'>Please fill all the fields!</div>";		
		exit(0);
	}
	else{
		if(!preg_match($name,$f_name)){
		echo "
			<div class='alert alert-warning'>
				<b>First name '$f_name' is not valid..! First name must start with capital letter!</b>
			</div>
		";
		exit();
		}

		if(!preg_match($name,$l_name)){
		echo "
			<div class='alert alert-warning'>
				<b>Last name '$l_name' is not valid! Last name must start with capital letter!</b>
			</div>
		";
		exit();
		}

		if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<b>Email'$email' is not valid! Please enter a valid email!</b>
			</div>
		";
		exit();
		}

		if(strlen($password1) < 6 ){
		echo "
			<div class='alert alert-warning'>
				<b>Your password is ".strlen($_POST["password"])." characters. Password must be at least 6 characters!</b>
			</div>";
		exit();
		}

		if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
		exit();
		}

		//check for available user-details
		$sql = "SELECT user_id FROM users WHERE email = '$email' LIMIT 1" ;
		$check_query = mysqli_query($conn,$sql);
		$count_email = mysqli_num_rows($check_query);

		if($count_email > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address is already taken. Sign up with another email address</b>
			</div>
		";
		exit();
		}

		else {
					$password=md5($_POST['password']);
					$sql="INSERT INTO users(first_name, last_name, birthday, mobile, gender, email, password) VALUES ('$f_name','$l_name','$birthday','$mobile','$gender','$email', '$password')";
					$run_query=mysqli_query($conn,$sql);
					if($run_query){
						echo "
								<div class='alert alert-success'>
									Click <b><a href='main.php'>here</a></b> to login.
								</div>
						";
					}
			}
		}
	
 ?>
