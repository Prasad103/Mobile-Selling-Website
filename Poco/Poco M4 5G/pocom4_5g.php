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
    <title>Poco C31</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="product-box">
                <div class="all-images">
                    <div class="small-images">
                        <img src="Poco M4 5G-1.png" onclick="clickimg(this)">
                        <img src="Poco M4 5G-2.png" onclick="clickimg(this)">
                        <img src="Poco M4 5G-3.png" onclick="clickimg(this)">
                        <img src="Poco M4 5G-6.png" onclick="clickimg(this)">

                    </div>
                    <div class="main-images">
                        <img src="Poco M4 5G-1.png" id="imagebox">
                    </div>
                </div>
            </div>
            <div class="text">
                <div class="contect">
                    <p class="brand">Brand : Poco</p>
                    <h2>Poco M4 (Black, 64GB)</h2>
                    <div class="review" style="background-color: black;">
                        <div>
                            <iframe width="560" height="200" src="https://www.youtube.com/embed/-1uMry1-vdk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <span style="font-size:200%; color:orange;">&#9733;</span>
                        <span style="font-size:200%; color:orange;">&#9733;</span>
                        <span style="font-size:200%; color:orange;">&#9733;</span>
                        <span style="font-size:200%; color:orange;">&#9734;</span>
                        <span style="font-size:200%; color:orange;">&#9734;</span>
                    </div>
                    <div class="pricebox">
                        <p class="price">&#8377; 11,999 (25% off)</p>
                        <strike>&#8377; 15,999</strike>
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


    <script>
        function clickimg(smallImg) {
            var fullImg = document.getElementById("imagebox");
            fullImg.src = smallImg.src
        }

        function myFunction() {
            alert("Product is added to Cart Successfully")
        }
    </script>

    <style>
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


</body>

</html>