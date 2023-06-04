<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$db='dbms_online_event_management';
$id=$_SESSION['id'];
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
mysqli_select_db($con,"dbms_online_event_management")or die("no database");
$qry=mysqli_query($con,"SELECT * FROM volunteer WHERE volunteerid='$id'");
if($qry)
{$row=mysqli_fetch_array($qry);
    $_SESSION['name']=$row['vname'];
}
?>

<html>
<head>
        <link rel="stylesheet" href="Sam1.css">
</head>
<body>
<table>   
    <div>
    <h1>Techno fest</h1>
  <?php 
if(isset($_SESSION["name"])){
echo "<h3>Welcome ".$_SESSION['name']."</h3>";}?>

        <fieldset>
    
            <form name="admin" action="viewvolevents.php"  method="POST">
                <h3>Wanna view Volunteering events?</h3>
                <input type="submit" value="View volunteering events"/>
            </form>


            <form name="eve" action="vieweventsvolunteer.php"  method="POST">
                <h3>Wanna view events?</h3>
                <input type="submit" value="View Events"/>
            </form>
            <form name="eve" action="viewstallsvolunteer.php"  method="POST">
                <h3>Wanna view stallas?</h3>
                <input type="submit" value="View Stalls"/>
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
