<section class="get-touch" id="getquote">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12"> 
                <div class="right-col">
                    <h4 class="title">Get In Touch</h4>
                    <p>Our Customer Service Team is available to help you 24/7. So get in touch and let us know what exactly you need, we’ll handle the rest.</p>
                    <p><i class="fa fa-map-marker"></i> Suite # 409, 4th Floor, Progressive Center PECHS Block-6, Sharah-e-Faisal, Karachi, Sindh, PK</p>
                    <p><a href="mailto:info@filerworld.com"><i class="fa fa-envelope"></i> info@filerworld.com</a></p>
                    <p><a href="tel:1234567890"><i class="fa fa-phone"></i> 1234567890</a></p>
                    <p><a href="https://wa.me/1234567890" target="_blank"><i class="fa fa-whatsapp"></i> 1234567890</a></p>
                    
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="bg-form">
                    <form method="POST" action="signup" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input type="text" class="form-control bg-white" name="name" id="keyoff"
                                        pattern="[A-Za-z0-9\s]*" placeholder="Enter your name*" required>
                                    <div class="invalid-feedback">Please Enter Your Name</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input type="email" class="form-control bg-white" name="email"
                                        pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$"
                                        placeholder="Enter email here*" required>
                                    <div class="invalid-feedback">Please Enter Your Email</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <input type="number" class="form-control bg-white" name="phone"
                                        onkeypress="if(this.value.length==12) return false;"
                                        placeholder="Enter phone number*" required>
                                    <div class="invalid-feedback">Please Enter Your Phone Number</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <select class="form-control form-select bg-white" id="mySelect" required
                                        name="service">
                                        <option selected="" disabled="" value="">Select Service</option>
                                        <option value="US LLC">US LLC</option>
                                        <option value="US Bank">US Bank</option>
                                        <option value="ITIN">ITIN</option>
                                        <option value="Tax Filling">Tax Filing</option>
                                    </select>
                                    <div class="invalid-feedback">Please select an option.</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <textarea class="form-control bg-white" id="message"
                                        onkeypress="if(this.value.length==250) return false;" name="message" rows="4"
                                        cols="50" placeholder="Message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <center><button type="submit" class="btn btn-theme">Send Message</button></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>