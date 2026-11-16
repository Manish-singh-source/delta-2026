<?php include 'header.php'; ?>

<title>Manufacturer of Electrical Wires and Cables with Govt. Standards</title>
<meta name="description" content="We have 30 years of experience in Designing and Manufacturer Wires, Cables, and Cords. We provide the best quality products at competitive rates.">
<link rel="canonical" href="https://www.deltacab.co.in/about" />
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="css/timeline.min.css" rel="stylesheet">

<style>
    .m-t-20 {
        margin-top: 20px !important;
    }

    .text-aline-j {
        text-align: justify !important;
    }

    .growth-timeline {
        position: relative;
        width: 100vw;
        margin: 42px 0 26px calc(50% - 50vw);
        padding: 0 54px 24px;
        overflow: hidden;
    }

    .growth-timeline__viewport {
        overflow-x: auto;
        overflow-y: hidden;
        scroll-behavior: smooth;
        scroll-snap-type: x mandatory;
        scrollbar-width: none;
    }

    .growth-timeline__viewport::-webkit-scrollbar {
        display: none;
    }

    .growth-timeline__track {
        position: relative;
        min-width: 2580px;
        height: 535px;
    }

    .growth-timeline__track::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 255px;
        height: 23px;
        background: #c9d4e2;
    }

    .growth-timeline__item {
        position: absolute;
        width: 250px;
        text-align: left;
        color: #171717;
        scroll-snap-align: start;
    }

    .growth-timeline__item::before {
        content: "";
        position: absolute;
        left: 0;
        width: 4px;
        background: #005ecb;
    }

    .growth-timeline__item::after {
        content: "";
        position: absolute;
        left: 0;
        width: 12px;
        height: 12px;
        margin-left: -6px;
        background: #005ecb;
    }

    .growth-timeline__item--top {
        top: 0;
    }

    .growth-timeline__item--top::before {
        top: 0;
        height: 325px;
    }

    .growth-timeline__item--top::after {
        top: 191px;
    }

    .growth-timeline__item--bottom {
        top: 255px;
    }

    .growth-timeline__item--bottom::before {
        top: -49px;
        height: 328px;
    }

    .growth-timeline__item--bottom::after {
        top: 76px;
    }

    .growth-timeline__content {
        position: relative;
        z-index: 1;
        width: 205px;
        margin-left: 10px;
        text-align: center;
    }

    .growth-timeline__item--top .growth-timeline__content {
        padding-top: 47px;
    }

    .growth-timeline__item--bottom .growth-timeline__content {
        padding-top: 94px;
    }

    .growth-timeline__title {
        display: inline-block;
        min-width: 200px;
        margin: 0 0 8px;
        padding: 3px 12px 4px;
        border-radius: 7px;
        background: #005ecb;
        color: #ffffff;
        font-size: 18px;
        line-height: 1;
        font-weight: 700;
    }

    .growth-timeline__desc {
        max-width: 175px;
        margin: 0 auto;
        font-size: 16px;
        line-height: 1.18;
    }

    .growth-timeline__year {
        position: absolute;
        left: 24px;
        color: #8b8b8b;
        font-size: 39px;
        line-height: 1;
        font-weight: 800;
    }

    .growth-timeline__item--top .growth-timeline__year {
        top: 203px;
    }

    .growth-timeline__item--bottom .growth-timeline__year {
        top: 43px;
    }

    .growth-timeline__item--bottom .growth-timeline__title {
        margin-bottom: 9px;
    }

    .growth-timeline__nav {
        position: absolute;
        top: 247px;
        z-index: 5;
        width: 38px;
        height: 38px;
        border: 0;
        border-radius: 50%;
        background: #005ecb;
        color: #ffffff;
        font-size: 28px;
        line-height: 38px;
        text-align: center;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.22);
    }

    .growth-timeline__nav--prev {
        left: 14px;
    }

    .growth-timeline__nav--next {
        right: 14px;
    }

    .growth-timeline-image {
        width: 100%;
        max-width: 1400px;
        margin: 24px auto 0;
    }

    .growth-timeline-image img {
        display: block;
        width: 100%;
        height: auto;
    }

    .growth-timeline-image__mobile {
        display: none !important;
    }

    @media (max-width: 767px) {
        .growth-timeline {
            margin-top: 28px;
            padding: 0 42px 24px;
        }

        .growth-timeline__track {
            transform: scale(0.82);
            transform-origin: top left;
            margin-bottom: -92px;
        }

        .growth-timeline-image__desktop {
            display: none !important;
        }

        .growth-timeline-image__mobile {
            display: block !important;
        }
    }

    .why-wheel-section {
        overflow: hidden;
        padding: 58px 20px 64px;
        background: #005ecb;
    }

    .why-wheel {
        position: relative;
        width: min(820px, 100%);
        margin: 0 auto;
        aspect-ratio: 1;
        color: #171717;
    }

    .why-wheel__base {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
    }

    .why-wheel__label {
        position: absolute;
        z-index: 2;
        width: 22%;
        font-size: clamp(16px, 2.2vw, 29px);
        line-height: 1.03;
        text-align: center;
        transform: translate(-50%, -50%);
    }

    .why-wheel__label small {
        display: block;
        margin-top: 4px;
        font-size: .66em;
        line-height: 1.05;
    }

    .why-wheel__label strong {
        display: block;
        font-size: 1.42em;
        line-height: .95;
    }

    .why-wheel__badge {
        position: absolute;
        z-index: 3;
        width: 8.8%;
        aspect-ratio: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: #ffffff;
        font-size: clamp(16px, 2.4vw, 31px);
        transform: translate(-50%, -50%);
    }

    .why-wheel__badge--blue {
        background: #2879a8;
    }

    .why-wheel__badge--orange {
        background: #ffab18;
    }

    .why-wheel__badge--red {
        background: #ff510d;
    }

    .why-wheel__badge--pink {
        background: #c72d8a;
    }

    .why-wheel__badge--purple {
        background: #7253ad;
    }

    .why-wheel__badge--cyan {
        background: #4abdb5;
    }

    .why-wheel__badge--green {
        background: #70bf42;
    }

    .why-wheel__badge--lime {
        background: #d7df32;
    }

    .why-wheel__label--customized {
        left: 37%;
        top: 16%;
    }

    .why-wheel__label--support {
        left: 63%;
        top: 16%;
    }

    .why-wheel__label--range {
        left: 81%;
        top: 33%;
    }

    .why-wheel__label--growth {
        left: 85%;
        top: 57%;
    }

    .why-wheel__label--export {
        left: 74%;
        top: 77%;
    }

    .why-wheel__label--fast {
        left: 50%;
        top: 87%;
    }

    .why-wheel__label--quality {
        left: 27%;
        top: 76%;
    }

    .why-wheel__label--clients {
        left: 15%;
        top: 57%;
    }

    .why-wheel__label--solutions {
        left: 19%;
        top: 33%;
    }

    .why-wheel__badge--customized {
        left: 43%;
        top: 29%;
    }

    .why-wheel__badge--support {
        left: 57%;
        top: 29%;
    }

    .why-wheel__badge--range {
        left: 68%;
        top: 40%;
    }

    .why-wheel__badge--growth {
        left: 70%;
        top: 53%;
    }

    .why-wheel__badge--export {
        left: 63%;
        top: 66%;
    }

    .why-wheel__badge--fast {
        left: 50%;
        top: 72%;
    }

    .why-wheel__badge--quality {
        left: 35%;
        top: 67%;
    }

    .why-wheel__badge--clients {
        left: 29%;
        top: 54%;
    }

    .why-wheel__badge--solutions {
        left: 32%;
        top: 40%;
    }

    @media (max-width: 767px) {
        .why-wheel-section {
            padding: 30px 10px 36px;
        }

        .why-wheel {
            width: 100%;
        }

        .why-wheel__label {
            font-size: clamp(8px, 2.7vw, 16px);
        }

        .why-wheel__badge {
            font-size: clamp(9px, 3vw, 19px);
        }
    }
