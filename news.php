<?php include 'header.php'; ?>
<title>News & Events | Deltacab</title>
<link rel="canonical" href="https://www.deltacab.co.in/news" />


<!-- <style>
	.box {
		border: 4px solid #002366;

		padding: 7px;
	}

	.mtb {
		margin: 20px 0px;
	}

	.link {
		padding: 0px 0px 0px 10px;
		font-size: 26px;
		font-weight: 500;
		color: #002366;
		margin-bottom: 2px;

	}

	.link1 {
		padding: 0px 0px 0px 10px;
		font-size: 26px;
		font-weight: 500;
		color: #002366;

	}

	.text {
		padding: 0px 0px 0px 10px;
		font-size: 20px;
		font-weight: 500;

	}

	.pt {
		padding-top: 9px;
	}

	.section-pad {
		padding-top: 20px;
		padding-bottom: 20px;
	}


	.pl {
		padding-left: 12px;

	}




	.date {
		font-size: 60px;
		font-weight: bolder;
		line-height: normal;
	}

	.month {
		text-transform: uppercase;
		color: #db2d8e;
		font-size: 30px;
	}

	.month-date-devider {
		width: 5vh;
		margin: 1vh 0;
		background-color: #3cbfaf;
		height: 5px;
	}

	.event-block {
		padding: 5vh 0;
		border-bottom: 2px solid #ccc;
		border-top: 2px solid #ccc;
	}
</style> -->

<link
	rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
	body {
		background-color: rgba(189, 189, 189, 0.46);
	}

	.container {
		max-width: 1200px;
		margin: auto;
		padding: 20px;
	}

	.cards {
		display: flex;
		/* flex-wrap: wrap; */
		/* gap: 20px; */
		margin: 20px 0;
		justify-content: center;
		overflow-y: scroll;
	}

	.card {
		background: #fff;
		/* border-radius: 6px; */
		/* box-shadow: 0 8px 20px rgb(0 0 0 / 30%); */
		overflow: hidden;
		/* width: 30%; */
		min-width: 280px;
		display: flex;
		flex-direction: column;
		/* border: 1px solid gray; */
		height: 550px;
	}

	.card img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	.card-content {
		padding: 15px;
	}

	.card h3 {
		margin: 10px 0;
		font-size: 20px;
	}

	.card .date,
	.card .location {
		font-size: 14px;
		color: #555;
		margin-bottom: 5px;
	}

	.card p {
		font-size: 14px;
		color: #333;
	}

	.card button {
		margin-top: 15px;
		padding: 10px;
		background: #007bff;
		color: white;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		transition: 0.3s;
	}

	.card button:hover {
		background: #0056b3;
	}

	/* Gallery Section */
	.gallery {
		display: flex;
		flex-wrap: wrap;
		gap: 20px;
		margin-top: 40px;
		justify-content: center;
	}

	.gallery img {
		width: 31%;
		min-width: 280px;
		height: 180px;
		object-fit: cover;
		border-radius: 6px;
		box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
	}

	.footer-container-fluid {
		padding-right: 15px;
		padding-left: 15px;
		margin-right: auto;
		margin-left: auto;
		max-width: 1425px;
	}

	/* Responsive */
	@media (max-width: 1024px) {
		.card {
			width: 45%;
		}

		.gallery img {
			width: 45%;
		}
	}

	@media (max-width: 600px) {
		.card {
			width: 100%;
		}

		.gallery img {
			width: 100%;
		}
	}
</style>

<?php include 'navbar.php'; ?>
<div class="banner banner-static">
	<div class="container">
		<div class="content row">
			<div class="banner-text">
				<h1 class="page-title">News & Events</h1>
				<p class="page-breadcrumb">Home / <span class="current">News & Events</span></p>
			</div>
		</div>
	</div>
</div>
<!-- End Banner -->
<!-- <div class=" section-pad">
	<div class="container">
		<div class="content row">

			<div class="wide-sm center">
				<h1> News & Events</h1>
			</div>

		</div>
	</div>
