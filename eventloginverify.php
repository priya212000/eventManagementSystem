<?php
$host='localhost';
$user='root';
$pass='';
$db='dbms_online_event_management';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
mysqli_select_db($con,"dbms_online_event_management")or die("no database");
$uid=$_POST['user_id'];
$pas=$_POST['password'];
$qry=mysqli_query($con,"SELECT * FROM log_details WHERE user_id='$uid'");

if($qry)
	$row=mysqli_fetch_array($qry);
		if($row)
		{
    if($uid==$row['user_id'])
		if($uid=='' || $pas=='')
			header("Location:./login.php?id=Some fields are empty");
		else if($uid==$row['user_id']&&$pas==$row['password'])
		{
			session_start();
			$_SESSION['id']=$uid;
		   if($row['user_type']=="Student")
		   {
			header("Location:welcomestudent.php");}
			if($row['user_type']=="Volunteer")
			{header("Location:welcomevolunteer.php");}
			if($row['user_type']=="Administrator")
			{header("Location:welcomeadministrator.php");}
		}
		else
			header("Location:./login.php?id= user id or password is wrong");
	else
		echo "Error " . mysqli_error($con);
	}
else
	header("Location:./login.php?id= user id not available");
	

?>