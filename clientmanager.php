<?php
	class clientmanager extends database
	{
		function getallclient()
		{
			$sql="SELECT * FROM client ";
			$res=$this->exeQuery($sql) or die(mysql_error());
			return $res;
		}

		function getclientByid($id)
		{
			$sql="SELECT * FROM client
					WHERE client_id='$id'";
			$res=$this->exeQuery($sql) or die(mysql_error());
			return $res;
		}

		function checkmail($email)
		{
			$sql="SELECT email FROM client 
							WHERE email='$email'";
			$res=$this->exeQuery($sql) or die(mysql_error());
			return $res;
			if(mysql_num_rows($res)>0)
				{
					return true;
				}
		}

		function checkphone($phone)
		{
			$sql="SELECT phone FROM client 
							WHERE phone='$phone'";
			$res=$this->exeQuery($sql) or die(mysql_error());
			return $res;
			if(mysql_num_rows($res)>0)
				{
					return true;
				}
		}

		function addclient($fname,$lname,$gender,$phone,$email,$address,$nationality,$dob,$education,$mode)
		{
			$sql="INSERT into client
					(fname,lname,gender,phone,email,address,nation,dob,education,cntct_mode)
				  VALUES ('$fname','$lname','$gender','$phone','$email','$address','$nationality','$dob','$education','$mode')";
				  $this->exeQuery($sql)or die(mysql_error());		  
		}

		

	}
?>