<?php
$page = basename($_SERVER['PHP_SELF'], '.php');
?>
<?php include 'top-bar.php'?>
<header class="header">
    <nav class="navbar navbar-expand-xl navbar-dark stroke bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="https://filerworld.com/">
                <img src="assets/images/logo.webp" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'index') { echo 'active'; } ?>" href="https://filerworld.com/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'about-us') { echo 'active'; } ?>" href="about-us">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link <?php if ($page == 'us-llc' || $page == 'us-bank' || $page == 'itin' || $page == 'tax-filing') { echo 'active'; } ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Services <i class="fa fa-caret-down"></i>
                            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="us-llc">USA LLC</a></li>
                        <li><a class="dropdown-item" href="us-bank">US Bank</a></li>
                        <li><a class="dropdown-item" href="itin">ITIN</a></li>
                        <li><a class="dropdown-item" href="tax-filing">Tax Filing</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'pricing') { echo 'active'; } ?>" href="pricing">
                            Pricing
                        </a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link <?php // if ($page == 'blog') { echo 'active'; } ?>" href="#">-->
                    <!--        Blog-->
                    <!--    </a>-->
                    <!--</li>-->
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'blog') { echo 'active'; } ?>" href="blog">
                             Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'contact-us') { echo 'active'; } ?>" href="contact-us">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ms-3 d-xl-block d-none">
                <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-theme">Get Quote</a>
            </div>
        </div>
    </nav>
</header>