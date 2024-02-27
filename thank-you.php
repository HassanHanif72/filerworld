<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank You</title>
    <?php include 'links.php'?>
</head>

<body>
    <!-- header -->
    <?php include 'header.php'?>
    <!-- End header -->

    <!-- section start -->
    <section class="thanyou-banner">
        <div class="container">
        <div class="row mythnkurw align-items-center">
            <div class="col-lg-6 col-md-6">
                <p>Hi <?php echo $_SESSION['name'];?> ,</p>
            </div>
            <!--<div class="col-lg-6 col-md-6 price-credit">-->
            <!--    <a href="https://wa.me/1234567890" target="_blank" class="btn-theme mythnkurw text-decoration-none">Credit : £40.00</a>-->
            <!--</div>-->
            
            <h1 class="text-center">THANK YOU FOR <span>YOUR SIGN UP</span></h1>
     
        <i class="fa fa-check-circle" aria-hidden="true"></i>
        <p class="myfnts">We appreciate your onboarding with Filer World. Our team is committed to guiding you, and you will soon be connected with your dedicated counselor. For urgent inquiries, please WhatsApp us at<br> <a href="https://wa.me/1234567890" target="_blank">1234567890</a></p>
        
        </div>
        
    </div>
    </section>
    <!-- End section -->

    <!-- footer -->
    <?php include 'footer.php'?>
    <!-- end -->


</body>

</html>