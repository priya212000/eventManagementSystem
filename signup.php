<html>
<head>
<link rel="stylesheet" type="text/css" href="Sam1.css?version=51">
</head>
<body>
    <div>
    <h1>Techno fest</h1>
        <fieldset>
            <form name="signup" action="signupaction.php"  method="POST">
                <h3>User_type</h3>
                <input type="radio" name="user_type" value="Student"/>Student<br/>
                <input type="radio" name="user_type" value="Volunteer"/>Volunteer<br/>
                <input type="radio" name="user_type" value="Administrator"/>Administrator<br/>
                <h3>User id:</h3><input type="text" name="userid" placeholder="enter your userid in numbers"/>
                <h3>Password:</h3><input type="password" name="password" placeholder="enter password"/>
                <h3>Name:</h3><input type="text" name="name" placeholder="enter here "/>
                <h3>Age:</h3><input type="text" name="age" placeholder="enter here "/>
                <h3>Email id:</h3><input type="text" name="emailid" placeholder="enter here "/>
                <h3>Phone number:</h3><input type="text" name="phonenumber" placeholder="enter here "/>
                <input type="submit" value="submit"/>
            </form>
        </fieldset>
    </div>
</body>
</html>
