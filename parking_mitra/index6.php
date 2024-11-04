<?php
session_start();
$Result = $_SESSION['email'];
print_r($Result);

?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Parking Mitra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/color.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
    <!--loader-->
    <div class="loader-wrap color-bg">
        <div class="loader-bg"></div>
        <div class="loader-inner">
            <div class="loader"></div>
        </div>
    </div>
    <!--loader end-->
    <!-- Main  -->
    <div id="main">
        <!-- header-->
        <header class="main-header">
            <a href="index6.php" class="logo-holder ajax"><img src="images/pmlogo.png" alt=""></a>
            <!-- nav-button-wrap-->
            <div class="nav-button but-hol">
                <span class="nos"></span>
                <span class="ncs"></span>
                <span class="nbs"></span>
                <div class="menu-button-text">Menu</div>
            </div>
            <!-- nav-button-wrap end-->
            <div class="header-social">
                <ul>
                    <li><a href="https://www.facebook.com/ParkingMitra" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/parking_mitra/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/ParkingMitra" target="_blank"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.youtube.com/channel/UC3zPjXQj6PKmvWW8UlsVCGQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="folio-btn">
                <a class="folio-btn-item ajax" href="index6.php"></a>
                <span class="folio-btn-tooltip">Home</span>
            </div>
        </header>
        <!-- header end -->
        <!-- wrapper -->
        <div id="wrapper">
            <!-- content-holder  -->
            <div class="content-holder scroll-content" data-pagetitle="home parallax image">
                <!-- nav-holder-->
                <div class="nav-holder but-hol">
                    <div class="nav-scroll-bar-wrap fl-wrap">
                        <a href="index6.php" class="ajax logo_menu"><img src="images/pm2.png" alt=""></a>
                        <div class="nav-container fl-wrap">
                            <!-- nav -->

                            <nav class="nav-inner" id="menu">
                                <ul>
                                    <li><a href="index6.php" class="act-link">Home</a></li>
                                    <li><a href="#sec3">Order QR</a></li>
                                    <li><a href="index6.php">Contacts</a></li>
                                    <li><a href="#sec2">About Us</a></li>
                                    <li><a href="#sec6">Policy</a></li>
                                    <?php
                                    if (isset($Result) && $Result != "") { ?>
                                        <li><a href="profile.php">Profile</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    <?php
                                    } else {
                                    ?>
                                        <li><a href="login.php">Login</a></li>
                                    <?php }
                                    ?>
                                </ul>
                            </nav>
                            <!-- nav end-->
                        </div>
                    </div><br>
                    <div class="share-wrapper">
                        <span class="share-title">Share : </span>
                        <div class="share-container"></div>
                    </div>
                    <div class="nav-holder-line"></div>
                </div>
                <div class="nav-holder-dec color-bg"></div>
                <div class="nav-overlay"></div>
                <!-- nav-holder end -->
                <!-- fixed-column-wrap -->
                <div class="fixed-column-wrap">
                    <div class="progress-bar-wrap">
                        <div class="progress-bar color-bg"></div>
                    </div>
                    <div class="column-image fl-wrap full-height">
                        <div class="bg bg-scroll" data-bg="images/bg/long/img1.jpg"></div>
                        <div class="overlay"></div>
                        <div class="column-image-anim"></div>
                    </div>
                    <div class="fcw-dec"></div>
                    <div class="fixed-column-tilte fdct fcw-title"><span id="quote">About Us</span></div>
                </div>
                <!-- fixed-column-wrap end-->
                <!-- hero-wrap-->
                <div class="hero-wrap fl-wrap full-height scroll-con-sec hidden-section" id="sec1" data-scrollax-parent="true">
                    <div class="bg par-elem" data-bg="images/bg/img1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                    <div class="overlay"></div>
                    <div class="half-hero-wrap">
                        <div class="pr-bg"></div>
                        <div class="rotate_text hero-decor-let">
                            <div>Parking</div>
                            <div><span>Mitra</span></div>
                            <div>Parking</div>
                            <div><span>Solution</span></div>
                        </div>
                        <h1>Parking Mitra <br> Your <span>Parking</span> Companion<br> </h1>
                        <h4>Getting stuck in the parking lot is one of the big problems in India. And we are here to
                            solve this problem. </h4>
                        <div class="clearfix"></div>
                        <a href="#sec2" class="btn fl-btn custom-scroll-link  color-bg">View More Details</a>
                    </div>
                    <!-- hero  elements  -->
                    <div class="hero-border hb-top"></div>
                    <div class="hero-border hb-bottom"></div>
                    <div class="hero-border hb-right"></div>
                    <div class="hero-corner hiddec-anim"></div>
                    <div class="hero-corner2 hiddec-anim"></div>
                    <div class="hero-corner3 hiddec-anim"></div>
                    <div class="scroll-down-wrap sdw_hero hiddec-anim">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                        <span>Scroll down to discover</span>
                    </div>
                    <!-- hero  elements end-->
                </div>
                <!-- hero-wrap end-->
                <!-- column-wrap -->
                <div class="column-wrap">
                    <!--content -->
                    <div class="content">
                        <!--page-scroll-nav-->


                        <div class="page-scroll-nav fl-wrap">
                            <nav class="scroll-init color2-bg">
                                <ul class="no-list-style">
                                    <li><a class="scroll-link fbgs" href="#sec2" data-bgscr="images/bg/long/img1.jpg" data-bgtex="about"><span>About</span></a></li>
                                    <li><a class="scroll-link fbgs" href="#sec3" data-bgscr="images/bg/long/img2.jpg" data-bgtex="Order QR"><span>Order QR</span></a></li>
                                    <li><a class="scroll-link fbgs" href="#sec4" data-bgscr="images/bg/long/img3.jpg" data-bgtex="Installation"><span>Installation</span></a></li>
                                    <li><a class="scroll-link fbgs" href="#sec5" data-bgscr="images/bg/long/img4.jpg" data-bgtex="How To Use"><span>Instruction</span></a></li>
                                    <li><a class="scroll-link fbgs" href="#sec6" data-bgscr="images/bg/long/img5.jpg" data-bgtex="Policy"><span>Policies</span></a></li>
                                    <?php
                                    if (isset($Result) && $Result != "") { ?>
                                                <li><a href="profile.php"><i class="fa fa-user"></i></a></li>
                                                <li><a href="logout.php"><i class="far fa-sign-out fa-lg"></i></a></li>
                                    <?php
                                    } else {
                                    ?>
                                        <li><a href="login.php"><span>Login</span></a></li>
                                        <li><a href="adminlogin.php"><i class="fa fa-user-circle"></i></a></li>
                                    <?php }
                                    ?>
                                </ul>
                            </nav>

                            <div class="arrowpagenav"></div>
                        </div>

                        <!--page-scroll-nav end-->
                        <!--section -->
                        <section id="sec2" class="hidden-section scroll-con-sec bot-element">
                            <div class="col-wc_dec"></div>
                            <div class="container">
                                <div class="section-title fl-wrap">
                                    <h3>About Us</h3>
                                    <p>Parking Mitra. Your Parking Companion.</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dec-img   fl-wrap">
                                            <img src="images/abt.jpg" class="respimg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="main-about fl-wrap">
                                            <h5>Parking Mitra</h5>
                                            <h2>Innovative solutions<br>to <span> your parking </span> problem
                                            </h2>
                                            <p>Getting stuck in the parking lot is one of the big problems in India. And
                                                we are here to solve this problem. Parking Mitra is a unique QR Based
                                                service which enables communication with the car owner. The Parking
                                                Mitra QR<!--Developed by Luc1f3rXVI-->
                                                Code Sticker is pasted on the car’s windscreen and anyone who is facing
                                                problem with the car can scan the code to notify the car owner about his
                                                issue and ask him to take necessary actions. This helps to avoid
                                                unnecessary
                                                rage and prevents any damage to vehicle and people.</p>
                                            <div class="dec-list fl-wrap">
                                                <ul>
                                                    <li>We use QR code and Our App to help you.</li>
                                                    <li>Easy to Install.</li>
                                                    <li>Easy to Use.</li>
                                                    <li>Innovative Technique.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sec-number">01.</div>
                            </div>
                        </section>
                        <!--section end -->
                        <!--section -->
                        <section class="dark-bg bot-element">
                            <div class="container">
                                <div class="inline-facts-container fl-wrap">
                                    <!-- inline-facts -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="105">0</div>
                                                </div>
                                            </div>
                                            <h6>Serving Clients</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="521">0</div>
                                                </div>
                                            </div>
                                            <h6>Happy customers</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="825">0</div>
                                                </div>
                                            </div>
                                            <h6>Working hours</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap">
                                        <div class="inline-facts">
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="15">0</div>
                                                </div>
                                            </div>
                                            <h6>Awards won</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                </div>
                            </div>
                        </section>
                        <!--section end -->
                        <div class="section-separator bot-element"><span class="fl-wrap"></span></div>
                        <!--section  -->
                        <section class="hidden-section scroll-con-sec bot-element" id="sec3">
                            <div class="container">
                                <div class="section-title fl-wrap">
                                    <h3>Order QR</h3>
                                    <p>We provide our services to a wide variety of customers. Anybody who onws a
                                        vehicle can enjoy our servies. </p>
                                </div>
                                <div class="sec-number">02.</div>
                                <div class="cards-wrap fl-wrap">
                                    <div class="row">
                                        <!--card item -->
                                        <div class="col-md-6">
                                            <div class="content-inner fl-wrap">
                                                <div class="content-front">
                                                    <div class="cf-inner">
                                                        <div class="bg " data-bg="images/services/img1.jpg"></div>
                                                        <div class="overlay"></div>
                                                        <div class="inner">
                                                            <h2>QR for Car</h2>
                                                            <p>We provide QR Decals for car, which you can use with our
                                                                app.</p>
                                                            <div class="serv-price-wrap"><span>Price</span>Rs.499</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <?php if (isset($Result) && $Result != "") { ?>
                                                    <a href="order.php?product=car" class="btn fl-btn custom-scroll-link  color-bg">Buy Now</a>
                                                    <?php }else{?>
                                                        <a href="login.php" class="btn fl-btn custom-scroll-link  color-bg">Buy Now</a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--card item end -->
                                        <!--card item -->
                                        <div class="col-md-6">
                                            <div class="content-inner fl-wrap">
                                                <div class="content-front">
                                                    <div class="cf-inner">
                                                        <div class="bg " data-bg="images/services/img2.jpg"></div>
                                                        <div class="overlay"></div>
                                                        <div class="inner">
                                                            <h2>QR for Bike</h2>
                                                            <p>We provide QR Decals for bike, which you can use with
                                                                ourapp.</p>
                                                            <div class="serv-price-wrap"><span>Price</span>Rs.399</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <?php if (isset($Result) && $Result != "") { ?>
                                                    <a href="order.php?product=bike" class="btn fl-btn custom-scroll-link  color-bg">Buy Now</a>
                                                    <?php }else{?>
                                                        <a href="login.php" class="btn fl-btn custom-scroll-link  color-bg">Buy Now</a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <!--card item end -->
                                        </div>
                                        <div class="srv-link-text fl-wrap">
                                            <h4>Have any doubts about the product ? Visit our contacts page : </h4>
                                            <a href="#" class="btn float-btn ajax  color-bg">Contacts</a>
                                        </div>
                                    </div>
                                </div>
                        </section>
                        <!--section end -->
                        <div class="section-separator bot-element"><span class="fl-wrap"></span></div>
                        <!--section  -->
                        <section class="scroll-con-sec bot-element" id="sec4">
                            <div class="container">
                                <div class="section-title fl-wrap">
                                    <h3>Installation Process</h3>
                                    <p>You need to follow these 3 simple steps to install the Parking Mitra QR Code
                                        Sticker. </p>
                                </div>
                                <div class="fl-wrap">
                                    <div class="container">
                                        <ul>
                                            <li class="col-md-4">
                                                <div style="background-color: #f5f5f5; min-height: 300px; padding: 20px;">
                                                    <h2 style="color: rgb(0, 0, 0);"><b>Wipe -- </b></h2>
                                                    <p style="margin: 20px;">"Wipe the area where you want to place the
                                                        Parking Mitra QR Code Sticker with a cloth."</p>
                                                </div>
                                            </li>
                                            <li class="col-md-4">
                                                <div style="background-color: #f5f5f5; min-height: 300px; padding: 20px;">
                                                    <h2 style="color: rgb(0, 0, 0);"><b>Peel & Paste -- </b></h2>
                                                    <p style="margin: 20px;">"Peel the adhesive sheet from the sticker
                                                        and paste it properly on the desired spot."</p>
                                                </div>
                                            </li>
                                            <li class="col-md-4">
                                                <div style="background-color: #f5f5f5; min-height: 300px; padding: 20px;">
                                                    <h2 style="color: rgb(0, 0, 0);"><b>Scan QR -- </b></h2>
                                                    <p style="margin: 20px;">"Scan the QR Code with your phone’s camera
                                                        or any other QR Code Scanner to register your code."</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sec-number">03.</div>
                            </div>
                            <div class="col-wc_dec col-wc_dec2 col-wc_dec3"></div>
                        </section>
                        <!--section end -->
                        <div class="section-separator bot-element"><span class="fl-wrap"></span></div>
                        <!--section  -->
                        <section class="hidden-section scroll-con-sec bot-element" id="sec5">
                            <div class="container">
                                <div class="section-title fl-wrap">
                                    <h3>How To Use</h3>
                                    <p>You need to follow these 3 simple steps to use the Parking Mitra QR Code
                                        services. </p>
                                </div>
                                <div class="fl-wrap">
                                    <div class="container">
                                        <ul>
                                            <li class="col-md-4">
                                                <div style="background-color: #f5f5f5; min-height: 300px; padding: 20px;">
                                                    <h2 style="color: rgb(0, 0, 0);"><b>Scan -- </b></h2>
                                                    <p style="margin: 20px;">"Scan the Parking Mitra QR Code on the
                                                        vehicle that is troubling you with any QR Code Scanner."</p>
                                                </div>
                                            </li>
                                            <li class="col-md-4">
                                                <div style="background-color: #f5f5f5; min-height: 300px; padding: 20px;">
                                                    <h2 style="color: rgb(0, 0, 0);"><b>Select -- </b></h2>
                                                    <p style="margin: 20px;">"Select the reason for which you want to
                                                        contact the vehicle owner."</p>
                                                </div>
                                            </li>
                                            <li class="col-md-4">
                                                <div style="background-color: #f5f5f5; min-height: 300px; padding: 20px;">
                                                    <h2 style="color: rgb(0, 0, 0);"><b>Send -- </b></h2>
                                                    <p style="margin: 20px;">"After selecting the option click on ‘SEND
                                                        MESSAGE’ button. Your request has been sent to the vehicle
                                                        owner."</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sec-number">04.</div>
                            </div>
                            <div class="col-wc_dec col-wc_dec2 col-wc_dec3"></div>
                        </section>
                        <!--section end -->
                        <div class="section-separator bot-element"><span class="fl-wrap"></span></div>
                        <!--section  -->
                        <section class="hidden-section scroll-con-sec bot-element" id="sec6">
                            <div class="container">
                                <div class="section-title fl-wrap">
                                    <h3>Our Policies</h3>
                                    <p>Our policies describes ParkingMitra.com on the collection, use, and disclosure of
                                        information about you in connection with your use of the domain
                                        ParkingMitra.com.</p>
                                </div>

                                <!-- client-list -->
                                <div class="fl-wrap">
                                    <div class="container">
                                        <ul>
                                            <li class="col-md-4">
                                                <div>
                                                    <h2 style="color: rgb(0, 0, 0);">Terms & Conditions</h2>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices
                                                        ac nunc. Mauris non ligula suscipit, vulputate mi accumsan,
                                                        dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem
                                                        non porta. "</p><br><br>
                                                    <a href="#" class="testi-link" target="_blank">More ></a>
                                                </div>
                                            </li>
                                            <li class="col-md-4">
                                                <div>
                                                    <h2 style="color: rgb(0, 0, 0);">Privacy Policy</h2>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices
                                                        ac nunc. Mauris non ligula suscipit, vulputate mi accumsan,
                                                        dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem
                                                        non porta. "</p><br><br>
                                                    <a href="#" class="testi-link" target="_blank">More ></a>
                                                </div>
                                            </li>
                                            <li class="col-md-4">
                                                <div>
                                                    <h2 style="color: rgb(0, 0, 0);">Return & Refund Policy</h2>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices
                                                        ac nunc. Mauris non ligula suscipit, vulputate mi accumsan,
                                                        dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem
                                                        non porta. "</p><br><br>
                                                    <a href="#" class="testi-link" target="_blank">More ></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- client-list end-->
                                </div>
                                <div class="sec-number">05.</div>
                            </div>
                            <div class="col-wc_dec col-wc_dec2"></div>
                        </section>
                        <!--section end -->
                        <div class="limit-box fl-wrap"></div>
                    </div>
                </div>
                <!--content  end -->
                <!--footer-->
                <div class="height-emulator fl-wrap"></div>
                <footer class="main-footer fixed-footer">
                    <div class="container">
                        <div class="footer-inner fl-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="footer-box fl-wrap">
                                        <div class="footer-title fl-wrap">
                                            <span>001.</span>
                                            Useful Links
                                        </div><br><br>
                                        <div style="text-align: left;">
                                            <ul class="list-unstyled">
                                                <li><a href="index6.php">HOME</a></li>
                                                <li><a href="#sec2">ABOUT</a></li>
                                                <li><a href="#">CONTACT</a></li>
                                                <li><a href="#sec3">Order QR</a></li>
                                                <li><a href="#sec6">POLICY</a></li>
                                            </ul>
                                        </div>
                                        <div class="footer-box-item fl-wrap">
                                            <div class="twitter-swiper-container fl-wrap" id="twitts-container"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer-title fl-wrap">
                                        <span>002.</span>
                                        Subscribe/Contact Us
                                    </div>
                                    <div class="footer-box-item fl-wrap">
                                        <p>Want to be notified about our new launches or an udpate. Just sign up
                                            and we'll send you a notification by email.</p>
                                        <div class="subcribe-form fl-wrap">
                                            <form id="subscribe" class="fl-wrap">
                                                <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                                <button type="submit" id="subscribe-button" class="subscribe-button color-bg"><i class="fal fa-paper-plane"></i>
                                                    Send </button>
                                                <label for="subscribe-email" class="subscribe-message"></label>
                                            </form>
                                        </div>
                                        <!-- footer-contacts-->
                                        <div class="footer-contacts fl-wrap">
                                            <ul>
                                                <li><i class="fal fa-phone"></i><span>Phone :</span><a href="#">+910542123123</a></li>
                                                <li><i class="fal fa-envelope"></i><span>Email :</span><a href="#">info@parkingmitra.com</a></li>
                                                <li><i class="fal fa-map-marker"></i><span>Address</span><a href="#">India</a></li>
                                            </ul>
                                        </div>
                                        <!-- footer end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subfooter fl-wrap">
                            <!-- policy-box-->
                            <div class="policy-box">
                                <span>&#169; Parking Mitra / All rights reserved. </span><br>
                                <span>Design & Developed with <i class="fa fa-heart"></i> in <a href="https://ashrishait.com" target="_blank">Ashrisha IT Solutions</a></span>
                            </div>
                            <!-- policy-box end-->
                            <div class="to-top to-top-btn color-bg"><span>To top</span></div>
                        </div>
                    </div>
                    <div class="sec-lines"></div>
                    <div class="footer-canvas">
                        <div class="dots gallery__dots" data-dots=""></div>
                    </div>
                </footer>
                <!--footer  end -->
            </div>
            <!-- content-holder end -->
        </div>
        <!--wrapper end -->
        <!-- cursor-->
        <div class="element">
            <div class="element-item"></div>
        </div>
        <!-- cursor end-->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script src="js/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>