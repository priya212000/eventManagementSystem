<?php
$host='localhost';
$user='root';
$pass='';
$db='dbms_online_event_management';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
mysqli_select_db($con,"dbms_online_event_management")or die("no database");
session_start();?>

<html>
<head>
<style>
            h1{
    text-align: center;
    color:royalblue;
    font-size: 40px;
}
h2{
    text-align: center;
    color:maroon;
    font-size: 30px;
}
h3{
    text-align:left;
    font-size: 20px;
    margin-bottom: 0px;
    
}
table[name=table],th[name=table],td
{
    width: 30%;
    margin-left: 33%;
   
    margin-bottom: 0%;
    margin-top: 0%;
    align-content: center;
    align-self: center;
    border: 1px solid black;
    text-align: center;
}
th{
    width: 100%;
}
fieldset
{ border-style:double;
    border-width: 5px;
    border-color:indianred;
}
body
{
    background-image: url(tech3.jpg);

}
input[type="submit"]
{
    margin-top: 5px;
    margin-left: 35%;
    padding: 10px;
    border-width: 2px;
    border-color: brown;
    width: 30%;
    color:blue;
    font-size: 15px;
    text-align: center;
    
    
    
}
            </style>
</head>
<body>
    <div>
    <h1>Techno fest</h1>
    <table>
    <tr>
    <th>
    <?php
    if(isset($_SESSION["name"])){
echo "<h3>You can view  stalls now |".$_SESSION['name']."</h3> ";}?></th>
<th>
<a href="welcomeadministrator.php"><h3>Back</h3></a>
</th>
</tr>
</table>
<div>
<fieldset>
<?php
{$qry=mysqli_query($con,"SELECT * FROM stalls") or die("Qyery not obtained");
?>
<h2>Stalls</h2>
<table name="table">
<tr>
<th name="table">Stall_id</th>
<th name="table">Stall_name</th>
<th name="table">Stall_location</th>
<th name="table">Stall_Sponsors</th>
<th name="table">Offers_available</th>

</tr><?php
while($row = mysqli_fetch_array($qry))
{  $a=$row['stall_id'];
    $q=mysqli_query($con,"SELECT * FROM stall_sponsor where stall_id=$a") or die("Qyery not obtained");
    if($q)
   $r= mysqli_fetch_array($q);
   $b=$r['sponsor_by'];
   $q=mysqli_query($con,"SELECT * FROM sponsor where sponsor_id=$b") or die("Qyery not obtained");
   if($q)
   $r= mysqli_fetch_array($q);
   $sso=$r['sponser_name'];
   echo "<tr>";
   echo "<td>" . $row['stall_id'] . "</td>";
   echo "<td>" . $row['stall_name'] . "</td>";
   echo "<td>" . $row['location'] . "</td>";
   echo "<td>" . $sso. "</td>";
   echo "<td>" . $row['offers'] . "</td>";
  
  
   
   
   
   echo "</tr>";
   }
   echo "</table>";
   
   mysqli_close($con);
            
   }?>
   </fieldset>
   </div>
   </body>
   </html>