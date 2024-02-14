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
				<div class="px-4">
					<nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= base_url('app/' . $configs['app_id'] . "/dashboard") ?>">Dashboard</a></li>
							<li class="breadcrumb-item active" aria-current="page">Company Settings</li>
						</ol>
					</nav>
				</div>
				<div class="p-2">
					<div class="row m-0 g-0 justify-content-center">
						<div class="col-xl-8 col-lg-10 col-12">
							<div class="card">
								<div class="card-header p-3">
									<div class="text-center">
										<h5>Enter Company Details</h5>
									</div>
								</div>
								<div class="card-body">
									<nav class="nav tab-steps">
										<a class="nav-link tab-item-step active" aria-current="page" href="<?= base_url("app/" . $configs['app_id'] . "/company-onboarding/settings") ?>">Enter Company Details</a>
										<a class="nav-link tab-item-step" href="<?= base_url("app/" . $configs['app_id'] . "/company-onboarding/payroll") ?>">Set Payroll Date</a>
										<a class="nav-link tab-item-step" href="<?= base_url("app/" . $configs['app_id'] . "/company-onboarding/salary") ?>">Set Salary Structure</a>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
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
