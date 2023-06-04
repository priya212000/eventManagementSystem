<html>
<head>
        <link rel="stylesheet" type="text/css" href="Sam1.css?version=51">
</head>
<body>
    <div>
    <h1>Techno fest</h1>
    <table>
    <tr>
    <td>
    <?php
    session_start();
    if(isset($_SESSION["name"])){
echo "<h3>You can add a facility now |".$_SESSION['name']."</h3>";}?></td>
<td>
<a href="welcomeadministrator.php"><h3><--- Back</h3></a>
</td>
</tr>
</table>
        <fieldset>
            <form name="addevent" action="addfacilityp.php"  method="POST">
                
                <h3>Facility id:</h3><input type="text" name="fid" placeholder="enter your facilityid in numbers"/>
                <?php
if(isset($_GET['error']))
{
echo $_GET['error'];
}
?>
    
    
                <h3>Facility name:</h3><input type="text" name="fname" placeholder="enter facility name"/>
                <input type="submit" value="submit"/>
            </form>
        </fieldset>
    </div>
</body>
</html>