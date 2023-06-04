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
echo "<h3>You can add an event now |".$_SESSION['name']."</h3> ";}?></td>
<td>
<a href="welcomeadministrator.php"><h3><--- Back</h3></a>
</td>
</tr>
</table>
        <fieldset>
            <form name="addevent" action="addeventp.php"  method="POST">
                <h3>EVENT</h3>
                
                <h3>Event id:</h3><input type="text" name="eventid" placeholder="enter your eventid in numbers"/>
                <?php
if(isset($_GET['error']))
{
echo $_GET['error'];
}
?>
    
                <h3>Event name:</h3><input type="text" name="ename" placeholder="enter here"/>
                <h3>Event venue:</h3><input type="text" name="evenue" placeholder="enter here"/>
                <h3>Date:</h3><input type="date" name="edate" placeholder="enter here "/>
                <h3>Time:</h3><input type="time" name="etime" placeholder="enter here "/>
                <h3>Chief Guest:</h3><input type="text" name="echief" placeholder="enter here "/>
                <h3>Speaker:</h3><input type="text" name="espeaker" placeholder="enter here"/>
                <h3>Sponsor:</h3><input type="text" name="esponsor" placeholder="enter here"/>
                <h3>Prizes:</h3><input type="text" name="eprize" placeholder="enter here"/>
                <h3>Certifications:</h3><input type="radio" name="ecert" value="Yes"/>Yes<br/>
                <input type="radio" name="ecert" value="No"/>No<br/>
                <input type="submit" value="submit"/>
            </form>
    
        </fieldset>
    </div>
</body>
</html>
