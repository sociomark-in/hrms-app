<main>
	<div class="page-wrapper">
		<div class="full-page">
			<div class="page-content h-100 d-flex align-items-center justify-content-center">
				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
								<div class="col-md-4 pe-md-0">
									<div class="auth-side-wrapper">
										<!-- <figure class="overflow-hidden d-flex justify-content-center">
											<img src="https://placehold.co/220x455" alt="Placeholder Banner">
										</figure> -->
									</div>
								</div>
								<div class="col-md-8 ps-md-0">
									<div class="auth-form-wrapper px-4 py-5">
										<a href="#" class="noble-ui-logo d-block mb-2">Noble<span>UI</span></a>
										<h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
										<?= form_open("api/auth/login") ?>
										<div class="mb-3">
											<label for="userEmail" class="form-label">Employee Id</label>
											<input type="email" class="form-control" id="userEmail" name="email_emp_id" placeholder="Email">
										</div>
										<div class="mb-3">
											<label for="userPassword" class="form-label">Password</label>
											<input type="password" class="form-control" id="userPassword" name="password" autocomplete="current-password" placeholder="Password">
										</div>
										<div class="form-check mb-3">
											<input type="checkbox" class="form-check-input" name="preserve" id="authCheck">
											<label class="form-check-label" for="authCheck">
												Remember me
											</label>
										</div>
										<div>
											<button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
										</div>
										<?= form_close() ?>
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
