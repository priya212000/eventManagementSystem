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
echo "<h3>You can add an volunteer now |".$_SESSION['name']."</h3>";}?></td>
<td>
<a href="welcomeadministrator.php"><h3><--- Back</h3></a>
</td>
</tr>
</table>
        <fieldset>
            <form name="addevent" action="addvolunteerp.php"  method="POST">
                
                <h3>Event id:</h3><input type="text" name="eventid" placeholder="enter your eventid in numbers"/>
                <h3>volunteer name:</h3><input type="text" name="vname" placeholder="enter volunteer name"/>
                <input type="submit" value="submit"/>
            </form>
        </fieldset>
    </div>
</body>
</html>