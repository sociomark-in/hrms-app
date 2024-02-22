<div class="page-content">
	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= base_url("settings/app-settings/home") ?>">Settings</a></li>
			<li class="breadcrumb-item active" aria-current="page">Company Settings</li>
		</ol>
	</nav>
	<div class="row justify-content-center">
		<?= form_open("") ?>
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-12 grid-margin">
							<div class="row">
								<div class="col-lg-6">
									<h4 class="mb-2">Edit Company Settings</h4>
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus pariatur voluptatem blanditiis soluta aliquid magni odit earum vel vero neque?
									</p>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="row">
								<div class="col-xl-4 col-md-6 col-12 grid-margin">
									<div class="row">
										<div class="col-12 grid-margin">
											<label for="" class="form-label">Company Name</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-12 grid-margin">
											<label for="" class="form-label">Brand Name</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-12 grid-margin">
											<label for="" class="form-label">Registered Address</label>
											<input type="text" class="form-control mb-1">
											<input type="text" class="form-control mb-1">
											<input type="text" class="form-control mb-1">
										</div>
										<div class="col-lg-8 col-md-6 col-12 grid-margin">
											<label for="" class="form-label">State</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-lg-4 col-md-6 col-12 grid-margin">
											<label for="" class="form-label">Pin Code</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6 col-12 grid-margin">
									<div class="row">
										<div class="col-lg-6 col-12 grid-margin">
											<label for="" class="form-label">GSTIN</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-lg-6 col-12 grid-margin">
											<label for="" class="form-label">PAN</label>
											<input type="text" class="form-control">
										</div>
										<div class="col-lg-6 col-12 grid-margin">
											<label for="" class="form-label">TAN</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6 col-12 grid-margin">
									<div class="row">
										<div class="col-12 grid-margin">
											<label for="" class="form-label">Brand Logo</label>
											<input type="file" name="" id="" class="form-control">
										</div>
									</div>
									<div class="p-3 bg-light">
										<strong>Instructions:</strong> <br>
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, delectus.
										</p>
										<ul>
											<li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, consectetur.</li>
											<li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, consectetur.</li>
											<li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, consectetur.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Save and Exit</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xxl-4 col-lg-6 col-md-6 col-12"></div>
		<div class="col-xxl-4 col-lg-6 col-md-6 col-12"></div>
		<?= form_close() ?>
	</div>
</div>
