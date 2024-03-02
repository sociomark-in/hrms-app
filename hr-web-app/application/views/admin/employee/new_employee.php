<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.0/dist/jquery-steps.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendors/jquery-steps/css/jquery.steps.min.css">

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
					<h3>Add a New Employee</h3>
				</div>
				<div class="col-xxl-10 col-xl-9 col-12">
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h5>New Employee</h5>
							</div>

							<div class="step-app" id="demo">
								<ul class="steps-pills nav-pills d-flex px-0 gap-1">
									<li data-step-target="step1" class="nav-link p-2 px-3">1.&nbsp;<span>Personal Information</span></li>
									<li data-step-target="step2" class="nav-link p-2 px-3">2.&nbsp;<span>Organizational Information</span></li>
									<li data-step-target="step3" class="nav-link p-2 px-3">3.&nbsp;<span>Upload Documents</span></li>
								</ul>
								<?= form_open("", ["id" => 'addNewEmployeeForm']) ?>
								<div class="step-content tab-content">
									<fieldset class="step-tab-panel tab-pane" data-step="step1">
										<div class="row">
											<div class="col-lg-4 col-md-6 col-12 grid-margin">
												<div class="p-3 bg-light">
													<div class="mb-3">
														<h5>Personal Information</h5>
													</div>
													<div class="desc">
														<p>
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis at dolorem consectetur rerum aperiam aspernatur repellat nobis ea amet nemo.
														</p>
													</div>
												</div>
											</div>
											<div class="col-12 grid-margin">
												<div class="row">
													<?php if (in_array('first_name', $control_options['fields'])) : ?>
														<div class="col-lg col-12">
															<div class="mb-3">
																<label for="" class="form-label">First Name</label>
																<input type="text" class="form-control" required>
															</div>
														</div>
													<?php endif ?>
													<?php if (in_array('middle_name', $control_options['fields'])) : ?>
														<div class="col-lg col-12">
															<div class="mb-3">
																<label for="" class="form-label">Middle Name</label>
																<input type="text" class="form-control" required>
															</div>
														</div>
													<?php endif ?>
													<?php if (in_array('last_name', $control_options['fields'])) : ?>
														<div class="col-lg col-12">
															<div class="mb-3">
																<label for="" class="form-label">Last Name</label>
																<input type="text" class="form-control" required>
															</div>
														</div>
													<?php endif ?>
													<?php if (in_array('email', $control_options['fields'])) : ?>
														<div class="col-12">
															<div class="mb-3">
																<label for="" class="form-label">Email</label>
																<input type="email" class="form-control" required>
															</div>
														</div>
													<?php endif ?>
													<?php if (in_array('mobile', $control_options['fields'])) : ?>
														<div class="col-lg-4 col-md-6 col-12">
															<div class="mb-3">
																<label for="" class="form-label">Mobile Number</label>
																<input type="text" class="form-control" required>
															</div>
														</div>
													<?php endif ?>
													<?php if (in_array('dob', $control_options['fields'])) : ?>
														<div class="col-lg-4 col-md-6 col-12">
															<div class="mb-3">
																<label for="" class="form-label">Date of Birth</label>
																<input type="date" class="form-control" required>
															</div>
														</div>
													<?php endif ?>
													<?php if (in_array('gender', $control_options['fields'])) : ?>
														<div class="col-lg-4 col-md-6 col-12">
															<div class="mb-3">
																<label for="" class="form-label">Gender</label>
																<select name="" id="" required class="form-select">
																	<option selected>Select Gender</option>
																	<option value="">Male</option>
																	<option value="">Female</option>
																	<option value="">Other</option>
																</select>
															</div>
														</div>
													<?php endif ?>

												</div>
											</div>
										</div>
									</fieldset>
									<fieldset class="step-tab-panel tab-pane" data-step="step2">
										<div class="row">
											<div class="col-lg-4 col-md-6 col-12 grid-margin">
												<div class="p-3 bg-light">
													<div class="mb-3">
														<h5>Professional Information</h5>
													</div>
													<div class="desc">
														<p>
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis at dolorem consectetur rerum aperiam aspernatur repellat nobis ea amet nemo.
														</p>
													</div>
												</div>
											</div>
											<div class="col-12 grid-margin">
												<div class="row">
													<div class="col-xl-2 col-lg-3 col-md-6 col-12">
														<div class="mb-3">
															<label for="" class="form-label">Employee ID</label>
															<input type="email" class="form-control" disabled>
														</div>
													</div>
													<div class="col-xl-10 col-lg-9 col-md-6 col-12"></div>
													<?php if (in_array('email', $control_options['fields'])) : ?>
														<div class="col-lg-8 col-md-6 col-12">
															<div class="mb-3">
																<label for="" class="form-label">Email</label>
																<input type="email" class="form-control" required>
															</div>
														</div>
													<?php endif ?>
													<?php if (in_array('mobile', $control_options['fields'])) : ?>
														<div class="col-lg-4 col-md-6 col-12">
															<div class="mb-3">
																<label for="" class="form-label">Mobile Number</label>
																<input type="text" class="form-control" required>
															</div>
														</div>
													<?php endif ?>
													<?php if (in_array('dob', $control_options['fields'])) : ?>
														<div class="col-lg-4 col-md-6 col-12">
															<div class="mb-3">
																<label for="" class="form-label">Department</label>
																<select name="" id="select2Departments" required class="form-select">
																	<option selected>Select Department</option>
																	<option value="">Male</option>
																	<option value="">Female</option>
																	<option value="">Other</option>
																</select>
																<script>
																	$("#select2Departments").select2();
																</script>
															</div>
														</div>
													<?php endif ?>
													<?php if (in_array('gender', $control_options['fields'])) : ?>
														<div class="col-lg-4 col-md-6 col-12">
															<div class="mb-3">
																<label for="" class="form-label">Designation</label>
																<select name="" id="select2Designations" required class="form-select">
																	<option selected>Select Designation</option>
																	<option value="">Male</option>
																	<option value="">Female</option>
																	<option value="">Other</option>
																</select>
																<script>
																	$("#select2Designations").select2();
																</script>
															</div>
														</div>
													<?php endif ?>
													<div class="col-lg-4 col-md-6 col-12">
														<div class="mb-3">
															<label for="" class="form-label">Reporting to</label>
															<select name="" id="select2RM" required class="form-select">
																<option selected>Select Reporting Manager</option>
																<?php for ($i = 0; $i < 10; $i++) : ?>
																	<option value="">
																		Manager <?= $i ?>
																	</option>
																<?php endfor ?>
															</select>
															<script>
																$("#select2RM").select2();
															</script>
														</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
									<fieldset class="step-tab-panel tab-pane" data-step="step3">
										<div class="row justify-content-between">
											<div class="col-lg-4 col-md-6 col-12 grid-margin">
												<div class="row">
													<div class="col-12 grid-margin">
														<div class="mb-3">
															<label for="" class="form-label">Select an Document to Upload:</label>
															<select name="" id="select2Uploads" required class="form-select">
																<option selected>Select Document Type</option>
																<option value="">Male</option>
																<option value="">Female</option>
																<option value="">Other</option>
															</select>
															<script>
																$("#select2Uploads").select2();
															</script>
														</div>
														<div class="mb-3">
															<label for="" class="form-label">Upload a Document</label>
															<input type="file" name="upload_document" id="fileDropzone">
															<script>
																$("input#fileDropzone").fileinput({
																	language: 'en',
																	uploadUrl: '<?= base_url('api/upload/single_document') ?>',
																	allowedFileExtensions: ['pdf', 'jpg', 'png'],
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
														<h5>Upload Documents</h5>
													</div>
													<div class="desc">
														<p>
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis at dolorem consectetur rerum aperiam aspernatur repellat nobis ea amet nemo.
														</p>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
								</div>
								<div class="step-footer">
									<button type="button" data-step-action="prev" class="step-btn btn btn-secondary">Back</button>
									<button type="button" data-step-action="next" class="step-btn btn btn-primary">Confirm & Proceed</button>
									<button type="button" id="onboardingStepOneSubmit" data-step-action="finish" class="step-btn btn btn-primary">Submit</button>
								</div>
								<?= form_close() ?>
							</div>

							<script src="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.0/dist/jquery-steps.min.js"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/inputmask.min.js" referrerpolicy="no-referrer"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js" referrerpolicy="no-referrer"></script>
							<script>
								var form = $("#addNewEmployeeForm");
								$('#demo').steps({
									headerTag: "h3",
									bodyTag: "section",
									transitionEffect: "slideLeft",
									stepSelector: ".steps-pills",
									activeClass: "active",
									onFinish: function() {
										var formData = new FormData(document.getElementById("addNewEmployeeForm"))
										console.log(formData);
										var object = {};
										formData.forEach((value, key) => object[key] = value);
										$.ajax({
											data: object,
											url: "<?= base_url('api/employee/new') ?>",
											method: "POST",
											success: () => {
												console.log("AJAX Success");
												$("#employeeAddSuccessModal").modal("show");
											},
											error: () => {
												console.log("AJAX ERROR!");
											}
										})
									},
									onDestroy: function() {
										alert('destroyed');
									}
								});
								$(":input").inputmask();
							</script>
						</div>
					</div>
				</div>
				<div class="col-xxl-2 col-xl-3 col-12">
					<div class="p-3 bg-light">
						<div class="mb-3">
							<h5>Add a New Employee</h5>
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

<div class="modal fade" id="employeeAddSuccessModal" tabindex="-1" aria-labelledby="employeeAddSuccessModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="employeeAddSuccessModalLabel">Success</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				Employee Added Successfully!!
			</div>
			<div class="modal-footer">
				<a href="<?= base_url("profile?employee_id=EMP_19BaV_33") ?>" class="btn btn-primary">Go to Employee Profile</a>
				<a href="<?= base_url("employee-management/employees") ?>" class="btn btn-secondary">Go to All Employees</a>
			</div>
		</div>
	</div>
</div>
