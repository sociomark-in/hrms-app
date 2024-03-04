<main>
	<div class="page-wrapper">
		<div class="page-content py-5">
			<div class="row justify-content-center">
				<div class="col-xxl-4 col-xl-6 col-lg-8 col-md-10 col-12">
					<div class="card">
						<div class="card-body text-center">
							<div class="card-title">
								<h1 class="text-primary font-weight-bold mb-3">401</h1>
								<h4>Unauthorized Access!</h4>
							</div>
							<div class="mb-3">
								<p class="text-muted">
									Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius corrupti quasi quisquam molestias maiores temporibus culpa aliquam maxime provident repudiandae!
								</p>
							</div>
							<div class="row justify-content-center">
								<div class="col-xl-8 col-lg-10 col-12 grid-margin">
									<?= form_open('api/onboarding/resend-key', NULL, ['email_auth_key' => $this->input->get('key')]) ?>
									<div class="mb-3">
										<input type="email" class="form-control" name="work_email" id="" placeholder="Email Address" required>
									</div>
									<div class="">
										<button type="submit" class="btn w-100 btn-primary">Send Login Link</button>
									</div>
									<?= form_close() ?>
								</div>
								<div class="col-xl-8 col-lg-10 col-12">
									<div class="alert alert-success">
										Login Link has been sent to the entered email address!
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
