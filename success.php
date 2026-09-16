<?php include 'header.php'; ?>
    <style>
        .success-div {
            padding: 120px 0px;
            color: white;
            font-size: 64px;

            text-align: center;
            font-family: 'Open Sans Condensed', sans-serif;
            line-height: 1.25;
            font-weight: 600;
        }

        .success-section {
            background-color: #34A559;

        }

        .sec-title {
            margin-bottom: 40px;
        }

        @media only screen and (max-width:480px) {
            .success-div {
                padding: 30px 0px;
                color: white;
                font-size: 50px;
                font-family: 'Open Sans Condensed', sans-serif;
                text-align: center;
            }

            .success-section {
                background-color: #34A559;
                margin-top: 50px;
            }
        }
    </style>

<?php include 'navbar.php'; ?>

<section class="success-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 success-div">
                Success
            </div>

        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="sec-title text-center padding">
                <div class="javascript:void(0);"><img class="success" src="success.png" class="validation" style="display: initial; max-width: 100%; height: 100px; width:100px;  margin-top: 23px; ">
                    <br>
                    <h2 class="h">Your email has been sent successfully!</h2>
                    <h4 class="validation1">(Our representative will call you shortly.)</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>