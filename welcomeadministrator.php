<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$db='dbms_online_event_management';
$id=$_SESSION['id'];
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
mysqli_select_db($con,"dbms_online_event_management")or die("no database");
$qry=mysqli_query($con,"SELECT * FROM administrator WHERE admin_id='$id'");
if($qry)
{$row=mysqli_fetch_array($qry);
    $_SESSION['name']=$row['aname'];
}
?>
<html>
<head> <link rel="stylesheet" type="text/css" href="Sam1.css?version=51">
</head>
<body>
    <div>
    <h1>Techno fest</h1>
  <?php 
if(isset($_SESSION["name"])){
echo "<h3>Welcome ".$_SESSION['name']."</h3>";}?>

        <fieldset>
            <form name="admin" action="addevent.php"  method="POST">
                <h3>Wanna add event?</h3>
                <input type="submit" value="Add event"/>
  </form>
  <form name="admin" action="addvolunteer.php"  method="POST">
                <h3>Wanna add volunteer?</h3>
                <input type="submit" value="Add volunteer"/>
            </form>

 <form name="admin" action="addfacility.php"  method="POST">
                <h3>Wanna add facility?</h3>
                <input type="submit" value="Add Facility"/>
            </form>
            <form name="admin" action="addstalls.php"  method="POST">
                <h3>Wanna add Stalls?</h3>
                <input type="submit" value="Add Stalls"/>
            </form>
            
            <form name="logout" action="viewevents.php"  method="POST">
                <h3>Wanna view events?</h3>
                <input type="submit" value="View Events"/>
            </form>
            <form name="logout" action="viewvolunteers.php"  method="POST">
                <h3>Wanna view Volunteers?</h3>
                <input type="submit" value="View volunteers"/>
            </form>
            <form name="logout" action="viewstalls.php"  method="POST">
                <h3>Wanna view Stalls?</h3>
                <input type="submit" value="View stalls"/>
            </form>
        
            <form name="logout" action="logout.php"  method="POST">
                <h3>Wanna log out?</h3>
                <input type="submit" value="logout"/>
            </form>
            <?php
if(isset($_GET['id']))
{
echo $_GET['id'];
}
?>
        </fieldset>
    </div>

</body>
</html>
