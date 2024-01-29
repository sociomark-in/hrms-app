<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('components/dashboard/_head'); ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<title>Document</title>
</head>

<body>
	<div class="page__wrapper d-flex">
		<?php require_once APPPATH . 'views/components/dashboard/_sidebar.php'; ?>
		<div class="dashboard w-100">
			<?php $this->load->view('components/dashboard/_nav'); ?>
			<main>
				<div class="bg-secondary-subtle-10">
					<div class="container-fluid p-3 px-5">
						<div class="row m-0 g-0 justify-content-between align-items-center">
							<div class="col-auto">
								<h2>Hello, Admin</h2>
								<div class="">
									Hope You're having a great day!
								</div>
								<div class="d-flex align-items-center gap-3">
									<div class="">Profile: <strong>87.6% Completed</strong></div>
									<div class="progress" style="width: 15rem; height:0.5rem;" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar bg-primary" style="width: 87.6%"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="px-3">
					<div class="swiper mySwiper tabnav">
						<div class="swiper-wrapper" id="myTab" role="tablist">
							<div class="swiper-slide nav-item" role="presentation">
								<button class="nav-link active" id="tab-01" data-bs-toggle="tab" data-bs-target="#tab-pane-01" type="button" role="tab" aria-controls="tab-pane-01" aria-selected="true">Profile</button>
							</div>
							<div class="swiper-slide nav-item" role="presentation">
								<button class="nav-link" id="tab-02" data-bs-toggle="tab" data-bs-target="#tab-pane-02" type="button" role="tab" aria-controls="tab-pane-02" aria-selected="false">Personal Details</button>
							</div>
							<div class="swiper-slide nav-item" role="presentation">
								<button class="nav-link" id="tab-03" data-bs-toggle="tab" data-bs-target="#tab-pane-03" type="button" role="tab" aria-controls="tab-pane-03" aria-selected="false">Professional Details</button>
							</div>
							<div class="swiper-slide nav-item" role="presentation">
								<button class="nav-link" id="tab-04" data-bs-toggle="tab" data-bs-target="#tab-pane-04" type="button" role="tab" aria-controls="tab-pane-04" aria-selected="false">Employment History</button>
							</div>
							<div class="swiper-slide nav-item" role="presentation">
								<button class="nav-link" id="tab-05" data-bs-toggle="tab" data-bs-target="#tab-pane-05" type="button" role="tab" aria-controls="tab-pane-05" aria-selected="false">Skills</button>
							</div>
							<div class="swiper-slide nav-item" role="presentation">
								<button class="nav-link" id="tab-06" data-bs-toggle="tab" data-bs-target="#tab-pane-06" type="button" role="tab" aria-controls="tab-pane-06" aria-selected="false">Documents</button>
							</div>
							<div class="swiper-slide nav-item" role="presentation">
								<button class="nav-link" id="tab-07" data-bs-toggle="tab" data-bs-target="#tab-pane-07" type="button" role="tab" aria-controls="tab-pane-07" aria-selected="false">Other Details</button>
							</div>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="tab-pane-01" role="tabpanel" aria-labelledby="tab-01" tabindex="0">
							Profile
						</div>
						<div class="tab-pane fade" id="tab-pane-02" role="tabpanel" aria-labelledby="tab-profile" tabindex="0">
							Personal Details
						</div>
						<div class="tab-pane fade" id="tab-pane-03" role="tabpanel" aria-labelledby="tab-profile" tabindex="0">
							Professional Details
						</div>
						<div class="tab-pane fade" id="tab-pane-04" role="tabpanel" aria-labelledby="tab-profile" tabindex="0">
							Employment History
						</div>
						<div class="tab-pane fade" id="tab-pane-05" role="tabpanel" aria-labelledby="tab-profile" tabindex="0">
							Skills
						</div>
						<div class="tab-pane fade" id="tab-pane-06" role="tabpanel" aria-labelledby="tab-profile" tabindex="0">
							Documents
						</div>
						<div class="tab-pane fade" id="tab-pane-07" role="tabpanel" aria-labelledby="tab-profile" tabindex="0">
							Other Details
						</div>
						<!-- <div class="tab-pane fade" id="tab-pane-0<?= $i ?>" role="tabpanel" aria-labelledby="tab-profile" tabindex="0">
							Code 0
							</div> -->
					</div>
				</div>
			</main>
			<footer>
				<?php $this->load->view('components/dashboard/_footer'); ?>
			</footer>
		</div>
	</div>
	<?php $this->load->view('components/dashboard/_js'); ?>

	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper(".mySwiper", {
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			slidesPerView: "auto",
			freeMode: true,
			slidesPerGroup: 3,
			spaceBetween: 10,
		});
	</script>
</body>

</html>
