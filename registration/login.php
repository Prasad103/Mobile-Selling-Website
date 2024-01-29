<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group" id="input">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>

    <style>
        body {
            background-image: url(background.jpg);
            background-attachment: fixed;
        }
        
        .input-group {
            color: black;
            text-decoration: solid;
            background-color: transparent;
        }
        
        .header {
            background-color: brown;
            align-items: center;
            text-align: center;
        }
        
        #input {
            background-color: transparent;
            text-align: center;
            background: transparent;
        }
        
        .btn {
            align-items: center;
            background-color: brown;
        }
    </style>
</body>

</html>