<?php include 'header.php'; ?>
<title>Contact Us Now For Best Electrical Products - Delta Cab</title>
<meta name="description" content="Contact Us - Blue Rose Indl Est, Near Metro Mall, Western Express Highway, Borivali, Mumbai and +91-9820759895 or enquiry@deltacab.co.in">
<link rel="canonical" href="https://www.deltacab.co.in/contact" />
<style>
    .disp-flex {
        display: inline-flex;
        margin-top: 10px;
    }

    .text-aline-j {
        text-align: justify !important;
    }

    .c-blue1 {
        color: #002366 !important;
    }

    .font-32 {
        font-size: 32px !important;
    }
</style>
<?php include 'navbar.php'; ?>
<div class="banner banner-static">
    <div class="container">
        <div class="content row">
            <div class="banner-text">
                <h1 class="page-title">Contact Us</h1>
                <p class="page-breadcrumb">Home / <span class="current">Contact</span></p>
            </div>
        </div>
    </div>
</div>
<div class="section section-contents section-contact section-pad">
    <div class="container">
        <div class="content row">

            <h1>Contact Us</h1>
            <div class="contact-content row">
                <div class="drop-message col-md-7 res-m-bttm">
                    <p>Want to work with us or need more details about Deltacab, Please feel free to contact us.</p>
                    <form id="contact" method="post" action="send">
                        <div class="form-results"></div>
                        <div class="form-group row">
                            <div class="form-field col-md-6 form-m-bttm">
                                <input type="text" id="txtname" name="name" placeholder="Name *" class="form-control" required>

                            </div>
                            <div class="form-field col-md-6">
                                <input type="email" id="txtmail" name="email" placeholder="Email *" class="form-control email" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-field col-md-6 form-m-bttm">
                                <input type="text" id="txtphone" name="contact" placeholder="Phone*" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" required pattern="[0-9]{10}">

                            </div>
                            <div class="form-field col-md-6">
                                <input type="text" id="services" name="services" placeholder="Service Required*" class="form-control" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-field col-md-12">
                                <textarea id="txtmessage" name="message" placeholder="Messages*" class="txtarea form-control"></textarea>
                            </div>
                        </div>
                        <!-- Honeypot Field -->
                        <input type="text" name="hidden_field" style="display:none;" tabindex="-1">
                        <!-- Google reCAPTCHA -->
                        <div class="g-recaptcha" data-sitekey="6Ld-BqooAAAAAGdznMd4vJUwzzZcoqoDURC9SErA"></div>
                        <!-- Submit Button -->
                                                  
                        <button type="submit" id="btnsubmit" name="btnsubmit" class="btn solid-btn sb-h">Submit</button>
                    </form>

                </div>
                <div class="contact-details col-md-4 col-md-offset-1">
                    <ul class="contact-list">
                        <li><em class="fa fa-map" aria-hidden="true"></em><strong class=" ucap c-blue1">Head Office:</strong>
                            <span>330 / 331,Blue Rose lndl. Est., Near Metro Mall, Western Express Highway, Borivali(East), Mumbai-400066</span>
                        </li>
                        <li><em class="fa fa-map" aria-hidden="true"></em><strong class=" ucap c-blue1">Plant Address:</strong>
                            <span>Unit No.1, Sanghavi lndl. Est., Plot No. 8, Survey No.
                                29, Navghar, Vasai East, Palghar-401210, Maharashtra. India.

                            </span>
                        </li>

                        <li><em class="fa fa-phone" aria-hidden="true"></em><strong class=" ucap c-blue1">Tel. No:</strong>
                            <span>022-28540850/51/52</span>
                        </li>
                        <li><em class="fa fa-mobile-phone font-32" aria-hidden="true"></em><strong class=" ucap c-blue1">Mobile No.:</strong>
                            <span>+(91)-9820759895 / 9820299895</span>
                        </li>
                        <li><em class="fa fa-envelope" aria-hidden="true"></em><strong class=" ucap c-blue1">Email:</strong>
                            <span>Email : <a href="enquiry@deltacab.co.in">enquiry@deltacab.co.in</a></span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php include 'footer.php'; ?>