</div> -->
<!-- <section>

	<div class="container">
		<div class="upcoming-sec">

		</div>
		<div class="upcoming-event-list">
			<div class="event-block">
				<div class="row">
					<div class="col-lg-1 sec-1">

					</div>
					<div class="col-lg-6 sec-2 box">


						<a href="https://www.wirecable.in/2021/08/wci-vol10-no-4-may-june-2021/" target="_blank">
							<img class="img-fluid w-100" src="imgs/step/Untitled-1.jpg" alt="Deltacab: Developing Differentiated Products"></a>
					</div>
					<div class="col-lg-5 sec-3 ">


						<p class="m-t15 link"><a href="https://www.wirecable.in/2021/08/wci-vol10-no-4-may-june-2021/" target="_blank">Wire and Cable India Magazine</a></p>
						<div class="venue">



							<p class="link1">
								<a href="https://www.wirecable.in/2021/08/wci-vol10-no-4-may-june-2021/" target="_blank">
									Deltacab:
									Developing Differentiated Products
								</a>
							</p>
							<p class="text">
								“Our products are globally accredited among our clients for their
								longevity, accurate performance, reliable and durable nature.”
							</p>
							<div class="group-of-btn pl">
								<a href="https://www.wirecable.in/2021/08/wci-vol10-no-4-may-june-2021/" target="blank" class="btn book-ticket">Know More </a>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<hr />
</section> -->

