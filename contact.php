<?php
include "template/head.php";
include "template/nav.php";
?>

<!-- Start Contact Form -->
<div class="untree_co-section">
    <div class="container">
        <div class="block">
            <div class="row justify-content-center">
                
                
                <div class="col-md-8 col-lg-8 pb-4">
                    
                    <div class="row mb-5">
                        <h1>Contact us</h1>
                    </div>

                    <div class="row mb-5">
                        <div class="col-lg-4">
                            <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                <div class="service-icon color-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg>
                                </div> <!-- /.icon -->
                                <div class="service-contents">
                                    <p>456 Park Avenue, New York</p>
                                </div> <!-- /.service-contents-->
                            </div> <!-- /.service -->
                        </div>

                        <div class="col-lg-4">
                            <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                <div class="service-icon color-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                                    </svg>
                                </div> <!-- /.icon -->
                                <div class="service-contents">
                                    <p>furni.contact@gmail.com</p>
                                </div> <!-- /.service-contents-->
                            </div> <!-- /.service -->
                        </div>

                        <div class="col-lg-4">
                            <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                <div class="service-icon color-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                </div> <!-- /.icon -->
                                <div class="service-contents">
                                    <p>+1 294 3925 3939</p>
                                </div> <!-- /.service-contents-->
                            </div> <!-- /.service -->
                        </div>
                    </div>

                    <form>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black mb-1" for="inputFName">First name</label>
                                    <input type="text" class="form-control p-2" id="inputFName">
                                    <span id="errorFName" class="mb-0 text-danger"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black mb-1" for="inputLName">Last name</label>
                                    <input type="text" class="form-control p-2" id="inputLName">
                                    <span id="errorLName" class="mb-0 text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-black mb-1" for="inputEmail">Email address</label>
                            <input type="email" class="form-control p-2" id="inputEmail">
                            <span id="errorEmail" class="mb-0 text-danger"></span>
                        </div>

                        <div class="form-group mb-5">
                            <label class="text-black mb-1" for="inputMsg">Message</label>
                            <textarea class="form-control p-2" id="inputMsg" cols="30" rows="5"></textarea>
                            <span id="errorMsg" class="mb-0 text-danger"></span>
                        </div>

                        <input type="btn" id="contactButton" class="btn" value="Send Message" />
                    </form>
                    <p id="response-text" class="mt-3 text-center fs-5 border-10"></p>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- End Contact Form -->

<?php
include "template/footer.php";
?>