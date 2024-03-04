<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.2/js/fileinput.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.2/css/fileinput.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="page-content">
	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= base_url("employee-management/employees") ?>">All Employees</a></li>
			<li class="breadcrumb-item active" aria-current="employee-management/employees/new">Add New Employee</li>
		</ol>
	</nav>
	<div class="row">
		<div class="col-12 grid-margin">
			<div class="row m-0 justify-content-between">
				<div class="col-12 grid-margin">
					<h3>Upload Bulk Employee Data</h3>
				</div>
				<div class="col-xxl-10 col-xl-9 col-12">
					<div class="row">
						<div class="col-12 grid-margin">
							<div class="card">
								<div class="card-body">
									<div class="row justify-content-between">
										<div class="col-lg-4 col-md-6 col-12 grid-margin">
											<div class="row">
												<div class="col-12 grid-margin">
													<div class="mb-3">
														<label for="" class="form-label">Upload a .csv Document</label>
														<input type="file" name="" id="fileDropzone">
														<script>
															$("input#fileDropzone").fileinput({
																language: 'en',
																uploadUrl: '<?= base_url('api/upload/employee/bulk') ?>',
																allowedFileExtensions: ['csv'],
																uploadExtraData: function(mom) {
																	var arr = {
																		'id': 'id',
																		'other_data': 'other'
																	}
																	return arr;
																}
															})
														</script>
													</div>
												</div>
												<div class="col-lg-8 col-12 grid-margin"></div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-12 grid-margin">
											<div class="p-3 bg-light">
												<div class="mb-3">
													<h5>Guidelines for Uploading Documents</h5>
												</div>
												<div class="desc">
													<ul>
														<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, aliquam.</li>
														<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, aliquam.</li>
														<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, aliquam.</li>
														<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, aliquam.</li>
														<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, aliquam.</li>
													</ul>
													<p>
														You can download the <a href="">sample format</a> in which your csv should be uploaded.
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
				<div class="col-xxl-2 col-xl-3 col-12">
					<div class="p-3 bg-light">
						<div class="mb-3">
							<h5>Upload Bulk Data of Employees</h5>
						</div>
						<div class="desc">
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis at dolorem consectetur rerum aperiam aspernatur repellat nobis ea amet nemo.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
