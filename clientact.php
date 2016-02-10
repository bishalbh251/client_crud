<?php
	include_once("db_inc.php");
	
	if(isset($_POST['addclient'])&&($_POST['addclient']=='Submit'))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$gender=$_POST['gender'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$nationality=$_POST['nationality'];
		$dob=$_POST['dob'];
		$education=$_POST['education'];
		$mode=$_POST['cont_mode'];

			if ($client->checkphone($phone)==true)
			{
			echo "<script>alert('Phone Number already exists');</script>";
			echo "<script>window.location='index.php?obj=client&action=add';
			</script>";
			}
		
			if ($client->checkmail($email)==true)
			{
			echo "<script>alert('Email already exists');</script>";
			echo "<script>window.location='index.php?obj=client&action=add';
			</script>";
			}

			if( $_POST['date'] <= date('Y-m-d') )
			{
				echo "<script>alert('Date of Birth can not be greater than current data.');</script>";
				echo "<script>window.location='index.php?obj=client&action=add';</script>";
			}



		$client->addclient($fname,$lname,$gender,$phone,$email,$address,$nationality,$dob,$education,$mode);
		echo "<script>alert('added successfully');</script>";
		echo "<script>window.location='index.php?obj=viewclient';</script>";
	}
?>