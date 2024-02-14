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
		<div class="container">
			<div class="row m-0 justify-content-center">
				<div class="col-xl-4 col-lg-5 col-md-7 col-11">
					<div class="py-3 mt-5">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-center mb-3">
									<div class="app_logo" style="--logo-width: 70px;">
										<img src="<?= base_url() ?>" alt="<?= PRODUCT_NAME ?>">
									</div>
								</div>
								<?= form_open('api/website/register',null, []) ?>
								<div class="mb-4">
									<div class="mb-3">
										<label for="" class="form-label">Full Name<span>*</span></label>
										<input type="text" name="client[full_name]" class="form-control">
									</div>
									<div class="mb-3">
										<label for="" class="form-label">Organization Name<span>*</span></label>
										<input type="text" name="client[organization]" class="form-control">
									</div>
									<div class="mb-3">
										<label for="" class="form-label">Work Email Address<span>*</span></label>
										<input type="text" name="client[email_address]" class="form-control">
									</div>
									<div class="mb-3">
										<label for="" class="form-label">Contact Number<span>*</span></label>
										<input type="text" name="client[contact_number]" class="form-control">
									</div>
									<div class="mb-3">
										<label for="" class="form-label">No. Of Employees<span>*</span></label>
										<select name="no_of_employees" id="" class="form-control">
											<option value="0-10">0 - 10</option>
											<option value="0-10">10 - 50</option>
											<option value="0-10">50 - 500</option>
											<option value="0-10">50 - 5000</option>
											<option value="0-10">5000+</option>
										</select>
									</div>
									<div class="mb-3">
										<label for="" class="form-label">Your Role<span>*</span></label>
										<select name="client[role]" id="" class="form-control">
											<option value="HR">HR</option>
											<option value="Founder">Founder / Owner</option>
											<option value="Employee">Employee</option>
											<option value=""></option>
										</select>
									</div>
									<div class="mb-3">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="consent[accept_pp_tnc]" value="Accept" id="flexCheckDefault">
											<label class="form-check-label" for="flexCheckDefault">
												I agree to the <a href="<?= base_url() ?>" class="text-primary">privacy policy</a> and <a href="<?= base_url() ?>" class="text-primary">terms of use</a>.
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" checked  name="consent[onboarding_help]" value="Accept" id="flexCheckDefault">
											<label class="form-check-label" for="flexCheckDefault">
												Connect with me via email for onboarding.
											</label>
										</div>
									</div>
									<div class="mb-2">
										<button type="submit" class="btn btn-block btn-primary">Start your 30-day Trial!</button>
									</div>
									<div class="mb-2 d-none">
										<button type="submit" class="btn btn-block btn-grey">Sign Up with <?= PRODUCT_NAME ?></button>
									</div>
								</div>
								<?= form_close() ?>
								<div class="card-footer">
									<div class="text-center">
										<text>Already Registered with us? <a href="<?= base_url('login') ?>" class="text-primary">Login</a></text>
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
</body>

</html>
