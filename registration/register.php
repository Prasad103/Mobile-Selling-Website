<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group" id="input">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
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
            background-color: brown;
        }
    </style>
</body>

</html>