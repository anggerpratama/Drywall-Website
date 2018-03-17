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
    <h2 class="text-center"><b>REVIEWS</b></h2>
    <div class="lineyew"></div>

    <div class="row">
        <div class="col-lg-1">
            <img src="<?= $baseImg ?>chather.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-11 review">
            <h3>YELP REVIEWS</h3>
            <p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s “</p>
        </div>
    </div>
    <div class="my-4"></div>
    <div class="row">
        <div class="col-lg-1">
            <img src="<?= $baseImg ?>chather.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-11 review2">
            <h3>GOOGLE REVIEWS</h3>
            <p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s “</p>
        </div>
    </div>
    <div class="my-4"></div>
    <div class="row">
        <div class="col-lg-1">
            <img src="<?= $baseImg ?>chather.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-11 review">
            <h3>KODUZ REVIEWS</h3>
            <p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s “</p>
        </div>
    </div>

    <!-- end of coontent -->
<?php 
    include 'footer.php';
?>