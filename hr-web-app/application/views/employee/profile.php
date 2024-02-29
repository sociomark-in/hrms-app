<div class="page-content">
	<?php
	$local_session = $this->session->userdata("local");
	$name = implode(" ", [$local_session['user']['first_name'], $local_session['user']['last_name']]);
	?>
	<div class="row">
		<div class="col-12 grid-margin">
			<div class="card">
				<div class="position-relative">
					<figure class="overflow-hidden mb-0 d-flex justify-content-center">
						<img src="https://placehold.co/1520x370" class="rounded-top" alt="profile cover">
					</figure>
					<div class="d-flex justify-content-between align-items-center position-absolute top-90 w-100 px-2 px-md-4 mt-n4">
						<div>
							<img class="wd-70 rounded-circle" src="https://ui-avatars.com/api/?background=a0a0a0&bold=true&name=<?= urlencode($name) ?>" alt="profile">
							<span class="h4 ms-3 text-dark"><?= $name ?></span>
						</div>
						<div>
							<a href="" class="btn btn-primary btn-icon-text">
								<i class="me-1 btn-icon-prepend" data-feather="edit"></i>Edit profile
							</a>
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-center p-3 rounded-bottom">
					<ul class="d-flex align-items-center m-0 p-0" role="tablist">
						<li class="d-flex align-items-center active" role="tab" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
							<i class="me-1 icon-md" data-feather="user"></i>
							<a class="pt-1px d-none d-md-block text-body" href="#">Profile</a>
						</li>
						<li class="ms-3 ps-3 border-start d-flex align-items-center" role="tab" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents-tab-pane" type="button" role="tab" aria-controls="documents-tab-pane" aria-selected="true">
							<i class="me-1 icon-md" data-feather="folder"></i>
							<a class="pt-1px d-none d-md-block text-body" href="#">Documents</a>
						</li>
						<li class="ms-3 ps-3 border-start d-flex align-items-center" role="tab" id="leaves-tab" data-bs-toggle="tab" data-bs-target="#leaves-tab-pane" type="button" role="tab" aria-controls="leaves-tab-pane" aria-selected="false">
							<i class="me-1 icon-md" data-feather="navigation"></i>
							<a class="pt-1px d-none d-md-block text-body" href="#">Leaves & Work-offs</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
			<div class="row">
				<div class="col-md-6 col-12 grid-margin">
					<div class="card rounded">
						<div class="card-body">
							<div class="d-flex align-items-center justify-content-between mb-2">
								<h6 class="card-title mb-0">Professional Information</h6>
							</div>
							<div class="mb-3">
								<p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of Social.</p>
							</div>
							<div class="row">
								<div class="col-xl-4 col-lg-6 col-12 grid-margin">
									<label class="tx-13 fw-bolder mb-0 text-uppercase">Joined:</label>
									<p class="text-muted">November 15, 2015</p>
								</div>
								<div class="col-xl-4 col-lg-6 col-12 grid-margin">
									<label class="tx-13 fw-bolder mb-0 text-uppercase">Lives:</label>
									<p class="text-muted">New York, USA</p>
								</div>
								<div class="col-xl-4 col-lg-6 col-12 grid-margin">
									<label class="tx-13 fw-bolder mb-0 text-uppercase">Email:</label>
									<p class="text-muted">me@nobleui.com</p>
								</div>
								<div class="col-xl-4 col-lg-6 col-12 grid-margin">
									<label class="tx-13 fw-bolder mb-0 text-uppercase">Website:</label>
									<p class="text-muted">www.nobleui.com</p>
								</div>
								<div class="col-xl-4 col-lg-6 col-12 grid-margin">
									<label class="tx-13 fw-bolder mb-1 text-uppercase">Social Media:</label>
									<div class="d-flex social-links">
										<a href="" class="btn btn-icon border btn-xs me-2">
											<i data-feather="github"></i>
										</a>
										<a href="" class="btn btn-icon border btn-xs me-2">
											<i data-feather="linkedin"></i>
										</a>
										<a href="" class="btn btn-icon border btn-xs me-2">
											<i data-feather="instagram"></i>
										</a>
										<a href="" class="btn btn-icon border btn-xs me-2">
											<i data-feather="image"></i>
										</a>
										<a href="" class="btn btn-icon border btn-xs me-2">
											<i data-feather="link"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12 grid-margin">
					<div class="card rounded">
						<div class="card-body">
							<div class="d-flex align-items-center justify-content-between mb-2">
								<h6 class="card-title mb-0">Personal Information</h6>
							</div>
							<div class="mb-3">
								<p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of Social.</p>
							</div>
							<div class="row">
								<div class="col-xl-4 col-lg-6 col-12 grid-margin">
									<label class="tx-13 fw-bolder mb-0 text-uppercase">Joined:</label>
									<p class="text-muted">November 15, 2015</p>
								</div>
								<div class="col-xl-4 col-lg-6 col-12 grid-margin">
									<label class="tx-13 fw-bolder mb-0 text-uppercase">Lives:</label>
									<p class="text-muted">New York, USA</p>
								</div>
								<div class="col-xl-4 col-lg-6 col-12 grid-margin">
									<label class="tx-13 fw-bolder mb-0 text-uppercase">Email:</label>
									<p class="text-muted">me@nobleui.com</p>
								</div>
								<div class="col-xl-4 col-lg-6 col-12 grid-margin">
									<label class="tx-13 fw-bolder mb-0 text-uppercase">Website:</label>
									<p class="text-muted">www.nobleui.com</p>
								</div>
								<div class="col-xl-4 col-lg-6 col-12 grid-margin">
									<label class="tx-13 fw-bolder mb-1 text-uppercase">Social Media:</label>
									<div class="d-flex social-links">
										<a href="" class="btn btn-icon border btn-xs me-2">
											<i data-feather="github"></i>
										</a>
										<a href="" class="btn btn-icon border btn-xs me-2">
											<i data-feather="linkedin"></i>
										</a>
										<a href="" class="btn btn-icon border btn-xs me-2">
											<i data-feather="instagram"></i>
										</a>
										<a href="" class="btn btn-icon border btn-xs me-2">
											<i data-feather="image"></i>
										</a>
										<a href="" class="btn btn-icon border btn-xs me-2">
											<i data-feather="link"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="documents-tab-pane" role="tabpanel" aria-labelledby="documents-tab" tabindex="0">
			<div class="row">
				<div class="col-xxl-auto col-xl-3 col-lg-4 col-md-6 col-12 grid-margin">
					<a class="card" href="">
						<div class="card-body">
							<div class="d-flex align-items-center gap-2">
								<i class="me-1 icon-lg" data-feather="folder"></i>
								<text class="tx-18 mb-0 text-uppercase">PAN Card</text>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xxl-auto col-xl-3 col-lg-4 col-md-6 col-12 grid-margin">
					<a class="card" href="">
						<div class="card-body">
							<div class="d-flex align-items-center gap-2">
								<i class="me-1 icon-lg" data-feather="folder"></i>
								<text class="tx-18 mb-0 text-uppercase">ID Proofs</text>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xxl-auto col-xl-3 col-lg-4 col-md-6 col-12 grid-margin">
					<a class="card" href="">
						<div class="card-body">
							<div class="d-flex align-items-center gap-2">
								<i class="me-1 icon-lg" data-feather="folder"></i>
								<text class="tx-18 mb-0 text-uppercase">AADHAR Card</text>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xxl-auto col-xl-3 col-lg-4 col-md-6 col-12 grid-margin">
					<a class="card" href="">
						<div class="card-body">
							<div class="d-flex align-items-center gap-2">
								<i class="me-1 icon-lg" data-feather="folder"></i>
								<text class="tx-18 mb-0 text-uppercase">Experience Letters</text>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xxl-auto col-xl-3 col-lg-4 col-md-6 col-12 grid-margin">
					<a class="card" href="">
						<div class="card-body">
							<div class="d-flex align-items-center gap-2">
								<i class="me-1 icon-lg" data-feather="folder"></i>
								<text class="tx-18 mb-0 text-uppercase">Other Documents</text>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="leaves-tab-pane" role="tabpanel" aria-labelledby="leaves-tab" tabindex="0">
			<div class="row">
				<div class="col-12 grid-margin">
					Leaves & Work-offs
				</div>
			</div>
		</div>
	</div>
	<!-- left wrapper start -->

	<!-- left wrapper end -->
</div>
