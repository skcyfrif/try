
<?php include 'config.php'; ?>

<?php

	$email = $_POST['email'];
	
	$sqlcheck = "SELECT email FROM emailvalids WHERE email = '$email' ";

			$checkResult = $conn->query($sqlcheck);

			if($checkResult->num_rows > 0) {
				echo "Sorry! email has already taken. Please try another.";
			}else{
				echo "Email not available";
			}

?>