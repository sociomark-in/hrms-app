<div class="page-content">
	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= base_url("settings/app-settings/home") ?>">Settings</a></li>
			<li class="breadcrumb-item active" aria-current="page">Payroll Setup</li>
		</ol>
	</nav>

	<div class="row m-0 justify-content-center">
		<div class="col-xxl-10 col-xl-9 col-12 grid-margin">
			<div class="row m-0">
				<div class=" col-lg-4 col-md-6 col-12 grid-margin">
					<div class="mb-3">
						<h4>Payroll Setup</h4>
					</div>
					<div class="">
						<div class="bg-light mb-3 p-3">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusamus explicabo, magni perspiciatis provident repudiandae dicta laudantium odio neque. Iusto expedita odit, quos quasi quod quia nihil aliquid laborum dolore.
						</div>
						<div class="card">
							<div class="card-body">
								<div class="form-check mb-3">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
									<label class="form-check-label" for="flexCheckChecked">
										Send notification to employees informing them of the payroll execution.
									</label>
								</div>
								<div class="form-check mb-3">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
									<label class="form-check-label" for="flexCheckChecked">
										Email (will include their payslip)
									</label>
								</div>
							</div>
						</div>
					</div>
					<table class="table table-sm table-striped">
						<tr></tr>
					</table>
				</div>
				<div class="col-md-6 col-12 grid-margin">
					<div class="mb-3">
						<h4>Salary Setup</h4>
					</div>
					<div class="row">
						<div class="bg-light p-3 col-12 grid-margin">
							<div class="mb-2">
								<h5>Default Salary Structure:</h5>
							</div>
							<div class="">
								<ul>
									<li>
										You can customize the default salary structure that <?= APP_NAME ?> uses for your employees.
									</li>
								</ul>
							</div>
						</div>
						<div class="col-12 form-check mb-3 grid-margin">
							<input class="form-check-input" name="salary_structure" type="checkbox" value="default" checked id="checkDefaultSalaryStructure">
							<label class="form-check-label" for="checkDefaultSalaryStructure">
								Use <?= APP_NAME ?>'s Default Salary Structure?
							</label>
						</div>
						<div class="col-12 grid-margin">
							<table class="table table-striped table-sm fixed-h500" id="defaultSalaryStructure">
								<tr>
									<th>Salary Component</th>
									<th>% of CTC</th>
									<th>Percentage or Fixed?</th>
									<th>Taxable?</th>
								</tr>
								<tr>
									<td>Basic</td>
									<td>Lorem, ipsum.</td>
									<td>Percentage</td>
									<td>Lorem, ipsum.</td>
								</tr>
								<tr>
									<td>HRA</td>
									<td>Lorem, ipsum.</td>
									<td>Percentage</td>
									<td>Lorem, ipsum.</td>
								</tr>
								<tr>
									<td>Special Allowance</td>
									<td>Lorem, ipsum.</td>
									<td>Percentage</td>
									<td>Lorem, ipsum.</td>
								</tr>
								<tr>
									<td>LTA</td>
									<td>Lorem, ipsum.</td>
									<td>Percentage</td>
									<td>Lorem, ipsum.</td>
								</tr>
								<tr>
									<td>Dearness Allowance</td>
									<td>Lorem, ipsum.</td>
									<td>Percentage</td>
									<td>Lorem, ipsum.</td>
								</tr>
							</table>

							<table id="customSalaryStructure" class="table table-sm table-striped fixed-h500" style="display: none;">
								<tr>
									<th>Salary Component</th>
									<th>% of CTC</th>
									<th>Percentage or Fixed?</th>
									<th>Taxable?</th>
								</tr>
								<tr>
									<td>Basic</td>
									<td><input type="text" class="form-control"></td>
									<td>Percentage</td>
									<td>Lorem, ipsum.</td>
								</tr>
								<tr>
									<td>HRA</td>
									<td><input type="text" class="form-control"></td>
									<td>Percentage</td>
									<td>Lorem, ipsum.</td>
								</tr>
								<tr>
									<td>Special Allowance</td>
									<td><input type="text" class="form-control"></td>
									<td>Percentage</td>
									<td>Lorem, ipsum.</td>
								</tr>
								<tr>
									<td>LTA</td>
									<td><input type="text" class="form-control"></td>
									<td>Percentage</td>
									<td>Lorem, ipsum.</td>
								</tr>
								<tr>
									<td>Dearness Allowance</td>
									<td><input type="text" class="form-control"></td>
									<td>Percentage</td>
									<td>Lorem, ipsum.</td>
								</tr>
								<?php for ($i = 0; $i < 5; $i++) : ?>
									<tr>
										<td><input type="text" class="form-control"></td>
										<td><input type="text" class="form-control"></td>
										<td>
											<select class="form-select">
												<option value="Percentage">Percentage</option>
												<option value="Fixed">Fixed</option>
											</select>
										</td>
										<td><input type="text" class="form-control"></td>
									</tr>
								<?php endfor ?>
							</table>
						</div>
					</div>
					<script>
						$("#checkDefaultSalaryStructure").on('change', () => {
							console.log($("#checkDefaultSalaryStructure").is(':checked'));
							if ($("#checkDefaultSalaryStructure").is(':checked')) {
								$("#defaultSalaryStructure").css("display", "table")
								$("#customSalaryStructure").css("display", "none")
							} else {
								console.log("Custom Salary Structure");
								$("#defaultSalaryStructure").css("display", "none")
								$("#customSalaryStructure").css("display", "table")
							}
						})
					</script>
				</div>
				<div class="col-lg-4 col-md-6 col-12 grid-margin">
					<div class="mb-3">
						<h4>Reimbursements Setup</h4>
					</div>
					<div class="">
						<div class="form-check mb-3">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
							<label class="form-check-label" for="flexCheckChecked">
								Reimbursements Enabled?
							</label>
						</div>
						<div class="bg-light mb-3 p-3">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusamus explicabo, magni perspiciatis provident repudiandae dicta laudantium odio neque. Iusto expedita odit, quos quasi quod quia nihil aliquid laborum dolore.
						</div>
						<div class="form-check mb-3">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
							<label class="form-check-label" for="flexCheckChecked">
								Make description compulsory
							</label>
						</div>
						<div class="form-check mb-3">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
							<label class="form-check-label" for="flexCheckChecked">
								Make attachments compulsory
							</label>
						</div>
						<div class="bg-light mb-3 p-3">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusamus explicabo, magni perspiciatis provident repudiandae dicta laudantium odio neque. Iusto expedita odit, quos quasi quod quia nihil aliquid laborum dolore.
						</div>
						<div class="form-check mb-3">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
							<label class="form-check-label" for="flexCheckChecked">
								Include Reimbursements in Payslip
							</label>
						</div>
						<table class="table table-sm table-striped">
							<tr>
								<th>Reimbursement Type</th>
								<th>Enabled?</th>
							</tr>
							<tr>
								<td>Travel</td>
								<td><input type="checkbox" checked name="" id="" class="form-check"></td>
							</tr>
							<tr>
								<td>Hotel & Accomodations</td>
								<td><input type="checkbox" checked name="" id="" class="form-check"></td>
							</tr>
							<tr>
								<td>Food</td>
								<td><input type="checkbox" checked name="" id="" class="form-check"></td>
							</tr>
							<tr>
								<td>Other Reimbursements</td>
								<td><input type="checkbox" name="" id="" class="form-check"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<div class="card">
						<div class="card-body"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xxl-2 col-xl-3 col-12 grid-margin">
			<div class="bg-light p-3">
				<div class="mb-3">
					<h5>
						Payroll, Salary & Reimbursement Setup
					</h5>
				</div>
				<div class="desc">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut nobis, sit omnis aliquam hic ab quia temporibus necessitatibus iusto tenetur voluptatem? Odio minus architecto, consequuntur dolor quidem voluptas eveniet veritatis.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
