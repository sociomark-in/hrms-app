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
	<?php
	$data['product'] = "HRMS";
	$this->load->view("components/common/_product_page_nav", $data); ?>
	<main id="website">
		<section class="">
			<div class="container">
				<div class="row m-0 flex-row-reverse justify-content-between align-items-center">
					<div class="col-xxl-4 col-xl-5 col-lg-6 col-12">
						<div class="form-content">
							<div class="card">
								<div class="card-body">
									<?= form_open() ?>
									<div class="row m-0">
										<div class="col-12 mb-3">
											<label for="" class="form-label">Your Name</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-12 mb-3">
											<label for="" class="form-label">Company Name</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-12 mb-3">
											<label for="" class="form-label">Business Email</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-lg-6 col-12 mb-3">
											<label for="" class="form-label">Contact Number</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-lg-6 col-12 mb-3">
											<label for="" class="form-label">No. Of Employees</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-12 mb-3">
										<label for="" class="form-label">Message:</label>
										<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
										</div>
										<div class="col-12 mb-3">
											<button type="submit" class="btn btn-primary btn-block border-rounded">Place Your Enquiry</button>
										</div>
									</div>

									<?= form_close() ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-7 col-lg-6 col-12">
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
				<div class="row m-0 align-items-center">
					<div class="col-lg-6 col-12">
						<div class="media-content">
							<div class="wrap">
								<img src="<?= base_url() ?>assets/media/screenplays/Core-HR-Zimyo-HRMS.gif" alt="" />
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row m-0 flex-row-reverse align-items-center">
					<div class="col-lg-6 col-12">
						<div class="media-content">
							<div class="wrap">
								<img src="<?= base_url() ?>assets/media/screenplays/Core-HR-Zimyo-HRMS.gif" alt="" />
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row m-0 align-items-center">
					<div class="col-lg-6 col-12">
						<div class="media-content">
							<div class="wrap">
								<img src="<?= base_url() ?>assets/media/screenplays/Core-HR-Zimyo-HRMS.gif" alt="" />
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row m-0 flex-row-reverse align-items-center">
					<div class="col-lg-6 col-12">
						<div class="media-content">
							<div class="wrap">
								<img src="<?= base_url() ?>assets/media/screenplays/Core-HR-Zimyo-HRMS.gif" alt="" />
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container mt-4">
				<div class="row m-0 justify-content-center">
					<div class="col-lg-9 col-md-11 col-12">
						<div class="mb-3 text-center">
							<div class="title">
								<h1 class="section-title">Choose <span class="highlighted-blue">A Plan</span></h1>
							</div>
							<div class="desc">
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum quidem enim dolore at veniam eaque praesentium doloremque voluptatibus eius laudantium officia quis corrupti dignissimos, laboriosam facere obcaecati, consectetur, nobis quia?</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-5 col-md-7 col-11">
						<div class="card plan__card">
							<div class="card-body">
								<div class="plan__title">
									<div class="row g-0 flex-row-reverse">
										<div class="col-auto mb-3">
											<span class="badge bg-primary">Popular</span>
										</div>
										<div class="col">
											<div class="row g-0 mb-3 align-items-center">
												<div class="col-12">
													<h4>Free Trial</h4>
												</div>
												<div class="col-auto">
													<h2 class="plan_price">Free</h2>
												</div>
												<div class="col-auto px-2">
													<div class="plan_price_condition">
														<strong>1</strong> Admin + <br> <strong>10</strong> Employees
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="plan__cta">
										<div class="row">
											<div class="col-12">
												<button class="btn btn-primary btn-block mb-1 select_plan_button" data-plan-selected="free">Start Your Free Demo</button>
												<small class="text-muted">You can always upgrade your plan from the dashboard or by clicking <a href="" class="text-primary">here</a></small>
											</div>
										</div>
									</div>
								</div>
								<div class="plan__details">
									<div class="accordion plan__accordion" id="accordionFreePlan">
										<div class="accordion-item">
											<h2 class="accordion-header">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFreePlan" aria-expanded="false" aria-controls="collapseFreePlan">
													<h4>Feature List</h4>
												</button>
											</h2>
											<div id="collapseFreePlan" class="accordion-collapse collapse" data-bs-parent="#accordionFreePlan">
												<div class="accordion-body">
													<fieldset>
														<legend>Core HR</legend>
														<ul class="plan__feature_list">
															<li class="">
																<span class="marker"></span>Employee Management
															</li>
															<li class="">
																<span class="marker"></span>Time & Attendance
															</li>
															<li class="">
																<span class="marker"></span>Leave Management
															</li>
														</ul>
													</fieldset>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-5 col-md-7 col-11">
						<div class="card plan__card">
							<div class="card-body">
								<div class="plan__title">
									<div class="row g-0 flex-row-reverse">
										<div class="col-auto mb-3">
											<span class="badge bg-primary">Recommended</span>
										</div>
										<div class="col">
											<div class="row g-0 mb-3 align-items-center">
												<div class="col-12">
													<h4>Standard</h4>
												</div>
												<div class="col-auto">
													<h2 class="plan_price">&#8377;**</h2>
												</div>
												<div class="col-auto px-2">
													<div class="plan_price_condition">
														per user <br> per month
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="plan__cta">
										<div class="row">
											<div class="col-12">
												<button class="btn btn-primary btn-block mb-1 select_plan_button" data-plan-selected="free">Start Your Free Demo</button>
												<small class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, velit.</small>
											</div>
										</div>
									</div>
								</div>
								<div class="plan__details">
									<div class="accordion plan__accordion" id="accordionStandardPlan">
										<div class="accordion-item">
											<h2 class="accordion-header">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStandardPlan" aria-expanded="false" aria-controls="collapseStandardPlan">
													<h4>Feature List</h4>
												</button>
											</h2>
											<div id="collapseStandardPlan" class="accordion-collapse collapse" data-bs-parent="#accordionStandardPlan">
												<div class="accordion-body">
													<fieldset>
														<legend>Core HR</legend>
														<ul class="plan__feature_list">
															<li class="">
																<span class="marker"></span>Employee Management
															</li>
															<li class="">
																<span class="marker"></span>Time & Attendance
															</li>
															<li class="">
																<span class="marker"></span>Leave Management
															</li>
														</ul>
													</fieldset>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-5 col-md-7 col-11">
						<div class="card plan__card">
							<div class="card-body">
								<div class="plan__title">
									<div class="row g-0 justify-content-between flex-row-reverse">
										<div class="col-auto mb-3">
											<!-- <span class="badge bg-primary">Popular</span> -->
										</div>
										<div class="col-auto">
											<div class="row g-0 mb-3 align-items-center">
												<div class="col-12">
													<h4>Entreprise</h4>
												</div>
												<div class="col-auto">
													<h2 class="plan_price">&#8377;**</h2>
												</div>
												<div class="col-auto px-2">
													<div class="plan_price_condition">
														per user <br> per month
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="plan__cta">
										<div class="row">
											<div class="col-12">
												<a href="" class="btn btn-primary btn-block mb-1">Quote your customized plan!</a>
												<small class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, velit.</small>
											</div>
										</div>
									</div>
								</div>
								<div class="plan__details">
									<div class="accordion plan__accordion" id="accordionExample">
										<div class="accordion-item">
											<h2 class="accordion-header">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													<h4>Feature List</h4>
												</button>
											</h2>
											<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<fieldset>
														<legend><small class="text-primary">Standard Plan +</small></legend>
														<legend>Advanced HRMS</legend>
														<ul class="plan__feature_list">
															<li class="">
																<span class="marker"></span>Transfer and Probation
															</li>
															<li class="">
																<span class="marker"></span>Roles & Permission
															</li>
														</ul>
													</fieldset>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php require_once APPPATH . "views/components/common/_footer.php"; ?>
	<?php require_once APPPATH . "views/components/common/_js.php"; ?>
</body>

</html>
