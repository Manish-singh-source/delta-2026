<?php include 'header.php'; ?>
<title>DeltaCab Research Centre - Maximizing Customer Values</title>
<meta name="description" content="Our R&D vision is to propose future directions by developing different technologies and products and creating market-leading new business products.">
<link rel="canonical" href="https://www.deltacab.co.in/rnd" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<style>
    .feature-wrapper {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 20px;
        max-width: 1200px;
        margin: auto;
    }

    .features {
        display: flex;
        flex-direction: column;
        gap: 20px;
        flex: 1 1 250px;
    }

    .feature-box {
        background-color: #f0f0f0;
        border-radius: 20px;
        padding: 20px;
        display: flex;
        gap: 15px;
        align-items: flex-start;
    }

    .icon {
        background-color: #1e2a44;
        color: white;
        font-size: 20px;
        padding: 10px;
        border-radius: 10px;
    }

    .text h4 {
        color: #1e2a44;
        font-size: 1.25em;
        margin-bottom: 5px;
    }

    .text p {
        font-size: 14px;
        color: #666;
    }

    .center-image {
        flex: 1 1 300px;
        max-width: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .center-image img {
        width: 100%;
        border-radius: 20px;
    }

    .row {
        display: flex;
        margin: 20px 0;
    }

    .footer-widget .row {
        display: block;
    }

    .cta {
        display: flex;
        justify-content: center;
    }

    /* .col-md-6 {
        position: relative;
        min-height: 1px;
        padding-right: 0px;
        padding-left: 0px;
    }

    .col-md-12 {
        position: relative;
        min-height: 1px;
        padding-right: 0px;
        padding-left: 0px;
    } */

    .order-first {
        order: -1 !important
    }

    .order-0 {
        order: 0 !important
    }

    .order-1 {
        order: 1 !important
    }

    .order-2 {
        order: 2 !important
    }

    .order-3 {
        order: 3 !important
    }


    .mob-view {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .desk-view {
        display: none;

    }

    .footer-container-fluid {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        max-width: 1425px;
    }

    .section-pad {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .copyright:not([class*="section-pad"]) {
        /* padding: 20px 0; */
        padding: 0px 0;
    }

    @media (min-width: 768px) {
        .order-md-1 {
            order: 1 !important
        }

        .order-md-2 {
            order: 2 !important
        }

        .order-md-3 {
            order: 3 !important
        }

        .order-4 {
            order: 4 !important
        }

        .order-5 {
            order: 5 !important
        }

        .order-md-last {
            order: 6 !important
        }

        .mob-view {
            display: none;

        }

        .desk-view {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    @media only screen and (max-width: 600px) {
        .row {
            display: block;
        }

        .mob-view {
            display: flex;
        }

        .desk-view {
            display: none;
        }
    }


    @media (max-width: 768px) {
        .feature-wrapper {
            flex-direction: column;
        }

        .features {
            width: 100%;
            align-items: center;
        }

        .center-image {
            max-width: 90%;
        }

        .feature-box {
            width: 90%;
        }

        .container {
            padding-left: 0;
            padding-right: 0px;
            max-width: 100%;
        }

        .row {
            display: block;
            flex-direction: row;
        }


    }

    @media (min-width: 1200px) {
        .container {
            width: 1230px;
        }
    }
</style>

<!-- <link href="css/custom.css" rel="stylesheet" /> -->
<!-- <link href="css/custom2.css" rel="stylesheet" /> -->
<link href="css/media.css" rel="stylesheet" />


<?php include 'navbar.php'; ?>
<div class="banner banner-static">
    <div class="container">
        <div class="content row">
            <div class="banner-text">
                <h1 class="page-title">R & D</h1>
                <p class="page-breadcrumb">Home / <span class="current">R & D</span></p>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->
<!-- Contents -->
<!-- <div class="section section-contents section-pad">
    <div class="container-fluid">
        <div class="content row">

            <div class="row">

                <div class="col-md-12 res-m-bttm">
                    <h1>R & D</h1>
                    <p class="lead">Deltacab is developing market-leading products and securing core technologies for customer value maximization. </p>
                    <p>
                        Deltacab Research Centre is maximizing customer values by developing high-function and high-quality products based on technological power built over the years.
                        <br />
                        In addition, the R&D department is leading the related industries through increased-capacity, eco-friendly and high efficiency product development.
                    </p>

                    <div class="row">
                        <div class="col-md-4 res-m-bttm">
                            <h3>R&D Vision:</h3>
                            <p>Proposing future directions by developing differentiated technologies and products, and creating market-leading new business items.</p>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Key Research Areas:</h3>
                        </div>
                        <div class="col-md-4 res-m-bttm">
                            <div class="featurebox1">
                                <h4>Cable Development:</h4>
                                <ul class="list-style arrow">
                                    <li>Value-added niche item development</li>
                                    <li>Polymer material analysis</li>
                                    <li>Basic study on increased production capacity</li>
                                </ul>
                            </div>
                            <div class="featurebox1">
                                <h4>Moulded Cords Development:</h4>
                                <ul class="list-style arrow">
                                    <li>Home appliances wiring solution development</li>
                                    <li>Study on commercialization</li>
                                    <li>Study for productivity improvement and cost leadership</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 res-m-bttm">
                            <img src="image/gallery/1.PNG" alt="R & D" />
                        </div>
                        <div class="col-md-4 res-m-bttm">
                            <div class="featurebox1">
                                <h4>Flat Travelling Cable Development:</h4>
                                <ul class="list-style arrow">
                                    <li>Upgraded performance of existing products</li>
                                    <li>Composite Cables development</li>
                                    <li>Development for high-speed elevators/escalators</li>
                                </ul>
                            </div>
                            <div class="featurebox1">
                                <h4>Wire Harness and Spiral Cord Development:</h4>
                                <ul class="list-style arrow">
                                    <li>Smart Wiring System</li>
                                    <li>Discovering and reviewing new business items</li>
                                    <li>LAN Cable Solutions and Speciality Cables Development</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>


            </div>

        </div>
    </div>
</div> -->
<!-- End Section -->

<div class="container">
    <div class="row">

        <div class="col-md-12 res-m-bttm">
            <h1>R & D</h1>
            <p class="lead">Deltacab is developing market-leading products and securing core technologies for customer value maximization. </p>
            <p>
                Deltacab Research Centre is maximizing customer values by developing high-function and high-quality products based on technological power built over the years.
                <br />
                In addition, the R&D department is leading the related industries through increased-capacity, eco-friendly and high efficiency product development.
            </p>

            <div class="row">
                <div class="res-m-bttm">
                    <h3>R&D Vision:</h3>
                    <p>Proposing future directions by developing differentiated technologies and products, and creating market-leading new business items.</p>

                </div>
                <!-- <div class="col-md-5 res-m-bttm">
                            <img src="image/gallery/1.PNG" alt="R & D" />
                        </div> -->

            </div>
            <div class="col">
                <h3>Key Research Areas:</h3>
            </div>
            <div class="row">
                <div class="row key-area">
                    <div class="col-md-6 order-1 order-md-1 col-lg-4 res-m-bttm">
                        <div class="featurebox1">
                            <h4>Cable Development:</h4>
                            <ul class="list-style arrow">
                                <li><i class="fa-solid fa-square-check"></i> Value-added niche item development</li>
                                <li><i class="fa-solid fa-square-check"></i> Polymer material analysis</li>
                                <li><i class="fa-solid fa-square-check"></i> Basic study on increased production capacity</li>
                            </ul>
                        </div>
                        <div class="featurebox1">
                            <h4>Moulded Cords Development:</h4>
                            <ul class="list-style arrow">
                                <li><i class="fa-solid fa-square-check"></i> Home appliances wiring solution development</li>
                                <li><i class="fa-solid fa-square-check"></i> Study on commercialization</li>
                                <li><i class="fa-solid fa-square-check"></i> Study for productivity improvement and cost leadership</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 order-3 order-md-2 col-lg-4 res-m-bttm desk-view">
                        <img src="image/gallery/1.PNG" alt="R & D" />
                    </div>
                    <div class="col-md-6 order-2 order-md-3 col-lg-4 res-m-bttm">
                        <div class="featurebox1">
                            <h4>Flat Travelling Cable Development:</h4>
                            <ul class="list-style arrow">
                                <li><i class="fa-solid fa-square-check"></i> Upgraded performance of existing products</li>
                                <li><i class="fa-solid fa-square-check"></i> Composite Cables development</li>
                                <li><i class="fa-solid fa-square-check"></i> Development for high-speed elevators/escalators</li>
                            </ul>
                        </div>
                        <div class="featurebox1">
                            <h4>Wire Harness and Spiral Cord Development:</h4>
                            <ul class="list-style arrow">
                                <li><i class="fa-solid fa-square-check"></i> Smart Wiring System</li>
                                <li><i class="fa-solid fa-square-check"></i> Discovering and reviewing new business items</li>
                                <li><i class="fa-solid fa-square-check"></i> LAN Cable Solutions and Speciality Cables Development</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 order-3 order-md-2 col-lg-4 res-m-bttm mob-view">
                        <img src="image/gallery/1.PNG" alt="R & D" />
                    </div>
                </div>

            </div>

        </div>


    </div>
</div>

<!-- Call Action -->
<div class="call-action cta-small bg-grey my-5">
    <div class="cta-block">
        <div class="container cta">
            <div class="content row">
                <div class="cta-sameline">
                    <h3>Want to know if Solar is right for your business?</h3>
                    <a class="btn btn-large" href="contact.php">Contact Us</a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="sidebar-right">


    </div>
</div>
<?php include 'footer.php'; ?>