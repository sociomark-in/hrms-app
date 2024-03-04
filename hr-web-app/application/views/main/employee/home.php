<div class="page-content">

	<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
		<div>
			<h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
			<small><?= get_cookie('app_id') ?></small>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-12">
			<div class="row">
				<div class="col-12 grid-margin stretch-card">
					<div class="card intro__profile">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-baseline mb-3">
								<h6 class="card-title mb-0">Profile Completion</h6>
								<div class="dropdown mb-2">
									<a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
										<a class="dropdown-item d-flex align-items-center" href=""><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View Profile</span></a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="mb-2">
										<div class="progress ht-5">
											<div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="d-flex align-items-baseline">
										<p class="text-success">
											<span>+3.3%</span>
											<i data-feather="arrow-up" class="icon-sm mb-1"></i>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 intro__days">
					<div class="row">
						<div class="col-lg-6 col-12 grid-margin stretch-card">
							<div class="card intro__days">
								<div class="card-body">
									<div class="d-flex justify-content-between align-items-baseline">
										<h6 class="card-title mb-0">Working Days</h6>
									</div>
									<div class="row">
										<div class="col-12">
											<h3 class="mb-2">3,897</h3>
											<div class="d-flex align-items-baseline">
												<p class="text-success">
													<span>+3.3%</span>
													<i data-feather="arrow-up" class="icon-sm mb-1"></i>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between align-items-baseline">
										<h6 class="card-title mb-0">Working Days</h6>
									</div>
									<div class="row">
										<div class="col-12">
											<h3 class="mb-2">3,897</h3>
											<div class="d-flex align-items-baseline">
												<p class="text-success">
													<span>+3.3%</span>
													<i data-feather="arrow-up" class="icon-sm mb-1"></i>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between align-items-baseline">
										<h6 class="card-title mb-0">Working Days</h6>
									</div>
									<div class="row">
										<div class="col-12">
											<h3 class="mb-2">3,897</h3>
											<div class="d-flex align-items-baseline">
												<p class="text-success">
													<span>+3.3%</span>
													<i data-feather="arrow-up" class="icon-sm mb-1"></i>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between align-items-baseline">
										<h6 class="card-title mb-0">Working Days</h6>
									</div>
									<div class="row">
										<div class="col-12">
											<h3 class="mb-2">3,897</h3>
											<div class="d-flex align-items-baseline">
												<p class="text-success">
													<span>+3.3%</span>
													<i data-feather="arrow-up" class="icon-sm mb-1"></i>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 grid-margin stretch-card intro__leaves">
					<div class="accordion w-100" id="accordionLeaves">
						<div class="accordion-item">
							<div class="card">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<div class="d-flex w-100 justify-content-between align-items-center me-2">
											<h6 class="card-title mb-0">Leaves Insights</h6>
											<div class="dropdown">
												<a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
												</a>
												<div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
													<a class="dropdown-item d-flex align-items-center" href=""><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View All Leaves</span></a>
												</div>
											</div>
										</div>
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<div class="row">
											<div class="col-12">
												<?php for ($i = 0; $i < 10; $i++) : ?>
													<div class="item mb-3">
														<p><a href="">@employee_name</a> is on Leave Until <?= date_format(date_create("+2 days"), "F j, Y") ?></p>
														<p class="tx-12 text-muted">From <?= date_format(date_create("-2 days"), "F j, Y") ?></p>
													</div>
												<?php endfor ?>
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
		<div class="col-lg-6 col-12">
			<div class="d-flex mb-3 w-100 justify-content-between align-items-center me-2">
				<h6 class="card-title text-uppercase mb-0">All Announcements</h6>
				<!-- <div class="dropdown">
					<a type="button" id="buttonEvents" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Filter By&nbsp;<i class="icon-lg text-muted pb-3px" data-feather="filter"></i>
					</a>
					<div class="dropdown-menu" aria-labelledby="buttonEvents">
						<a class="dropdown-item d-flex align-items-center" href=""><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View All Events</span></a>
					</div>
				</div> -->
			</div>
			<div class="row g-0 intro__feed">
				<div class="col-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="text-muted text-center">
								You have no Announcements so far!
							</div>
						</div>
					</div>
				</div>
				<?php for ($i = 0; $i < 2; $i++) : ?>
					<div class="col-md-12 grid-margin">
						<div class="card rounded">
							<div class="card-header">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<img class="img-xs rounded-circle" src="https://ui-avatars.com/api/?background=a0a0a0&bold=true&name=<?= urlencode("Mike Popescu") ?>" alt="">
										<div class="ms-2">
											<p>Mike Popescu</p>
											<p class="tx-11 text-muted">1 min ago</p>
										</div>
									</div>
									<div class="dropdown">
										<a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
										</a>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
											<a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="meh" class="icon-sm me-2"></i> <span class="">Unfollow</span></a>
											<a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="corner-right-up" class="icon-sm me-2"></i> <span class="">Go to post</span></a>
											<a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="share-2" class="icon-sm me-2"></i> <span class="">Share</span></a>
											<a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="copy" class="icon-sm me-2"></i> <span class="">Copy link</span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<p class="tx-14">
									Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed numquam velit quo! Mollitia odio quos voluptates ducimus, nam consequatur excepturi inventore nobis doloribus dicta. Dolorum ut labore tenetur. Accusantium, repellendus!
								</p>
							</div>
							<div class="card-footer">
								<div class="d-flex post-actions">
									<a href="javascript:;" class="d-flex align-items-center text-muted me-4">
										<i class="icon-md" data-feather="heart"></i>
										<p class="d-none d-md-block ms-2">Like</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php endfor ?>
			</div>
		</div>
		<div class="col-lg-3 col-12">
			<div class="row g-0">
				<div class="col-12 grid-margin stretch-card">
					<?php
					require APPPATH . "/views/components/theme/widgets/_clock_time.php"; ?>
				</div>
				<div class="col-12 grid-margin">
					<figure class="overflow-hidden d-flex justify-content-center m-0">
						<img src="<?= base_url("/assets/images/banners/") ?>birthday.jpg" alt="Placeholder Banner" style="height: 100px;">
					</figure>
				</div>
				<div class="col-12 grid-margin">
					<figure class="overflow-hidden d-flex justify-content-center m-0">
						<img src="<?= base_url("/assets/images/banners/") ?>anniversary.jpg" alt="Placeholder Banner" style="height: 100px;">
					</figure>
				</div>
				<div class="col-12 grid-margin stretch-card intro__events">
					<div class="accordion w-100" id="accordionEvents">
						<div class="accordion-item">
							<div class="card">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEvents2" aria-expanded="false" aria-controls="collapseTwo">
										<div class="d-flex w-100 justify-content-between align-items-center me-2">
											<h6 class="card-title mb-0">Upcoming Events</h6>
											<div class="dropdown">
												<a type="button" id="buttonEvents" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
												</a>
												<div class="dropdown-menu" aria-labelledby="buttonEvents">
													<a class="dropdown-item d-flex align-items-center" href=""><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View All Events</span></a>
												</div>
											</div>
										</div>
									</button>
								</h2>
								<div id="collapseEvents2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionEvents">
									<div class="accordion-body">
										<table class="table">
											<?php for ($i = 0; $i < 3; $i++) : ?>
												<tr>
													<td class="d-flex align-items-center">
														<div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-danger rounded-circle me-3">
															<i class="icon-sm text-white" data-feather="gift"></i>
														</div>
														<div class="flex-grow-1 me-2">
															<p>New Event Added</p>
															<p class="tx-12 text-muted">30 min ago</p>
														</div>
													</td>
												</tr>
											<?php endfor ?>
											<?php for ($i = 0; $i < 2; $i++) : ?>
												<tr>
													<td class="d-flex align-items-center">
														<div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-warning rounded-circle me-3">
															<i class="icon-sm text-white" data-feather="award"></i>
														</div>
														<div class="flex-grow-1 me-2">
															<p>New Event Added</p>
															<p class="tx-12 text-muted">30 min ago</p>
														</div>
													</td>
												</tr>
											<?php endfor ?>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 grid-margin stretch-card intro__holidays">
					<div class="accordion w-100" id="accordionHolidays">
						<div class="accordion-item">
							<div class="card">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHolidays2" aria-expanded="false" aria-controls="collapseTwo">
										<div class="d-flex w-100 justify-content-between align-items-center me-2">
											<h6 class="card-title mb-0">Upcoming Holidays</h6>
											<div class="dropdown">
												<a type="button" id="buttonHolidays" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
												</a>
												<div class="dropdown-menu" aria-labelledby="buttonHolidays">
													<a class="dropdown-item d-flex align-items-center" href=""><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View All Holidays</span></a>
												</div>
											</div>
										</div>
									</button>
								</h2>
								<div id="collapseHolidays2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionHolidays">
									<div class="accordion-body">
										<table class="table">
											<?php for ($i = 0; $i < 3; $i++) : ?>
												<tr>
													<td>Holiday Title</td>
													<td><?= date("F j, Y") ?></td>
												</tr>
											<?php endfor ?>
										</table>
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
