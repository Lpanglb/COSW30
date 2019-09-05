<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration Page</title>
        
    </head>    
    <body>
        <h1>
            Registration Form
        </h1>
        <form action="proccess_register.php" method="POST">
            <label>First Name:</label>
            <input type="text" id="firstname" name="fistname" required>
            
            <label>Last Name:</label>
            <input type="text" id="lastname" name="lastname"  required>
            
            <label>Email Address:</label>
            <input type="email" name="email" id ="email" required>
            
            <label>Password:</label>
            <input type="password" name="password" id="password" required>
            
            <label>Confirm Password:</label>
            <input type="password" name="confirmpassword" id="confirmpassword" required>
            <button>Register!</button>
        </form>
        
    </body>
</html>