<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Sam1.css?version=51">
    </head>
    <body>
    <div>
    <h1>Techno fest</h1>
         <fieldset>         
 <ul>
  <li> <form action="./eventloginverify.php"  name="myform" method="post"   >
               <h3> User id:</h3>
               <input type="text" name="user_id" placeholder="enter your user id"/>
               <h3> Password:</h3>
               <input type="password" name="password" placeholder="enter your password"/><br/>
               <input type="submit" value="login" />
                </form></li>
  <li> <form action="./signup.php"  name="myform" method="post"  >
  <h3>Don't have an account?</h3>

        <input type="submit" value="Sign up" /></form></li>
</ul>
<?php
if(isset($_GET['id']))
{
echo $_GET['id'];
}
?>
      </fieldset>
      <br/>
      
</div>

    </body>
</html>
