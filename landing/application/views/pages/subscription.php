<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php require_once APPPATH . "views/components/common/_head.php"; ?>
</head>

<body>
	<?php require_once APPPATH . "views/components/common/_nav_short.php"; ?>
	<main>
		<div class="container mt-4">
			<div class="row m-0 justify-content-center">
				<section class="col-lg-9 col-md-11 col-12">
					<div class="section-title mb-3 text-center">
						<div class="title">
							<h1 class="page-title">Choose A Plan</h1>
						</div>
						<div class="desc">
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum quidem enim dolore at veniam eaque praesentium doloremque voluptatibus eius laudantium officia quis corrupti dignissimos, laboriosam facere obcaecati, consectetur, nobis quia?</p>
						</div>
					</div>
				</section>
				<div class="col-xl-4 col-lg-5 col-md-7 col-11">
					<div class="card plan__card">
						<div class="card-body">
							<div class="plan__title">
								<div class="row g-0 justify-content-between">
									<div class="col-auto">
										<div class="row g-0 mb-3 align-items-center">
											<div class="col-12">
												<h4>Free Trial</h4>
											</div>
											<div class="col-auto">
												<h2 class="plan_price"></h2>
											</div>
											<div class="col-auto px-2">
												<div class="plan_price_condition">
													<strong>1</strong> Admin + <br> <strong>10</strong> Employees
												</div>
											</div>
										</div>
									</div>
									<div class="col-auto">
										<span class="badge bg-primary">Popular</span>
									</div>
								</div>
								<div class="plan__cta">
									<div class="row">
										<div class="col-12">
											<button class="btn btn-primary btn-block mb-1 select_plan_button" data-plan-selected="free">Select and Proceed!</button>
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
								<div class="row g-0 justify-content-between">
									<div class="col-auto">
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
									<div class="col-auto">
										<span class="badge bg-primary">Recommended</span>
									</div>
								</div>
								<div class="plan__cta">
									<div class="row">
										<div class="col-12">
											<a href="" class="btn btn-primary btn-block mb-1">Start Your Free Demo!</a>
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
													<legend><small class="text-primary">Free Plan +</small></legend>
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
				<div class="col-xl-4 col-lg-5 col-md-7 col-11">
					<div class="card plan__card">
						<div class="card-body">
							<div class="plan__title">
								<div class="row g-0 justify-content-between">
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
									<div class="col-auto">
										<!-- <span class="badge bg-primary">Popular</span> -->
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
												<ul class="plan__feature_list">
													<li class="">
														<span class="marker"></span>List Item 1
													</li>
													<li class="">
														<span class="marker"></span>List Item 1
													</li>
												</ul>
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
	</main>
	<?php require_once APPPATH . "views/components/common/_footer.php"; ?>
	<?php require_once APPPATH . "views/components/common/_js.php"; ?>

	<script>
		$(".select_plan_button").each((index, element) => {
			$(element).on("click", () => {
				var plan = $(element).data("plan-selected");
				$.ajax({
					url: "<?= base_url('api/app/generate') ?>",
					method: "POST",
					data: {
						'user': 1,
						'plan': plan
					},
					success: (response) => {
						console.log(response);
						location.replace("<?= base_url("app/") ?>" + response + "/dashboard?nu=1")
					},
					error: (e) => {
						console.log(e);
					}
				})
			})
		})
	</script>
</body>

</html>
