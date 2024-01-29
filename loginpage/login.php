<title>

The element displays the heading of the document. The label can be only in the text format, and it shows the text in the browser's tab.

<link> 

It creates a link between the working document and an external resource.

<form> 

The element defines the user input included while creating an HTML. 

<input type>

It displays a one-line input field.

<label>

It defines a label for many form elements. It majorly indicates the radio button/checkbox.

<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>

     </form>

</body>

</html>

