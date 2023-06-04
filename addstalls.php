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
echo "<h3>You can add a stall now |".$_SESSION['name']."</h3>";}?></td>
<td>
<a href="welcomeadministrator.php"><h3><--- Back</h3></a>
</td>
</tr>
</table>
        <fieldset>
            <form name="addevent" action="addstallsp.php"  method="POST">
                
                <h3>Stall id:</h3><input type="text" name="sid" placeholder="enter your stallid in numbers"/>
                <?php
if(isset($_GET['error']))
{
echo $_GET['error'];
}
?>
    
                <h3>Stall name:</h3><input type="text" name="sname" placeholder="enter stall name"/>
                <h3>Stall location:</h3><input type="text" name="sloc" placeholder="enter Location Here"/>
                <h3>Stall sponsor:</h3><input type="text" name="sso" placeholder="enter sponsor name"/>
                <h3>Offers availabele:</h3><input type="radio" name="soff" value="yes"/>Yes<br/>
                <input type="radio" name="soff" value="no"/>No<br/>
                <input type="submit" value="submit"/>
            </form>
        </fieldset>
    </div>
</body>
</html>