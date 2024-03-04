<main>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<div class="page-wrapper">
		<div class="full-page">
			<div class="page-content h-100 d-flex align-items-center justify-content-center">
				<div class="row w-100 justify-content-center auth-page">
					<div class="col-xxl-5 col-xl-7 col-lg-9 col-12">
						<div class="row justify-content-center">
							<div class="col-xl-6 col-lg-8 col-md-10 col-12">
								<?= form_open("api/onboarding/signup") ?>
								<div class="card">
									<div class="card-body">
										<div class="card-title text-center">
											<h4>Start Your Free Trial</h4>
										</div>
										<?php
										if ($this->session->has_userdata('signup_status')) :
											$status = $this->session->userdata('signup_status');
											if ($status['code'] == "200") : ?>
												<div class="alert alert-success">
													Check Your Email Address for Next Steps <span>Or <a href="<?= base_url('onboarding/home?key=') . $status['data']['email_validate_key'] ?>">Click Here</a></span>
												</div>
											<?php else : ?>
												<div class="alert alert-danger">
													Check Your Email Address for Next Steps <span>Or <a href="">Click Here</a></span>
												</div>
											<?php endif ?>
										<?php endif ?>
										<div class="mb-3">
											<label for="" class="form-label">Full Name</label>
											<input type="text" class="form-control" name="full_name">
										</div>
										<div class="mb-3">
											<label for="" class="form-label">Organization Name</label>
											<input type="text" class="form-control" name="organization_name">
										</div>
										<div class="mb-3">
											<label for="" class="form-label">Work Email Address</label>
											<input type="email" class="form-control" name="work_email">
										</div>
										<div class="mb-3">
											<label for="" class="form-label">Contact Number</label>
											<input type="text" class="form-control" name="contact_number">
										</div>
										<div class="mb-3">
											<label for="" class="form-label">No. Of Employees</label>
											<select class="form-select" name="max_employees" id="select2NoEmployees">
												<option value="5">1-5</option>
												<option value="20">6-20</option>
												<option value="50">21-50</option>
												<!-- <option value="51-100">51-100</option>
												<option value="101-500">101-500</option>
												<option value="501-1000">501-1000</option>
												<option value="1000+">1000+</option> -->
											</select>
										</div>
										<div class="mb-3">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckDefault">
													I agree to the <a href="">Privacy Policy</a> and <a href="">Terms and Condition</a>
												</label>
											</div>
										</div>
										<div class="mb-3">
											<button class="btn btn-primary w-100" type="submit">Sign Up</button>
										</div>
									</div>
								</div>
								<?= form_close() ?>
								<script>
									$(document).ready(() => {
										$('[name="contact_number"]').mask('+00 000 000 0000', {
											placeholder: "+99 999 999 9999"
										})
									})
								</script>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</main>
