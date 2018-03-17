<?php $baseImg="../assets/img/" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Drywall Website</title>
</head>

<body>
<div class="responmenu">
        <i class="fa fa-bars" aria-hidden="true" id="showmen"></i>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-9  backwhite">
                
            </div>
        </div>
    </div>

    <div class="container-fluid listrespn">
        <div class="row">
            <div class="col-12 text-center">
                <div class="closs">
                    <i class="fa fa-close" aria-hidden="true"></i>
                </div>
                <h5 class="display-3">MENU</h5>
                        <h2><a href="../">Home</a></h2>
                        <h2><a href="services.php">Service</a></h2>
                        <h2><a href="about.php">About</a></h2>
                        <h2><a href="contact.php">Contact</a></h2>
                        <h2><a href="review.php">Review</a></h2>
                        <h2><a href="porto.php">Portofolio</a></h2>
                        <h2><a href="testimoni.php">Testimonial</a></h2>
                        <h2><a href="award.php">Awards</a></h2>
                        <h2><a href="request.php">Request</a></h2>
            </div>
        </div>
    </div>
    <div class="container-fluid onviewpx">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 social">
                <div class="float-lg-right text-right">
                    <a>(77D) 995-1995</a>
                    <img src="../assets/img/mail.png" alt="">
                    <img src="../assets/img/twit.png" alt=""><br>
                    <div style="margin-top:5px"></div>
                    <a>@info@johndrywall.com
                        <img src="../assets/img/phone.png" alt="">
                        <img src="../assets/img/face.png" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="menimg">
                    <img src="../assets/img/logo.png" alt="">
                </div>
                <div class="menu">
                    <div class="list-menu">
                        <a href="../">Home</a>
                        <a href="services.php">Service</a>
                        <a href="about.php">About</a>
                        <a href="contact.php">Contact</a>
                        <a href="review.php">Review</a>
                        <a href="porto.php">Portofolio</a>
                        <a href="#" id="showdrop">Others</a>
                        <div class="drophere text-center">
                            <a href="testimoni.php">Testimonial</a> <br> <br>
                            <a href="request.php">Request</a> <br> <br>
                            <a href="award.php">Awards</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container papper">

    <!-- serve content -->
    <div style="margin-top:20vh"></div>
    <h2 class="text-center"><b>AWARDS &amp; AFFILITATIONS </b></h2>
    <div class="lineyew"></div>

    <div class="sertext">
        <p>Here at Johnson Drywall &amp; Paint we like to know the people we work with face to face. 
            We are active members of professional organizations such as the Building Industry Association 
            and the National Association of the Remodeling Industry because it helps us be aware and informed 
            of the latest developments in our industry.  But we also build relationships with local showrooms 
            and suppliers such as Hamilton Parker and CARR supply to enable us to provide quality materials 
            and finishes for our projects. We hope to provide the best in quality and service to our clients 
            by being involved in our community both personally and professionally. </p>
    </div>

    <div  class="text-center">
        <p style="font-size:30px">2017 AWARDS &amp; OTHERS </p>
        <img src="<?= $baseImg ?>medal.png" alt="">
    </div>
    <div class="my-5"></div>
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-7 awrd">
            <p>Since starting, we've earned many awards. Some of these include:</p>
            <ul>
                <li> National Fine Builders Association Award  -  2006, 2008</li>
                <li>The Master Design Awards  -  2009</li>
                <li>Qualified Remodeler Magazine Top 500  -  2011, 2016</li>
                <li>Angie's List Super Service Award  -  2011, 2013</li>
                <li>Kudzu best of  -  2012, 2015</li>
                <li>Best of Houzz  2016 - Client Satisfaction</li>
            </ul>
        </div>
    </div>
    <div class="my-4"></div>
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-7 awrd">
            <p>In good standing with these reputable organizations:</p>
            <ul>
                <li>National Association of the Remodeling Industry</li>
                <li>National Kitchen &amp; Bath Association</li>
                <li>Building Industry Association of Southern California</li>
                <li>California State License Board</li>
                <li>National Association of Home Builders</li>
                <li>Better Business Bureau (BBB) </li>

            </ul>
        </div>
    </div>
    <div class="my-4"></div>
    <div class="text-center">
        <img src="<?= $baseImg ?>/logoblue.png" alt="">
    </div>

    <!-- end of coontent -->
<?php 
    include 'footer.php';
?>