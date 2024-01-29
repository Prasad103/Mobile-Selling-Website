<!DOCTYPE html>
<html>

<head>
    <title>Order Form Example</title>
    <link href="2-theme.css" rel="stylesheet">
</head>

<body>
    <?php
    // (A) PROCESS ORDER FORM
    if (isset($_POST["name"])) {
      require "3-process.php";
      echo $result == ""
        ? "<div class='notify'>Thank You! We have received your order</div>"
        : "<div class='notify'>$result</div>" ;
    }
    ?>

        <!-- (B) ORDER FORM -->
        <div align="center">
            <form id="orderform" method="post" target="_self" align="left">
                <label for="name">Full Name:</label>
                <input type="text" name="name" />

                <label for="email">Email:</label>
                <input type="email" name="email" />

                <label for="qty">Quantity Needed:</label>
                <input type="number" name="qty" />

                <label for="address">Address</label>
                <input type="text" name="address">

                <label for="pincode">Pincode</label>
                <input type="number" name="pincode">

                <label for="Mobail_Model">Selected Mobail Name</label>
                <input type="text" name="selected_model">

                <input type="submit" value="Place Order" />
            </form>
        </div>

</body>

</html>