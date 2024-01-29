<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Poco X3 Pro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="product-box">
                <div class="all-images">
                    <div class="small-images">
                        <img src="Poco X3 Pro-1.jpg" onclick="clickimg(this)">

                        <img src="Poco X3 Pro-3.jpg" onclick="clickimg(this)">
                        <img src="Poco X3 Pro-4.jpg" onclick="clickimg(this)">
                        <img src="Poco X3 Pro-5.jpg" onclick="clickimg(this)">
                    </div>
                    <div class="main-images">
                        <img src="Poco X3 Pro-1.jpg" id="imagebox">
                    </div>
                </div>
            </div>
            <div class="text">
                <div class="contect">
                    <p class="brand">Brand : Poco</p>
                    <h2>Poco X3 Pro (Steel blue, 128GB)</h2>
                    <div class="review">
                        <span>(5.0)</span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="pricebox">
                        <p class="price">&#8377; 19,999 (16% off)</p>
                        <strike>&#8377; 23,999</strike>
                    </div>

                    <p>Size : <select name="size">
                        <option value="select colour">select color</option>
                        <option value="black">Black</option>
                        <option value="blue">blue</option>
                        <option value="green">green</option>
                        <option value="purple">purple</option>
                    </select></p>

                    <p>Quantity <input type="text" value="1"></p>
                    <button onclick="myFunction()">
                        <span class="fa fa--shopping-cart"></span>
                        Add to Cart
                    </button>
                    <button class="buy">
                        <a href="/project/order/2-order-form.php"><span class="fa fa--shopping-cart"></span>
                        Buy Now
                    </button></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function clickimg(smallImg) {
            var fullImg = document.getElementById("imagebox");
            fullImg.src = smallImg.src
        }

        function myFunction() {
            alert("Product is added to Cart Successfully")
        }
    </script>

</body>

</html>