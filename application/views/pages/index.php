<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home - <?= PRODUCT_NAME ?></title>
	<?php require_once APPPATH . "views/components/common/_head.php"; ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body>
	<?php require_once APPPATH . "views/components/common/_nav.php"; ?>
	<main id="website">
		<section class="banner">
			<div class="container">
				<div class="row m-0 flex-row-reverse align-items-center">
					<div class="col-lg-6 col-12">
						<div class="media-content">
							<div class="wrap">
								<img src="" alt="" style="width:100%; aspect-ratio:1;">
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="text-content">
							<div class="title">
								<h1 class="section-title">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. <span class="highlighted-blue">Suscipit, quo.</span>
								</h1>
							</div>
							<div class="desc">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, fuga alias excepturi rerum dolorem nemo architecto expedita impedit at sit cum aliquid culpa amet dicta, mollitia quo adipisci voluptatem incidunt?
								</p>
								<a href="" class="btn btn-primary btn-lg">Get a 30-days Free Trial&nbsp;<i class="ti ti-arrow-narrow-right"></i></a>
								<button class="btn btn-lg btn-icon">Watch Video&nbsp;<i class="ti icon-lg ti-player-play-filled"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row justify-content-center mb-3">
					<div class="col-lg-8 col-md-10 col-12">
						<div class="text-center">
							<h2 class="section-title">Driving Impactful Business Growth with a
								<span class="highlighted-blue">Suit of HRMS Products</span>
							</h2>
						</div>
					</div>
				</div>
				
				<div class="swiper mySwiper">
					<div class="swiper-wrapper" id="myTab" role="tablist">
						<div class="swiper-slide" role="presentation">
							<button class="nav-link feature_tab-link active" id="tab-1" data-bs-toggle="tab" data-bs-target="#tab-1-pane" type="button" role="tab" aria-controls="tab-1-pane" aria-selected="true">
								<div class="icon"><img src="<?= base_url("assets/media/placeholders/") ?>icon_64px.png" alt=""></div>
								<div class="title">Core HR</div>
							</button>
						</div>
						<div class="swiper-slide" role="presentation">
							<button class="nav-link feature_tab-link" id="tab-2" data-bs-toggle="tab" data-bs-target="#tab-2-pane" type="button" role="tab" aria-controls="tab-2-pane" aria-selected="false">
								<div class="icon"><img src="<?= base_url("assets/media/placeholders/") ?>icon_64px.png" alt=""></div>
								<div class="title">ESS</div>
							</button>
						</div>
						<div class="swiper-slide" role="presentation">
							<button class="nav-link feature_tab-link" id="tab-3" data-bs-toggle="tab" data-bs-target="#tab-3-pane" type="button" role="tab" aria-controls="tab-3-pane" aria-selected="false">
								<div class="icon"><img src="<?= base_url("assets/media/placeholders/") ?>icon_64px.png" alt=""></div>
								<div class="title">Timesheets</div>
							</button>
						</div>
						<div class="swiper-slide" role="presentation">
							<button class="nav-link feature_tab-link" id="tab-4" data-bs-toggle="tab" data-bs-target="#tab-4-pane" type="button" role="tab" aria-controls="tab-4-pane" aria-selected="false">
								<div class="icon"><img src="<?= base_url("assets/media/placeholders/") ?>icon_64px.png" alt=""></div>
								<div class="title">Engagement</div>
							</button>
						</div>
						<div class="swiper-slide" role="presentation">
							<button class="nav-link feature_tab-link" id="tab-5" data-bs-toggle="tab" data-bs-target="#tab-5-pane" type="button" role="tab" aria-controls="tab-5-pane" aria-selected="false">
								<div class="icon"><img src="<?= base_url("assets/media/placeholders/") ?>icon_64px.png" alt=""></div>
								<div class="title">Performance</div>
							</button>
						</div>
						<div class="swiper-slide" role="presentation">
							<button class="nav-link feature_tab-link" id="tab-6" data-bs-toggle="tab" data-bs-target="#tab-6-pane" type="button" role="tab" aria-controls="tab-6-pane" aria-selected="false">
								<div class="icon"><img src="<?= base_url("assets/media/placeholders/") ?>icon_64px.png" alt=""></div>
								<div class="title">Recruit</div>
							</button>
						</div>
						<div class="swiper-slide" role="presentation">
							<button class="nav-link feature_tab-link" id="tab-7" data-bs-toggle="tab" data-bs-target="#tab-7-pane" type="button" role="tab" aria-controls="tab-7-pane" aria-selected="false">
								<div class="icon"><img src="<?= base_url("assets/media/placeholders/") ?>icon_64px.png" alt=""></div>
								<div class="title">Payroll</div>
							</button>
						</div>
						<div class="swiper-slide" role="presentation">
							<button class="nav-link feature_tab-link" id="tab-8" data-bs-toggle="tab" data-bs-target="#tab-8-pane" type="button" role="tab" aria-controls="tab-8-pane" aria-selected="false">
								<div class="icon"><img src="<?= base_url("assets/media/placeholders/") ?>icon_64px.png" alt=""></div>
								<div class="title">Dashboard</div>
							</button>
						</div>
					</div>
				</div>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="tab-1-pane" role="tabpanel" aria-labelledby="tab-1" tabindex="0">
						<div class="row m-0 justify-content-center">
							<div class="col-lg-9 col-md-10 col-12">
								<img src="<?= base_url("assets/media/screenplays/") ?>Core-HR-Zimyo-HRMS.gif" alt="HRMS">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="tab-2-pane" role="tabpanel" aria-labelledby="tab-2" tabindex="0">
						<div class="row m-0 justify-content-center">
							<div class="col-lg-9 col-md-10 col-12">
								<img src="<?= base_url("assets/media/screenplays/") ?>Core-HR-Zimyo-HRMS.gif" alt="HRMS">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="tab-3-pane" role="tabpanel" aria-labelledby="tab-3" tabindex="0">
						<div class="row m-0 justify-content-center">
							<div class="col-lg-9 col-md-10 col-12">
								<img src="<?= base_url("assets/media/screenplays/") ?>Core-HR-Zimyo-HRMS.gif" alt="HRMS">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="tab-4-pane" role="tabpanel" aria-labelledby="tab-4" tabindex="0">
						<div class="row m-0 justify-content-center">
							<div class="col-lg-9 col-md-10 col-12">
								<img src="<?= base_url("assets/media/screenplays/") ?>Core-HR-Zimyo-HRMS.gif" alt="HRMS">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="tab-5-pane" role="tabpanel" aria-labelledby="tab-5" tabindex="0">
						<div class="row m-0 justify-content-center">
							<div class="col-lg-9 col-md-10 col-12">
								<img src="<?= base_url("assets/media/screenplays/") ?>Core-HR-Zimyo-HRMS.gif" alt="HRMS">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="tab-6-pane" role="tabpanel" aria-labelledby="tab-6" tabindex="0">
						<div class="row m-0 justify-content-center">
							<div class="col-lg-9 col-md-10 col-12">
								<img src="<?= base_url("assets/media/screenplays/") ?>Core-HR-Zimyo-HRMS.gif" alt="HRMS">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="tab-7-pane" role="tabpanel" aria-labelledby="tab-7" tabindex="0">
						<div class="row m-0 justify-content-center">
							<div class="col-lg-9 col-md-10 col-12">
								<img src="<?= base_url("assets/media/screenplays/") ?>Core-HR-Zimyo-HRMS.gif" alt="HRMS">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="tab-8-pane" role="tabpanel" aria-labelledby="tab-8" tabindex="0">
						<div class="row m-0 justify-content-center">
							<div class="col-lg-9 col-md-10 col-12">
								<img src="<?= base_url("assets/media/screenplays/") ?>Core-HR-Zimyo-HRMS.gif" alt="HRMS">
							</div>
						</div>
					</div>
				</div>
				<style>
					.mySwiper .swiper-slide {
						width: auto;
					}
					.swiper-wrapper {
						height: auto;
					}
				</style>
				<script>
					var swiper = new Swiper(".mySwiper", {
						slidesPerView: "auto",
						spaceBetween: 50,
						freeMode: true,
						loop: true,
					});
				</script>
			</div>
		</section>
	</main>
	<?php require_once APPPATH . "views/components/common/_footer.php"; ?>
	<?php require_once APPPATH . "views/components/common/_js.php"; ?>
</body>

</html>