</style>
<?php include 'navbar.php'; ?>
<div class="banner banner-static">
    <div class="container">
        <div class="content row">
            <div class="banner-text">
                <h1 class="page-title">About Us</h1>
                <p class="page-breadcrumb">Home / <span class="current">About Us</span></p>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->
<div class="section section-contents section-pad">
    <div class="container-fluid">
        <div class="col-md-10 col-md-offset-1">
            <h2 class="heading-section center">About Our Corporation</h2>
            <p class="center">
                Delta Electronics India was established in 1991.
                <br />
                Since then Deltacab operates in the field of DESIGN, MANUFACTURE & SUPPLY OF Wires, Cables & Molded Cords based on Govt. standards.
            </p>
        </div>
        <div class="col-md-12 m-t-20">
            <!-- <div class="growth-timeline">
                <button class="growth-timeline__nav growth-timeline__nav--prev" type="button" aria-label="Previous milestones">&#8249;</button>
                <div class="growth-timeline__viewport">
                    <div class="growth-timeline__track">
                        <div class="growth-timeline__item growth-timeline__item--top" style="left: 0;">
                            <div class="growth-timeline__content">
                                <h3 class="growth-timeline__title">New Beginning</h3>
                                <p class="growth-timeline__desc">Started in Vasai with a 450 sq. ft. facility manufacturing single-core wires and multicore cables</p>
                                <span class="growth-timeline__year">1991</span>
                            </div>
                        </div>
                        <div class="growth-timeline__item growth-timeline__item--bottom" style="left: 330px;">
                            <div class="growth-timeline__content">
                                <span class="growth-timeline__year">1995</span>
                                <h3 class="growth-timeline__title">Product Expansion</h3>
                                <p class="growth-timeline__desc">Added electronics, coaxial, telecom cables, and power cords.</p>
                            </div>
                        </div>
                        <div class="growth-timeline__item growth-timeline__item--top" style="left: 660px;">
                            <div class="growth-timeline__content">
                                <h3 class="growth-timeline__title">Quality Focus</h3>
                                <p class="growth-timeline__desc">Introduced spiral cables and established a BIS-standard testing laboratory.</p>
                                <span class="growth-timeline__year">1999</span>
                            </div>
                        </div>
                        <div class="growth-timeline__item growth-timeline__item--bottom" style="left: 990px;">
                            <div class="growth-timeline__content">
                                <span class="growth-timeline__year">2008</span>
                                <h3 class="growth-timeline__title">Certified Growth</h3>
                                <p class="growth-timeline__desc">Expanded production and achieved BIS, TUV NORD ISO 9001, and CE certifications.</p>
                            </div>
                        </div>
                        <div class="growth-timeline__item growth-timeline__item--top" style="left: 1320px;">
                            <div class="growth-timeline__content">
                                <h3 class="growth-timeline__title">Advanced Manufacturing</h3>
                                <p class="growth-timeline__desc">Established dedicated divisions for cable extrusion, wire harnesses, moulding, and spiral cables.</p>
                                <span class="growth-timeline__year">2015</span>
                            </div>
                        </div>
                        <div class="growth-timeline__item growth-timeline__item--bottom" style="left: 1650px;">
                            <div class="growth-timeline__content">
                                <span class="growth-timeline__year">2020</span>
                                <h3 class="growth-timeline__title">Industry 4.0</h3>
                                <p class="growth-timeline__desc">Launched high-performance cable solutions for automation, robotics, medical, and smart industries.</p>
                            </div>
                        </div>
                        <div class="growth-timeline__item growth-timeline__item--top" style="left: 1980px;">
                            <div class="growth-timeline__content">
                                <h3 class="growth-timeline__title">Trusted Partner</h3>
                                <p class="growth-timeline__desc">Serving 25+ industries with a team of 110 professionals.</p>
                                <span class="growth-timeline__year">2023</span>
                            </div>
                        </div>
                        <div class="growth-timeline__item growth-timeline__item--bottom" style="left: 2310px;">
                            <div class="growth-timeline__content">
                                <span class="growth-timeline__year">2026</span>
                                <h3 class="growth-timeline__title">Future Ready</h3>
                                <p class="growth-timeline__desc">Advancing next-generation industrial cables, cable assemblies, and wire harnesses.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="growth-timeline__nav growth-timeline__nav--next" type="button" aria-label="Next milestones">&#8250;</button>
            </div> -->
            <figure class="growth-timeline-image">
                <img class="growth-timeline-image__desktop" src="image/Industrial cable company history timeline-2.png" alt="Industrial cable company history timeline">
                <img class="growth-timeline-image__mobile" src="image/Cable%20Company%20Milestone%20Timeline.png" alt="Cable company milestone timeline">
            </figure>
        </div>
        <div class="content ">
            <div class="col-sm-12 res-m-bttm mt-x3">

                <p class="lead text-aline-j">From a small start-up of a few engineers & executive, today we have more than 100 employees.</p>
                <p class="text-aline-j">In the manufacturing of cables & wires, competitive edge lies in product consistency and quality. Deltacab highly values its customers. Since its establishment it has been flourishing and booming in the domain of manufacturing and supplying supreme quality of Electrical & Electronics Wires, Cables, Molded Cords, and Spiral Cords. These products are globally accredited among our clients for their longevity, accurate performance, reliable and durable nature.</p>
                <p class="text-aline-j">Delta Electronics derives its strengths from its customers. Our Customer satisfaction is its prime objective. The cables, wires and cords that we offer have numerous applications in the telecommunication Industry, Elevator Industry, Healthcare Industry, Electrical and Electronic Projects, Medical Equipment, Testing Equipment, Construction areas. With the aid of a specialized and highly experienced work force we put forward our earnest efforts to produce products that meet the needs of our clients suitably. We also offer our customers sampling schemes.</p>
                <p class="text-aline-j">Our complete product range is manufactured from quality tested raw materials and is made in conformity with the international standards set up for these products. This ensures their strength to deliver long lasting high level of performance. Hence our products are in great demand internationally.</p>
            </div>

        </div>
    </div>