<section>
	<div class="container">


		<div class="swiper">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<div class="card swiper-slide">
					<a href="https://www.wirecable.in/wci-vol14-mar-apr-2025/" target="_blank">
						<img class="img-fluid w-100" src="imgs/step/Apr-2025.png" alt="Wire & Cable India Emagazine"></a>
					<div class="card-content">
						<h3>Wire & Cable India Emagazine</h3>
						<div class="date"><i class="fa-solid fa-calendar-days"></i> Mar-Apr 2025</div>
						<div class="location"><i class="fa-solid fa-location-dot"></i> Mumbai</div>
						<p>“Our products are globally accredited among our clients for their
							longevity, accurate performance, reliable and durable nature.”</p>
						<a href="https://www.wirecable.in/wci-vol14-mar-apr-2025/" target="_blank"><button>KNOW MORE</button></a>
					</div>
				</div>
				<div class="card swiper-slide">
					<a href="https://www.linkedin.com/posts/deltacab-wires-cables-and-cords_eecmai2025-deltacab-elevatorindustry-activity-7311713993163706368-GGCe?utm_source=share&utm_medium=member_android&rcm=ACoAADLyKcEB6UjAi3oEs5rW5pndlkj677_iHdY" target="_blank">
						<img class="img-fluid w-100" src="imgs/step/Mar-2025.png" alt="EECMAI Summit – A Grand Success for Deltacab!"></a>
					<div class="card-content">
						<h3>EECMAI Summit – A Grand Success for Deltacab!</h3>
						<div class="date"><i class="fa-solid fa-calendar-days"></i> 21 Mar 2025</div>
						<div class="location"><i class="fa-solid fa-location-dot"></i> Kolkata</div>
						<p>“Deltacab was honored to be a part of the EECMAI Summit Kolkata 2025, the leading industry event dedicated to the Elevator & Escalator industry.”</p>
						<a href="https://www.linkedin.com/posts/deltacab-wires-cables-and-cords_eecmai2025-deltacab-elevatorindustry-activity-7311713993163706368-GGCe?utm_source=share&utm_medium=member_android&rcm=ACoAADLyKcEB6UjAi3oEs5rW5pndlkj677_iHdY" target="_blank"><button>KNOW MORE</button></a>
					</div>
				</div>
				<div class="card swiper-slide">
					<a href="https://www.linkedin.com/posts/deltacab-wires-cables-and-cords_deltacab-elecrama2025-poweringthefuture-activity-7297546151459745792-pR2a?utm_source=share&utm_medium=member_android&rcm=ACoAADLyKcEB6UjAi3oEs5rW5pndlkj677_iHdY" target="_blank">
						<img class="img-fluid w-100" src="imgs/step/Feb-2025.png" alt="16th Edition Elecrama Powering the Future of Energy"></a>
					<div class="card-content">
						<h3>16th Edition Elecrama Powering the Future of Energy</h3>
						<div class="date"><i class="fa-solid fa-calendar-days"></i> 22 - 26 Feb 2025</div>
						<div class="location"><i class="fa-solid fa-location-dot"></i> Delhi</div>
						<p>“Join us at @elecrama 2025 and experience the future of electrical and electronic innovation with DeltaCab!”</p>
						<a href="https://www.linkedin.com/posts/deltacab-wires-cables-and-cords_deltacab-elecrama2025-poweringthefuture-activity-7297546151459745792-pR2a?utm_source=share&utm_medium=member_android&rcm=ACoAADLyKcEB6UjAi3oEs5rW5pndlkj677_iHdY" target="_blank"><button>KNOW MORE</button></a>
					</div>
				</div>
				<div class="card swiper-slide">
					<a href="https://www.linkedin.com/posts/deltacab-wires-cables-and-cords_ise2024-elevatorindustry-innovation-activity-7268231570547757057-nHeF?utm_source=share&utm_medium=member_android&rcm=ACoAADLyKcEB6UjAi3oEs5rW5pndlkj677_iHdY" target="_blank">
						<img class="img-fluid w-100" src="imgs/step/Dec-2024.png" alt="ISEE- International Soucring Exposition For Elevators and Escalators"></a>
					<div class="card-content">
						<h3>ISEE- International Soucring Exposition For Elevators and Escalators</h3>
						<div class="date"><i class="fa-solid fa-calendar-days"></i> 5 - 6 - 7 Dec 2024</div>
						<div class="location"><i class="fa-solid fa-location-dot"></i> Mumbai</div>
						<p>“Discover our latest innovations in cables and assemblies designed for the Elevator and Escalator industry.”</p>
						<a href="https://www.linkedin.com/posts/deltacab-wires-cables-and-cords_ise2024-elevatorindustry-innovation-activity-7268231570547757057-nHeF?utm_source=share&utm_medium=member_android&rcm=ACoAADLyKcEB6UjAi3oEs5rW5pndlkj677_iHdY" target="_blank"><button>KNOW MORE</button></a>
					</div>
				</div>
				<div class="card swiper-slide">
					<a href="https://www.wirecable.in/wci-vol13-mar-apr-2024/" target="_blank">
						<img class="img-fluid w-100" src="imgs/step/Apr-2024.png" alt="Wire & Cable India Emagazine"></a>
					<div class="card-content">
						<h3>Wire & Cable India Emagazine</h3>
						<div class="date"><i class="fa-solid fa-calendar-days"></i> Mar-Apr 2024</div>
						<div class="location"><i class="fa-solid fa-location-dot"></i> Mumbai</div>
						<p>“The current edition extensively covers the leading industry manufacturers and suppliers who showcased their latest technological...”</p>
						<a href="https://www.wirecable.in/wci-vol13-mar-apr-2024/" target="_blank"><button>KNOW MORE</button></a>
					</div>
				</div>
				<div class="card swiper-slide">
					<a href="https://www.wirecable.in/2021/08/wci-vol10-no-4-may-june-2021/" target="_blank">
						<img class="img-fluid w-100" src="imgs/step/Untitled-1.jpg" alt="Deltacab: Developing Differentiated Products"></a>
					<div class="card-content">
						<!-- <h3>Wire and Cable India Emagazine</h3> -->
						<h3>Deltacab:Developing Differentiated Products</h3>
						<div class="date"><i class="fa-solid fa-calendar-days"></i> May-Jun 2021</div>
						<div class="location"><i class="fa-solid fa-location-dot"></i> Mumbai</div>
						<p>“Our products are globally accredited among our clients for their
							longevity, accurate performance, reliable and durable nature.”</p>
						<a href="https://www.wirecable.in/2021/08/wci-vol10-no-4-may-june-2021/" target="_blank"><button>KNOW MORE</button></a>
					</div>
				</div>


			</div>

			<!-- If we need navigation buttons -->
			<!-- <div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div> -->

			<div class="swiper-pagination"></div>
		</div>


	</div>
</section>

<!-- End Section -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/livestamp/1.1.2/livestamp.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
	const swiper = new Swiper('.swiper', {
		// Optional parameters
		autoplay: {
			delay: 3000, // 5000ms = 5 seconds
			disableOnInteraction: false, // keep autoplay even after user interaction
		},
		direction: 'horizontal',
		loop: true,
		slidesPerView: 3,
		spaceBetween: 10,
		// Responsive breakpoints
		breakpoints: {
			// when window width is >= 320px
			320: {
				slidesPerView: 1,
				spaceBetween: 20
			},
			992: {
				slidesPerView: 3,
				spaceBetween: 20
			}
		},
		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
		},

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

		// And if we need scrollbar
		scrollbar: {
			el: '.swiper-scrollbar',
		},
	});
</script>

<?php include 'footer.php'; ?>