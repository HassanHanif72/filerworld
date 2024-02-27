<!-- popup -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md model-sec">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="model-discount">
                            <div class="d-block text-center align-items-center">
                                <div class="animate-div"><span>Secure Your Quote with Filer World</span></div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <hr>
                            <form method="POST" action="signup" class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" class="form-control model-input" placeholder="Enter Name"
                                                pattern="[A-Za-z ]+" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control model-input"
                                                placeholder="Enter Email" name="email"
                                                pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Phone</label>
                                            <input type="text" class="form-control model-input"
                                                placeholder="Enter Phone No." name="phone"
                                                onkeypress="if(this.value.length==12) return false;" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Service</label>
                                            <select class="form-control form-select model-input" id="mySelect"
                                                required="" name="service">
                                                <option selected="" disabled="" value="">Select Service</option>
                                                <option value="US LLC">US LLC</option>
                                                <option value="US Bank">US Bank</option>
                                                <option value="ITIN">ITIN</option>
                                                <option value="Tax Filling">Tax Filing</option>

                                            </select>


                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="btn btn-theme mt-1 w-100">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->

<section class="top-bar d-lg-block d-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="top-bar-social">
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="top-bar-contact">
                    <a href="tel:1234567890"><i class="fa fa-phone"></i> 1234567890</a>
                    <a href="https://wa.me/1234567890" target="_blank"><i class="fa fa-whatsapp"></i> 1234567890</a>
                    <a href="mailto:info@filerworld.com"><i class="fa fa-envelope"></i> info@filerworld.com</a>
                </div>
            </div>
        </div>
    </div>
</section>