</div>
<div class="section section-contents section-pad light has-bg fixed-bg" style="background-image: url(image/plx-dark-default.jpg);">
    <div class="container-fluid">
        <div class="content">

            <h2 class="heading-section center">Why Choose Us</h2>

            <div class="clear"></div>
            <div class="feature-intro space-top">

                <div class="row">
                    <div class="col-sm-3 res-s-bttm">
                        <div class="icon-box style-s2">
                            <em class="fa fa-briefcase" aria-hidden="true"></em>
                        </div>
                        <h4>Experience</h4>
                        <p>We have 30 years of rich experience in Designing and Production of Wires, Cables and Cords.</p>
                    </div>
                    <div class="col-sm-3 res-s-bttm">
                        <div class="icon-box style-s2">
                            <em class="fa fa-black-tie" aria-hidden="true"></em>
                        </div>
                        <h4>Professional Approach</h4>
                        <p>Systematic Professional Approach all the way from Order Management to Consignment Delivery.</p>
                    </div>
                    <div class="col-sm-3 res-s-bttm">
                        <div class="icon-box style-s2">
                            <em class="fa fa-cogs" aria-hidden="true"></em>
                        </div>
                        <h4>Safety</h4>
                        <p>Safety for all our stakeholders including emplyees, customers and suppliers is ensured in all the operations.</p>
                    </div>
                    <div class="col-sm-3">
                        <div class="icon-box style-s2">
                            <em class="fa fa-building" aria-hidden="true"></em>
                        </div>
                        <h4>Sustainability</h4>
                        <p>We, at Deltacab, believe in sustainable business development which adds value to our Brand and helps us be a better version of ourselves every year.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="why-wheel-section" aria-label="Why choose Deltacab">
    <div class="why-wheel">
        <svg class="why-wheel__base" viewBox="0 0 800 800" role="img" aria-label="Deltacab capability highlights">
            <circle cx="400" cy="400" r="365" fill="#ffffff" />
            <circle cx="400" cy="400" r="174" fill="#005ecb" />
            <g stroke="#005ecb" stroke-width="11" stroke-linecap="round">
                <line x1="400" y1="400" x2="400" y2="35" />
                <line x1="400" y1="400" x2="400" y2="35" transform="rotate(40 400 400)" />
                <line x1="400" y1="400" x2="400" y2="35" transform="rotate(80 400 400)" />
                <line x1="400" y1="400" x2="400" y2="35" transform="rotate(120 400 400)" />
                <line x1="400" y1="400" x2="400" y2="35" transform="rotate(160 400 400)" />
                <line x1="400" y1="400" x2="400" y2="35" transform="rotate(200 400 400)" />
                <line x1="400" y1="400" x2="400" y2="35" transform="rotate(240 400 400)" />
                <line x1="400" y1="400" x2="400" y2="35" transform="rotate(280 400 400)" />
                <line x1="400" y1="400" x2="400" y2="35" transform="rotate(320 400 400)" />
            </g>
        </svg>

        <div class="why-wheel__label why-wheel__label--customized">Customized<small>Manufacturing</small></div>
        <div class="why-wheel__label why-wheel__label--support">End-to-End<small>Technical Support</small></div>
        <div class="why-wheel__label why-wheel__label--range">Extensive<small>Product Range</small></div>
        <div class="why-wheel__label why-wheel__label--growth"><strong>25%</strong><small>CAGR Growth</small></div>
        <div class="why-wheel__label why-wheel__label--export">Export-Ready<small>Solutions</small></div>
        <div class="why-wheel__label why-wheel__label--fast">Fast<small>Delivery<br>&amp;<br>Short Lead Times</small></div>
        <div class="why-wheel__label why-wheel__label--quality">Quality &amp;<small>Compliance<br>Driven</small></div>
        <div class="why-wheel__label why-wheel__label--clients"><strong>1800+</strong><small>Clients Served</small></div>
        <div class="why-wheel__label why-wheel__label--solutions">One-Stop<small>Cable Solutions</small></div>

        <span class="why-wheel__badge why-wheel__badge--blue why-wheel__badge--customized"><i class="fa fa-cogs" aria-hidden="true"></i></span>
        <span class="why-wheel__badge why-wheel__badge--orange why-wheel__badge--support"><i class="fa fa-plug" aria-hidden="true"></i></span>
        <span class="why-wheel__badge why-wheel__badge--red why-wheel__badge--range"><i class="fa fa-search" aria-hidden="true"></i></span>
        <span class="why-wheel__badge why-wheel__badge--pink why-wheel__badge--growth"><i class="fa fa-bar-chart" aria-hidden="true"></i></span>
        <span class="why-wheel__badge why-wheel__badge--purple why-wheel__badge--export"><i class="fa fa-send-o" aria-hidden="true"></i></span>
        <span class="why-wheel__badge why-wheel__badge--blue why-wheel__badge--fast"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
        <span class="why-wheel__badge why-wheel__badge--cyan why-wheel__badge--quality"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>
        <span class="why-wheel__badge why-wheel__badge--green why-wheel__badge--clients"><i class="fa fa-users" aria-hidden="true"></i></span>
        <span class="why-wheel__badge why-wheel__badge--lime why-wheel__badge--solutions"><i class="fa fa-bullseye" aria-hidden="true"></i></span>
    </div>
</section>
<script>
    document.querySelectorAll('.growth-timeline').forEach(function(timeline) {
        var viewport = timeline.querySelector('.growth-timeline__viewport');
        var prev = timeline.querySelector('.growth-timeline__nav--prev');
        var next = timeline.querySelector('.growth-timeline__nav--next');

        if (!viewport || !prev || !next) {
            return;
        }

        prev.addEventListener('click', function() {
            viewport.scrollBy({
                left: -viewport.clientWidth * 0.85,
                behavior: 'smooth'
            });
        });

        next.addEventListener('click', function() {
            viewport.scrollBy({
                left: viewport.clientWidth * 0.85,
                behavior: 'smooth'
            });
        });
    });
</script>
<?php include 'footer.php'; ?>
