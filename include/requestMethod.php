<?php

	// Login Click
	if(isset($_POST['login-click']))
	{
		$email = $_POST['useremail'];
		$password = md5($_POST['password']);
		$st="Select name,role,id from users where email='$email' and password = '$password' ";
		$status = $db->GetData($st);
		if($status)
		{
			while ($user = mysqli_fetch_assoc($status)) {
				$_SESSION["user"] = $user['name'];
				$_SESSION["user-role"] = $user['role'];
				$_SESSION["user-id"] = $user['id'];

			} 
			echo '<script> alert("Login Successfully")</script>';
			
		}
		else
		{
			echo '<script> alert("Invaid Username and Password")</script>';
		}

	}

	// Create User Account
	if(isset($_POST['create-account-click']))
	{
		$name = $_POST['name'];
		$email = $_POST['useremail'];
		$password = md5($_POST['password']);
		$address = $_POST['address'];
		$role = 0;
		$st = "INSERT INTO `users`(`name`, `email`, `password`, `address`, `role`) VALUES ('$name','$email','$password','$address','$role')";
		if($db->PutData($st))
		{
				$_SESSION["user"] = $name;
				$_SESSION["user-role"] = $role;
			echo '<script> alert("Account Create Successfully")</script>';
		}
		else
		{
			echo '<script> alert("Error... Try Again")</script>';
		}
	}

	//logout click

	if(isset($_GET['logout-user']))
	{
		$_SESSION["user"] = null;
		$_SESSION["user-role"] = null;
		$_SESSION["user-id"] = null;
		header('Location:index.php');
	}

	// Add Room Click

	if(isset($_POST['AddRoomClick']))
	{
		$location 		= $_POST['location'];
		$size 			= $_POST['size'];
		$price 			= $_POST["price"];
		$description 	= $_POST["description"];
		$tmp			= $_FILES['picture']['tmp_name'];
		$picture 		= 'image/'.$_FILES['picture']['name'];

		if(move_uploaded_file($tmp, $picture))
		{
			$st = "INSERT INTO `room`(`location`,`size`,`price`,`picture`,`description`) VALUES ('$location','$size','$price','$picture','$description')";
			if($db->PutData($st))
			{
				echo '<script>alert("Room Added Success")</script>';
				echo '<script> window.location.href="viewRoom.php"</script>';
			}
		}
	}

	// Reserve Click

	if(isset($_POST['ReserveClick']))
	{
		
		if(empty($_SESSION["user"]))
		{
			echo'<script>alert("Please Login to Reserve Room")</script>';
		}
		else
		{
			$roomId = $_POST['roomId'];
			$reservedSchedule = $_POST['reservedSchedule'];
			$reserveDate = $_POST['reserveDate'];
			$st ="SELECT * from reserved_room where roomId='$roomId' And reservedSchedule='$reservedSchedule' And reserveDate = '$reserveDate'";
			
			$status = $db->GetData($st);
			if(mysqli_num_rows($status)>0)
			{
				echo'<script>alert("This Room Is Already Booked in this Schedule Time( '.$reservedSchedule.' ) On this '.$reserveDate.'")</script>';
				
			}
			else
			{
				
				$st = "INSERT INTO `reserved_room`(`roomId`, `reserveDate`, `reservedSchedule`) VALUES ('$roomId','$reserveDate','$reservedSchedule')";
				$id = $db->LastId($st);
				$userid = $_SESSION["user-id"];
				$price = GetValue('price','room','id',$roomId);

				$st = "INSERT INTO `payment`(`reservedId`, `paymentAmount`, `paymentstatus`, `usersId`) VALUES ($id,'$price','0','$userid')";
				if($db->PutData($st))
				{
					echo'<script>alert("Please Pay the Amount '.$price.'Tk to Confirm The Reservation with in 30 Mins")</script>';
				}
			}
		}
		
	}

	// Payment Confirm 

	if(isset($_GET['payId']))
	{
		$id= $_GET['payId'];
		$st = "UPDATE payment set paymentstatus = 1 where id=$id";
		$db->PutData($st);
		echo'<script>alert("Payment Successfully... Your Reservation is confirmed")</script>';
	}


?>