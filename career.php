<?php include 'header.php'; ?>
<title>Enhance your career with us | Deltacab</title>
<meta property="og:description" content="Take your career to the next level with our professional development opportunities. Join us to enhance your skills and achieve your goals." />

<link rel="canonical" href="https://www.deltacab.co.in/career" />
<style>
    .p-bot-20 {
        padding-bottom: 20px !important;
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
    .mt-2{
        margin-top: 15px;
    }
</style>
<?php include 'navbar.php'; ?>
<div class="banner banner-static">
    <div class="container">
        <div class="content row">
            <div class="banner-text">
                <h1 class="page-title">Careers</h1>
                <p class="page-breadcrumb">Home / <span class="current">Careers</span></p>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->
<div class="section section-contents section-freequote section-pad">
    <div class="container">
        <div class="row">

            <div class="freequote-content row">

                <div class="quote-list col-md-8 res-m-bttm">
                    <div class="quote-group form-quote">
                        <img src="image/success%20(1).png" class="p-bot-20" alt="Together, We're Changing the World" />
                        <h1>Together, We're Changing the World</h1>

                        <p class="text-aline-j">We, at Deltacab have always created an environment conducive of creating thinking, teamwork and job satisfaction for smart, talented people from diverse backgrounds. The work culture at Deltacab offers immense growth opportunities and various fields suitable with the qualification and skillset of an employee. </p>
                        <p class="text-aline-j">We encourage you to step ahead and get associated with us for long term. Drop in your CVs right away at <a href="mailto:careers@deltacab.co.in">careers@deltacab.co.in </a></p>
                        <form class="form-quote" method="post" action="send1" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="form-field col-md-12 ">
                                    <input type="text" id="txtname" name="name" placeholder="Name *" class="form-control" required>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-6 ">
                                    <input type="email" id="txtmail" name="email" placeholder="Email *" class="form-control email" required>

                                </div>
                                <div class="form-field col-md-6">
                                    <input type="text" id="txtphone" name="contact" placeholder="Phone*" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" required pattern="[0-9]{10}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-12 ">
                                    <input type="text" id="services" name="services" placeholder="Position Applied For *" class="form-control" required>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-12 ">
                                    <input type="file" id="FileUpload1" name="file" placeholder="Submit your CV *" class="form-control required" required>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-12">
                                    <textarea id="txtmessage" name="message" placeholder="Write something about yourself" class="txtarea form-control"></textarea>
                                </div>
                            </div>
                            <p role="alert" style="display: inline-flex; margin-top: 10px;">
                                <span id="lblmsg"></span>
                            </p>
                            <!-- Honeypot Field -->
                            <input type="text" name="hidden_field" style="display:none;" tabindex="-1">
                            <!-- Google reCAPTCHA -->
                            <div class="g-recaptcha" data-sitekey="6Ld-BqooAAAAAGdznMd4vJUwzzZcoqoDURC9SErA"></div>
                            <!-- Submit Button -->
                            <button type="submit" id="btnsubmit" name="btnsubmit" class="btn solid-btn sb-h mt-2">Submit</button>
                        </form>

                    </div>
                </div>

                <div class="contact-details col-md-4">
                    <ul class="contact-list">
                        <li><em class="fa fa-map" aria-hidden="true"></em><strong class=" ucap c-blue1">Head Office:</strong>
                            <span>117,Blue Rose lndl. Est., Near Metro Mall, Western Express Highway, Borivali(East), Mumbai-400066</span>
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
                            <span>Email : <a href="career@deltacab.co.in">careers@deltacab.co.in</a></span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Content -->
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php include 'footer.php'; ?>