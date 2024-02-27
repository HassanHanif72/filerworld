<footer class="footer bg-footer">
    <div class="container">
        <div class="row mt-0 pt-4 pb-4">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-logo">
                    <a href="https://filerworld.com/"><img src="assets/images/footer-logo.webp" /></a>
                    <p>
                        Filer World is a business on a mission to help Pakistani Businesses by filling their taxes and establishing a US footing. We provide a suite of services including, US Company Registration, Pakistani Tax Filing, ITIN - Taxpayer ID for Non U.S. Citizens, and Trademark registration in the USA. Contact us today to know more about how we can help you.
                    </p>
                    <div class="footer-social">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-xs-12 col-6">
                <div class="footer-links m-t-left">
                    <h6>Our Services</h6>
                    <ul class="list-unstyled">
                        <li><a href="us-llc">USA LLC</a></li>
                        <li><a href="us-bank">US Bank</a></li>
                        <li><a href="itin">ITIN</a></li>
                        <li><a href="tax-filing">Tax Filing</a></li>
                        <li><a href="blog">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 col-6">
                <div class="footer-links m-t-left">
                    <h6>Contact</h6>
                    <ul class="list-unstyled">
                        <li><a href="tel:1234567890"><i class="fa fa-phone"></i> 1234567890</a></li>
                        <li><a href="https://wa.me/1234567890" target="_blank"><i class="fa fa-whatsapp"></i> 1234567890</a></li>
                        <li><a href="https://wa.me/1234567890" target="_blank"><i class="fa fa-comments-o me-1"></i> Start Live Chat</a></li>
                        <li><a href="mailto:info@filerworld.com"><i class="fa fa-envelope"></i> info@filerworld.com</a></li>
                        <li><i class="fa fa-map-marker"></i> Suite # 409, 4th Floor, Progressive Center PECHS Block-6, Sharah-e-Faisal, Karachi, Sindh, PK</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-links">
                    <h6>Subscribe Us</h6>
                    <p>Stay updated with our latest news. We promise not to spam!</p>
                    <form method="POST" action="subscribe">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your Email" aria-label="Your Email"
                                aria-describedby="Your Email" name="email" pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required>
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="footer-bottom">
    <div class="container">
        <div class="row align-items-center mt-0 pt-2 pb-2">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="footer-bootom-links">
                    <p>© Copyright 2023 - 2024 Filer World (Pvt) Ltd. All rights reserved.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="social-link text-end">
                    <p class="mb-0">
                        <a href="terms-and-conditions">Terms &amp; Conditions</a>
                        <a href="privacy-policy">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Website JS -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>-->
<!--<script src="assets/js/bootstrap.bundle.min.js"></script>-->
<!-- Slick Carousel JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>
<!-- AOS JS -->
<script src="assets/js/aos.js"></script>
<script>
AOS.init({
    duration: 1000
});
</script>
<!-- Offcanvas Side Bar -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <a href="index"><img src="assets/images/logo.webp" alt="logo"></a>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
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
                        <li><a class="dropdown-item" href="tax-filling">Tax Filing</a></li>
                      </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'pricing') { echo 'active'; } ?>" href="pricing">
                    Pricing
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php  if ($page == 'blog') { echo 'active'; } ?>" href="blog">
                    Blog
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'contact-us') { echo 'active'; } ?>" href="contact-us">
                    Contact Us
                </a>
            </li>
        </ul>
        <div class="mt-3">
            <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal"
                class="btn btn-theme">Get Started</a>
        </div>
    </div>
</div>