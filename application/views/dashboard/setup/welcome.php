<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('components/dashboard/_head'); ?>
	<title>Document</title>
</head>

<body>
	<div class="page__wrapper d-flex">
		<?php require_once APPPATH . 'views/components/dashboard/_sidebar.php'; ?>
		<div class="dashboard w-100">
			<?php require_once APPPATH . 'views/components/dashboard/_nav.php'; ?>

			<!-- =======================================================	UNCOMMON SECTION	==================================================== -->
			<main>
				<div class="p-2">
					<div class="px-4">
						<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
							</ol>
						</nav>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="row m-0">
								<div class="col-lg-3 col-12">
									<div class="title mb-3">
										<h4>Let's set up {organization_name}.</h4>
									</div>
									<div class="progress_bar">
										<?php
										$steps = 4;
										$completed = 1;
										?>
										<div class="progress mb-2" style="max-width: 15rem; height:0.5rem;" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
											<div class="progress-bar bg-primary" style="--completed: <?= ($completed / $steps) * 100 ?>%"></div>
										</div>
										<div class="text-muted"><?= $completed ?> of <?= $steps ?> Completed</div>
									</div>
								</div>
								<div class="col-lg-9 col-12">
									<div class="accordion gap-3" id="accordionExample">
										<div class="accordion-item">
											<h2 class="accordion-header">
												<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													Basic Details
												</button>
											</h2>
											<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<div class="ordered-tasks">
														<div class="row g-3">
															<div class="col-lg-4 col-12 nav-item">
																<div class="task-item d-flex justify-content-between">
																	Basic Company Details
																	<a href="" class="task-action btn btn-sm btn-primary">Go!</a>
																</div>
															</div>
															<div class="col-lg-4 col-12 nav-item">
																<div class="task-item task-done d-flex justify-content-between">
																	Working Days, Pay Date.
																	<a href="" class="task-action btn btn-sm btn-primary">Go!</a>
																</div>
															</div>
															<div class="col-lg-4 col-12 nav-item">
																<div class="task-item d-flex justify-content-between">
																	Salary Date, Salary Structure.
																	<a href="" class="task-action btn btn-sm btn-primary">Go!</a>
																</div>
															</div>
															<div class="col-lg-4 col-12 nav-item">
																<div class="task-item d-flex justify-content-between">
																	Basic Company Details
																	<a href="" class="task-action btn btn-sm btn-primary">Go!</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													Employees & People
												</button>
											</h2>
											<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
												<div class="accordion-body">
												<div class="ordered-tasks">
														<div class="row g-3">
															<div class="col-lg-4 col-12 nav-item">
																<div class="task-item d-flex justify-content-between">
																	Add A Person
																	<a href="" class="task-action btn btn-sm btn-primary">Go!</a>
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
						</div>
						<div class="card-footer">
							<a href="" class="text-primary"><i class="ti ti-help"></i>&nbsp;Need help with the setup?</a>
						</div>
					</div>
				</div>
				<?php if ($this->input->get('popup') == null) : ?>
					<div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-body">
									<div class="row m-0">
										<div class="col-xl-6 col-lg-4 col-12">
											<div class="welcome_message mb-3">
												<h5>
													Hi {user_fullname}! <br>
													Welcome to <?= PRODUCT_NAME ?>!😊</h5>
												<p>We'll do a quick setup for you!</p>
											</div>
											<a href="button" class="btn btn-secondary" data-bs-dismiss="modal">Let me explore myself!</a>
										</div>
										<div class="col-xl-6 col-lg-8 col-12">
											<div class="card">
												<div class="card-body">
													<h3>How would you like us to setup this account?</h3>
													<ul class="nav flex-column gap-3">
														<li class="nav-item">
															<a class="nav-link bg-light" href="">Read Articles related to setup the product</a>
														</li>
														<li class="nav-item">
															<a class="nav-link bg-light" href="">Watch Youtube Tutorials on "How to setup the product?"</a>
														</li>
														<li class="nav-item">
															<a class="nav-link bg-light" href="<?= base_url('app/' . $configs['app_id'] . '/dashboard?nu=1&popup=0') ?>">I'd like to explore the product myself.</a>
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
					<script>
						$(window).on("load", () => {
							$("#welcomeModal").modal('show');
						});
					</script>
				<?php endif ?>
			</main>
			<!-- =======================================================	UNCOMMON SECTION	==================================================== -->
			<footer>
				<?php require_once APPPATH . 'views/components/dashboard/_footer.php'; ?>
			</footer>
		</div>
	</div>
	<?php
	//require APPPATH . 'Views/components/_common_footer.php';
	?>
	<?php require_once APPPATH . 'views/components/dashboard/_js.php'; ?>

</body>

</html>
