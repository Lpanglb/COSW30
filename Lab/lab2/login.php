<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
        
    </head>    
    <body>
        <h1>
            Login Form
        </h1>
        <form action="Proccess_login.php" method="POST">
            <label>Email Address:</label>
            <input type="email" name="email" id ="email" required>
            
            <label>Password:</label>
            <input type="password" name="password" id="password" required>
            <button>Log In!</button>
        </form>
        
    </body>
</html>