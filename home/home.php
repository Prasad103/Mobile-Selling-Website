<?php
session_start();

/*if(isset($_SESSION['username'])) {
    echo "you are logged out";
    header('location: home.php');
}*/
?>


    <!DOCTYPE html>
    <html lang="en">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mobail Page</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="/home/style.css">
        <link rel="stylesheet" href="/home/home.js">



    </head>

    <body>

        <header>

            <div class="header-1">

                <a href="#" class="logo"> ShopKart </a>

                <form action="">
                    <input type="search" placeholder="search here" id="search">
                    <label for="search" class="fas fa-search"></label>
                </form>

            </div>

            <div class="header-2">

                <div id="menu" class="fas fa-bars" onclick="navToggle();"></div>

                <nav class="navbar">
                    <ul>
                        <li><a onclick="navToggle();" href="/project/home/home.php">home</a></li>
                        <li><a onclick="navToggle();" href="#">about</a></li>
                        <li><a onclick="navToggle();" href="/project/registration/register.php">Signup</a></li>
                        <li><a onclick="navToggle();" href="/project/registration/login.php">login</a></li>
                        <li>
                            <a onclick="navToggle();" href="#">
                                <?php 
                                error_reporting(0);
                                echo $_SESSION['username']
                                ?>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="icons">
                    <a href="#" class="fa fa-shopping-cart"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-github"></a>
                    <a href="/project/registration/logout.php"><button style="background-color: black;"> Logout</button></a>
                </div>

            </div>

        </header>


        <nav align="center" class="navigation">
            <a href=""><img src="/project/Mobail logo/Mi logo.png" alt="Mi"></a>
            <a href=""><img src="/project/Mobail logo/Micromax logo.jpg" alt="Micromax"></a>
            <a href=""><img src="/project/Mobail logo/Poco logo.png" alt="Poco"></a>
            <a href=""><img src="/project/Mobail logo/Samusang logo.jpg" alt="Samusang"></a>
            <a href=""><img src="/project/Mobail logo/Vivo logo.png" alt="Vivo"></a>
            <a href=""><img src="/project/Mobail logo/apple.png" alt="Vivo"></a>
        </nav>

        <!--<div id="slider">
        <figure>
            <a href=""><img src="/project/Sliding img/Slide1.png" alt="sliding img1"> </a>
            <a href=""><img src="/project/Sliding img/Slide 2.png" alt="sliding img 2"></a>
            <a href=""><img src="/project/Sliding img/Slide 3.png" alt="sliding img 3"></a>
            <a href=""><img src="/project/Sliding img/Slide 4.png" alt="sliding img 4"> </a>
            <a href=""><img src="/project/Sliding img/Slide1.png" alt="sliding img1"> </a>
        </figure>
    </div>-->


        <table class="secondtable " width="100% " bgcolor="white ">
            <tr>





                <tr>
                    <th style="background-color: blue;border-radius: 20%;border-spacing: 25px;border-collapse: separate;">
                        <div class="grow">
                            <a href="/project/Samusang/Samsang F12/samung_f12.php"><img src="Samusang F12.png " width="50% " class="zoom "></a>
                        </div>
                    </th><br>
                    <th style="background-color: blue;border-radius: 20%;border-spacing: 10px; ">
                        <div class="grow">
                            <a href="/project/Samusang/Samsung F23 5G/samsung_f23.php"><img src=" Samusang F23 5G.png " width="50% " class="zoom " style="padding-right: 10%;"></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 20%;border-spacing: 10px; ">
                        <div class="grow">
                            <a href="/project/Samusang/Samsung M32/samsung_m32.php"><img src="Samusang M32.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 20%;border-spacing: 10px; ">
                        <div class="grow">
                            <a href="/project/Samusang/Samsung M33 5G/samsang_m33.php"><img src=" Samusang M33 5G.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 20%; border-spacing: 10px;">
                        <div class="grow">
                            <a href="/project/Samusang/Samusang F42 5G/samsung_m42.php"><img src="Samusang M42 5G.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                </tr>

                <tr>
                    <th style="margin-top: 0%;">
                        <a href="/project/Samusang/Samsang F12/samung_f12.php">
                            <span><p><b> Samsung F12 </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377;9,750 Off</p></i></span>
                            <span class="small" style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small" style="font-size:170%;color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small" style="font-size:170%;color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small" style="font-size:170%;color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small" style="font-size:170%;color:orange; background-color: lightblue;background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/project/Samusang/Samsung F23 5G/samsung_f23.php">
                            <span><p><b> Samsung f23 </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377;12,500 Off</p></i></span>
                            <span class="small" style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small" style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small" style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small" style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small" style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/project/Samusang/Samsung M32/samsung_m32.php">
                            <span><p><b> Samsung M32 </b><br> <small><i style=" color:Grey; "> Free Delivary </small></p></i></span>
                            <span class="small " style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small " style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small " style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small " style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small " style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/project/Samusang/Samsung M33 5G/samsang_m33.php">
                            <span><p><b> Samsung M33 5G </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto 8% Off</i></p></span>
                            <span class="small" style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small" style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small" style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small" style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small" style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/Samusang/Samusang F42 5G/samsung_m42.php">
                            <span><p><b> Samsung F42 5G </b><br> <small><i style=" color:Grey; "> Free Delivary </small> <br>Upto 15% Off</p></i></span>
                            <span class="small " style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small " style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small " style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small " style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span class="small " style="font-size:170%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>



                    <tr>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;11,999 </font><strike style="color:black;size: 3px; ">14,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;16,999 </font><strike style="color:black;size: 3px; ">23,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;12,690 </font><strike style="color:black;size: 3px; ">15,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;16,999 </font><strike style="color:black;size: 3px; ">17,899</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;21,999 </font><strike style="color:black;size: 3px; ">25,990</strike><br>
                        </th>
                    </tr>



        </table>
        <hr>

        <table class="thirdtable " width="100% " bgcolor="white ">
            <tr>


                <tr>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href="/project/Apple/Iphon 11 Pro Max/iphon11_pro_max.php"><img src="Iphon 1.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href="/project/Apple/Iphon 13 Pro Max/iphon13_pro_max.php"><img src="Iphon 2.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; padding: 30px; ">
                        <div class="grow">
                            <a href="/project/Apple/Iphon 11/iphon11.php"><img src="Iphon 3.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; padding: 33px; ">
                        <div class="grow">
                            <a href="/project/Apple/Iphon 12 Mini/iphon12_mini.php"><img src="Iphon 4.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href="/project/Apple/Iphon 13 Pro Max Golden/iphon13_pro_max_golden.php"><img src="Iphon 5.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                </tr>


                <tr>
                    <th style="margin-top: 0%;">
                        <a href="/project/Apple/Iphon 11 Pro Max/iphon11_pro_max.php">
                            <span><p><b>Apple iphon 11 Pro Max</b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377;12,500 Off on Exchange</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/project/Apple/Iphon 13 Pro Max/iphon13_pro_max.php">
                            <span><p><b> Apple iphon 13 Pro Max </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377;12,500 Off on Exchange</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/project/Apple/Iphon 11/iphon11.php">
                            <span><p><b> Apple iphon 11  </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377;12,500 Off on Exchange</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/project/Apple/Iphon 12 Mini/iphon12_mini.php">
                            <span><p><b> Apple iphon 12 Mini </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377;12,500 Off on Exchange</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/project/Apple/Iphon 13 Pro Max Golden/iphon13_pro_max_golden.php">
                            <span><p><b> Apple iphon 13 Pro Max </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377;12,500 Off on Exchange</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>



                    <tr>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;1,17,100 </font><strike style="color:black;size: 3px; ">1,40,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;1,29,999 </font><strike style="color:black;size: 3px; ">1,40,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;68,999 </font><strike style="color:black;size: 3px; ">80,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;54,999 </font><strike style="color:black;size: 3px; ">64,899</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;1,29,999 </font><strike style="color:black;size: 3px; ">1,35,990</strike><br>
                        </th>
                    </tr>

        </table>
        <hr>

        <table class="forthtable " width="100% " bgcolor="white ">
            <tr>


                <tr>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href="/project/Oneplus/Oneplus 8/oneplus_8.php"><img src="Oneplus 1.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href="/project/Oneplus/Oneplus Nord CE 2 Lite 5G/oneplus_nord_ce_2_lite_5G.php"><img src="Oneplus 2.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <a href="/project/Oneplus/Oneplus Nord CE 5G/oneplusnord_ce_5G.php">
                            <div class="grow"><img src="Oneplus 3.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <a href="/project/Oneplus/OnePlus Nord 2/oneplus_nord2.php">
                            <div class="grow"><img src="Oneplus 4.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <a href="/project/Oneplus/Oneplus 9/oneplus_9.php">
                            <div class="grow"><img src="Oneplus 5.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                </tr>


                <tr>
                    <th style="margin-top: 0%;">
                        <a href="/project/Oneplus/Oneplus 8/oneplus_8.php">
                            <span><p><b> OnePlus 8 </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377;12,500 Off on Exchange</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/Oneplus/Oneplus Nord CE 2 Lite 5G/oneplus_nord_ce_2_lite_5G.php">
                            <span><p><b> OnePlus Nord CE 2 Lite 5G </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto 1% Off</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/project/Oneplus/Oneplus Nord CE 5G/oneplusnord_ce_5G.php">
                            <span><p><b> OnePlus Nord CE 5G </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br></p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/project/Oneplus/OnePlus Nord 2/oneplus_nord2.php">
                            <span><p><b> OnePlus Nord 2 </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br></p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/project/Oneplus/Oneplus 9/oneplus_9.php">
                            <span><p><b> OnePlus 9 </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br> Upto 1% Of</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>



                    <tr>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;44,999 </font><strike style="color:black;size: 3px; ">50,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;19,799 </font><strike style="color:black;size: 3px; ">19,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;24,999 </font><strike style="color:black;size: 3px; ">30,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;31,999 </font><strike style="color:black;size: 3px; "></strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;41,699 </font><strike style="color:black;size: 3px; ">50,990</strike><br>
                        </th>
                    </tr>
        </table>
        <hr>

        <table class="fifthtable " width="100% " bgcolor="white ">
            <tr>


                <tr>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href="/project/Poco/Poco M4 5G/pocom4_5g.php"></a><img src="Poco 1.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href="/project/Poco/Poco C31/pococ31.php"><img src="Poco 2.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href="/project/Poco/Poco M4 Pro/pocom4_pro.php"><img src="Poco 3.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href="/project/Poco/Poco X4 Pro 5G/pocoX4pro_5g.php"><img src="Poco 4.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href="/project/Poco/Poco M4 5G/pocom4_5g.php"><img src="Poco 5.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                </tr>


                <tr>
                    <th style="margin-top: 0%;">
                        <a href="/project/Poco/Poco M4 5G/pocom4_5g.php">
                            <span><p><b> Poco M4 5G </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377;11,250 Off on Exchange</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/project/Poco/Poco C31/pococ31.php">
                            <span><p><b> Poco C31 </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>29% Off</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/project/Poco/Poco M4 Pro/pocom4_pro.php">
                            <span><p><b> Poco M4 Pro</b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377;11,7500 Off on Exchange</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/project/Poco/Poco X4 Pro 5G/pocoX4pro_5g.php">
                            <span><p><b> Poco X4 Pro 5G</b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377;12,500 Off on Exchange</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="/project/Poco/Poco M4 Pro/pocom4_pro.php">
                            <span><p><b>Poco M3 Pro 5G </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>28% Off</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>



                    <tr>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;11,999 </font><strike style="color:black;size: 3px; ">15,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;8,499 </font><strike style="color:black;size: 3px; ">11,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;12,499 </font><strike style="color:black;size: 3px; ">17,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;16,999 </font><strike style="color:black;size: 3px; ">22,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;11,499 </font><strike style="color:black;size: 3px; ">15,999</strike><br>
                        </th>
                    </tr>
        </table>
        <hr>


        <table class="fifthtable " width="100% " bgcolor="white ">
            <tr>


                <tr>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href=""><img src="Redami 1.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href=""><img src="Redami 2.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href=""><img src="Redami 3.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href=""><img src="Redami 4.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href=""><img src="Redami 5.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                </tr>


                <tr>
                    <th style="margin-top: 0%;">
                        <a href="">
                            <span><p><b> Redmi 9A Sport </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>17% Off</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="">
                            <span><p><b> Redmi Note 11 </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br></p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="">
                            <span><p><b>Redmi Note 11s</b><br> <small><i style="color:Grey; "> Free Delivary </small> <br></p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="">
                            <span><p><b>Redmi Note 11 Pro+ 5G</b><br> <small><i style="color:Grey; "> Free Delivary </small> <br></p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="">
                            <span><p><b>Redmi Note 10 Pro Max </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br></p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>



                    <tr>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;11,999 </font><strike style="color:black;size: 3px; ">15,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;8,499 </font><strike style="color:black;size: 3px; ">11,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;12,499 </font><strike style="color:black;size: 3px; ">17,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;16,999 </font><strike style="color:black;size: 3px; ">22,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;11,499 </font><strike style="color:black;size: 3px; ">15,999</strike><br>
                        </th>
                    </tr>
        </table>
        <hr>


        <table class="fifthtable " width="100% " bgcolor="white ">
            <tr>


                <tr>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href=""><img src="Vivo 1.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href=""><img src="Vivo 2.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href=""><img src="Vivo 3.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href=""><img src="Vivo 4.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                    <th style="background-color: blue;border-radius: 10%; ">
                        <div class="grow">
                            <a href=""><img src="Vivo 5.png " width="50% " class="zoom "></a>
                        </div>
                    </th>
                </tr>


                <tr>
                    <th style="margin-top: 0%;">
                        <a href="">
                            <span><p><b>Vivo T1 </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377; 12,500 Off on Exchange</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="">
                            <span><p><b> Vivo T1 5G </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377; 12,500 Off on Exchange</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="">
                            <span><p><b>Vivo Y21G</b><br> <small><i style="color:Grey; "> Free Delivary </small> <br></p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="">
                            <span><p><b>Vivo Y75</b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377; 12,500 Off on Exchange</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>

                    <th style="margin-top: 0%;">
                        <a href="">
                            <span><p><b>Vivo T1 Pro </b><br> <small><i style="color:Grey; "> Free Delivary </small> <br>Upto &#8377; 12,500 Off on Exchange</p></i></span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                            <span style="font-size:200%; color:orange; background-color: lightblue; ">&#9733;</span>
                        </a>
                    </th>



                    <tr>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;14,499 </font><strike style="color:black;size: 3px; ">19,990</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;15,990 </font><strike style="color:black;size: 3px; ">19,999</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;12,850 </font><strike style="color:black;size: 3px; "></strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;21,990 </font><strike style="color:black;size: 3px; ">25,990</strike><br>
                        </th>
                        <th>
                            <font color="green " ; size="5px ">Price: &#8377;24,999 </font><strike style="color:black;size: 3px; ">30,990</strike><br>
                        </th>
                    </tr>


        </table>


        <footer class="new_footer_area bg_color">
            <div class="new_footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                                <p>Don’t miss any updates of New moabail launching and special offer.!</p>
                                <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                                    <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                                    <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                                    <p class="mchimp-errmessage" style="display: none;"></p>
                                    <p class="mchimp-sucmessage" style="display: none;"></p>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">CSE Team Members</h3>
                                <ul class="list-unstyled f_list">
                                    <li>
                                        <a href="#"></a>
                                    </li>
                                    <li><a href="#">Prasad Bebale</a></li>
                                    <li><a href="#">Arbaj Pathan</a></li>
                                    <li><a href="#">Atharv Kadam</a></li>
                                    <li><a href="#">Ajinkya Chavan</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Term &amp; conditions</a></li>
                                    <li><a href="#">Reporting</a></li>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Support Policy</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">CSE Team</h3>
                                <div class="f_social_icon">
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-linkedin"></a>
                                    <a href="#" class="fab fa-pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-7">
                            <p class="mb-0 f_400"></p>
                        </div>
                        <div class="col-lg-6 col-sm-5 text-right">
                            <p>Made with <i class="icon_heart"></i> in <a href="#" target="_blank">© CSE batch Inc.. 2022 All rights reserved. <br> <br> CSE Team </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </body>



    <div class="content "></div>


    <script>
        let menu = document.querySelector('#menu')
        let navbar = document.querySelector('.navbar');
        let header2 = document.querySelector('.header-2');

        function navToggle() {
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('nav-toggle');
        }

        window.addEventListener('scroll', function() {

            menu.classList.remove('fa-times');
            navbar.classList.remove('nav-toggle');

            if (window.scrollY > 10) {
                header2.classList.add('sticky');
            } else {
                header2.classList.remove('sticky');
            }

        });
    </script>



    <style>
        .grow img {
            transition: 1s ease;
        }
        
        .grow img:hover {
            -webkit-transform: scale(1.2);
            -ms-transform: scale(1.2);
            transform: scale(1.2);
            transition: 1s ease;
        }
        
        table {
            border-collapse: separate;
            border-spacing: 10px;
        }
        
        th {
            text-align: center;
            border-radius: 20px;
            -ms-text-kashida-space: 0%;
        }
        
        .small small {
            align-items: center;
        }
        
        body {
            display: contents;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            height: 0vh;
        }
        
        p {
            font-size: 20px;
            text-align: center;
            color: black;
        }
        
        i {
            font-size: 15px;
        }
        /*Sidenav*/
        
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #fff;
            overflow-x: hidden;
            transition: 0.5s;
            box-shadow: 0 4px 8px -3px #555454;
            padding-top: 0px;
        }
        
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s
        }
        
        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            color: #fff;
        }
        
        @media screen and (max-height: 450px) {
            .sidenav a {
                font-size: 18px;
            }
        }
        
        .sidenav-heading {
            font-size: 36px;
            color: #fff;
        }
        
        nav {
            text-align: center;
            margin-top: 0px;
            font: bold;
            font-weight: bold;
            background-color: white;
            height: max-content;
            background-color: #F1F3F6;
        }
        
        .navigation a {
            color: black;
            margin-right: 30px;
            text-align: center;
            text-decoration: none;
            padding-top: 25%;
        }
        
        div {
            margin-right: 3%;
        }
        
        .text-block1 .text-block2 .text-block3 .text-block4 {
            background-color: white;
        }
        
        .navigation a img {
            width: 70px;
            border-radius: 0%;
            align-items: center;
            border: 5px double black;
            outline: 2px solid white;
            outline-offset: -4px;
            margin-left: 2%;
            margin-right: 2%;
            margin-top: 1%;
        }
        
        nav {
            align-content: center;
        }
        
        .navigation {
            align-content: center;
        }
        /*#slider {
        margin-top: 1%;
        overflow: hidden;
        width: 70%;
        align-items: center;
        border: 3px solid;
        margin-left: 15%;
        margin-left: 15%;
    }
    
    #slider figure {
        position: relative;
        width: 500%;
        margin: 0;
        left: 0;
        animation: 20s slider infinite;
    }
    
    #slider figure img {
        float: left;
        width: 20%;
    }
    
    @keyframes slider {
        0% {
            left: 0;
        }
        20% {
            left: 0;
        }
        25% {
            left: -100%;
        }
        45% {
            left: -100%;
        }
        50% {
            left: -200%;
        }
        70% {
            left: -200%;
        }
        75% {
            left: -300%;
        }
        95% {
            left: -300%;
        }
        100% {
            left: -400%;
        }
    }*/
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-transform: capitalize;
            transition: all .2s linear;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
        }
        
        .content {
            min-height: 130vh;
            background: url(bg.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }
        
        header .header-1 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: black;
            width: 100%;
            padding: 10px 20px;
        }
        
        header .header-1 .logo {
            color: white;
            font-size: 25px;
        }
        
        header .header-1 form {
            display: flex;
        }
        
        header .header-1 form #search {
            height: 40px;
            width: 600px;
            background: none;
            outline: none;
            border: 2px solid white;
            color: #333;
            padding: 0 10px;
            font-size: 17px;
        }
        
        header .header-1 form label {
            height: 40px;
            width: 60px;
            background: black;
            border: 2px solid white;
            color: white;
            cursor: pointer;
            line-height: 40px;
            text-align: center;
            font-size: 20px;
        }
        
        header .header-1 form label:hover {
            color: red;
        }
        
        header .header-2 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgb(126, 39, 57);
            width: 100%;
            padding: 10px 20px;
        }
        
        header .header-2 .navbar ul {
            display: flex;
            align-items: center;
            justify-content: space-between;
            list-style: none;
        }
        
        header .header-2 .navbar ul li {
            margin: 10px;
        }
        
        header .header-2 .navbar ul li a {
            color: black;
            font-size: 20px;
        }
        
        header .header-2 .navbar ul li a:hover {
            color: blue;
        }
        
        header .header-2 .icons a {
            font-size: 20px;
            color: #fff;
            margin: 10px;
        }
        
        header .header-2 .icons a:hover {
            color: blue;
        }
        
        #menu {
            font-size: 20px;
            color: #fff;
            cursor: pointer;
            display: none;
        }
        
        header .header-2.sticky {
            position: fixed;
            top: 0;
            left: 0;
            box-shadow: 0 3px 5px #333;
        }
        /* media queries  */
        
        @media (max-width:991px) {
            header .header-1 form #search {
                width: 100%;
            }
        }
        
        @media (max-width:768px) {
            header .header-2 #menu {
                display: block;
            }
            header .header-2 .navbar {
                position: fixed;
                top: -1000px;
                left: 50%;
                transform: translate(-50%, -50%);
                opacity: 0;
            }
            header .header-2 .navbar ul {
                flex-flow: column;
                width: 250px;
                border-radius: 5px;
                padding: 30px 10px;
                background: crimson;
                box-shadow: 0 0 0 100vh rgba(0, 0, 0, .5), 0 3px 5px #000;
            }
            header .header-2 .navbar ul li {
                width: 100%;
                text-align: center;
            }
            header .header-2 .navbar ul li a {
                font-size: 25px;
                display: block;
            }
            header .header-2 .navbar.nav-toggle {
                top: 55%;
                opacity: 1;
            }
        }
        
        @media (max-width:500px) {
            header .header-1 {
                flex-flow: column;
            }
            header .header-1 form {
                padding-top: 10px;
            }
        }
        /* Three image containers (use 25% for four, and 50% for two, etc) */
        
        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }
        /* Clear floats after image containers */
        
        .row1::after {
            content: " ";
            clear: both;
            display: table;
        }
        
        .row1 {
            display: flex;
        }
        
        .column {
            flex: 33.33%;
            padding: px;
            align-items: center;
            margin-left: 5%;
        }
        
        body {
            background: #fbfbfd;
        }
        
        .new_footer_area {
            background: black;
        }
        
        .new_footer_top {
            padding: 50px 0px 100px;
            position: relative;
            overflow-x: hidden;
        }
        
        .new_footer_area .footer_bottom {
            padding-top: 5px;
            padding-bottom: 50px;
        }
        
        .footer_bottom {
            font-size: 14px;
            font-weight: 300;
            line-height: 20px;
            color: white;
            padding: 27px 0px;
        }
        
        .new_footer_top .company_widget p {
            font-size: 16px;
            font-weight: 300;
            line-height: 28px;
            color: #858da8;
            margin-bottom: 20px;
        }
        
        .new_footer_top .company_widget .f_subscribe_two .btn_get {
            border-width: 1px;
            margin-top: 20px;
        }
        
        .btn_get_two:hover {
            background: transparent;
            color: #5e2ced;
        }
        
        .btn_get:hover {
            color: #fff;
            background: #6754e2;
            border-color: #6754e2;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        
        a:hover,
        a:focus,
        .btn:hover,
        .btn:focus,
        button:hover,
        button:focus {
            text-decoration: none;
            outline: none;
        }
        
        .new_footer_top .f_widget.about-widget .f_list li a:hover {
            color: white;
        }
        
        .new_footer_top .f_widget.about-widget .f_list li {
            margin-bottom: 11px;
        }
        
        .f_widget.about-widget .f_list li:last-child {
            margin-bottom: 0px;
        }
        
        .f_widget.about-widget .f_list li {
            margin-bottom: 15px;
        }
        
        .f_widget.about-widget .f_list {
            margin-bottom: 0px;
        }
        
        .new_footer_top .f_social_icon a {
            width: 44px;
            height: 44px;
            line-height: 43px;
            background: transparent;
            border: 1px solid #e2e2eb;
            font-size: 24px;
        }
        
        .f_social_icon a {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            font-size: 14px;
            line-height: 45px;
            color: #858da8;
            display: inline-block;
            background: #ebeef5;
            text-align: center;
            -webkit-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        
        .ti-facebook:before {
            content: "\e741";
        }
        
        .ti-twitter-alt:before {
            content: "\e74b";
        }
        
        .ti-vimeo-alt:before {
            content: "\e74a";
        }
        
        .ti-pinterest:before {
            content: "\e731";
        }
        
        .btn_get_two {
            -webkit-box-shadow: none;
            box-shadow: none;
            background: #5e2ced;
            border-color: #5e2ced;
            color: #fff;
        }
        
        .btn_get_two:hover {
            background: transparent;
            color: #5e2ced;
        }
        
        .new_footer_top .f_social_icon a:hover {
            background: #5e2ced;
            border-color: #5e2ced;
            color: white;
        }
        
        .new_footer_top .f_social_icon a+a {
            margin-left: 4px;
        }
        
        .new_footer_top .f-title {
            margin-bottom: 30px;
            color: #263b5e;
        }
        
        .f_600 {
            font-weight: 600;
        }
        
        .f_size_18 {
            font-size: 18px;
        }
        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: black;
        }
        
        .new_footer_top .f_widget.about-widget .f_list li a {
            color: #6a7695;
        }
        
        .new_footer_top .footer_bg {
            position: absolute;
            bottom: 0;
            background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEigB8iI5tb8WSVBuVUGc9UjjB8O0708X7Fdic_4O1LT4CmLHoiwhanLXiRhe82yw0R7LgACQ2IhZaTY0hhmGi0gYp_Ynb49CVzfmXtYHUVKgXXpWvJ_oYT8cB4vzsnJLe3iCwuzj-w6PeYq_JaHmy_CoGoa6nw0FBo-2xLdOPvsLTh_fmYH2xhkaZ-OGQ/s16000/footer_bg.png") no-repeat scroll center 0;
            width: 100%;
            height: 266px;
        }
        
        .new_footer_top .footer_bg .footer_bg_one {
            background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEia0PYPxwT5ifToyP3SNZeQWfJEWrUENYA5IXM6sN5vLwAKvaJS1pQVu8mOFFUa_ET4JuHNTFAxKURFerJYHDUWXLXl1vDofYXuij45JZelYOjEFoCOn7E6Vxu0fwV7ACPzArcno1rYuVxGB7JY6G7__e4_KZW4lTYIaHSLVaVLzklZBLZnQw047oq5-Q/s16000/volks.gif") no-repeat center center;
            width: 330px;
            height: 105px;
            background-size: 100%;
            position: absolute;
            bottom: 0;
            left: 30%;
            -webkit-animation: myfirst 22s linear infinite;
            animation: myfirst 22s linear infinite;
        }
        
        .new_footer_top .footer_bg .footer_bg_two {
            background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhyLGwEUVwPK6Vi8xXMymsc-ZXVwLWyXhogZxbcXQYSY55REw_0D4VTQnsVzCrL7nsyjd0P7RVOI5NKJbQ75koZIalD8mqbMquP20fL3DxsWngKkOLOzoOf9sMuxlbyfkIBTsDw5WFUj-YJiI50yzgVjF8cZPHhEjkOP_PRTQXDHEq8AyWpBiJdN9SfQA/s16000/cyclist.gif") no-repeat center center;
            width: 88px;
            height: 100px;
            background-size: 100%;
            bottom: 0;
            left: 38%;
            position: absolute;
            -webkit-animation: myfirst 30s linear infinite;
            animation: myfirst 30s linear infinite;
        }
        
        @-moz-keyframes myfirst {
            0% {
                left: -25%;
            }
            100% {
                left: 100%;
            }
        }
        
        @-webkit-keyframes myfirst {
            0% {
                left: -25%;
            }
            100% {
                left: 100%;
            }
        }
        
        @keyframes myfirst {
            0% {
                left: -25%;
            }
            100% {
                left: 100%;
            }
        }
        /*************footer End*****************/
    </style>

    </html>