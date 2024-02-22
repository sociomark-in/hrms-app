<div class="page-content">
	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Application Settings</li>
		</ol>
	</nav>
	<div class="row m-0">
		<div class="col-xxl-10 col-xl-9 col-12 grid-margin">
			<div class="row m-0">
				<!-- Company Settings -->
				<div class="col-lg-6 col-12 grid-margin">
					<fieldset>
						<legend class="d-flex justify-content-between align-items-center flex-wrap grid-margin mb-2">
							<div>
								<h4 class="mb-3 mb-md-0">Company Settings</h4>
							</div>
							<div>
								<a href="<?= base_url("settings/app-settings/general") ?>" class="btn btn-sm btn-outline-primary text-uppercase">Edit Settings</a>
							</div>
						</legend>
						<div class="">
							<table class="table table-sm table-striped">
								<tr>
									<td>Name</td>
									<td>Company Name</td>
								</tr>
								<tr>
									<td>Company Logo</td>
									<td>Yes</td>
								</tr>
								<tr>
									<td>Company Address</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>GSTIN</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>PAN</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>TAN</td>
									<td>N/A</td>
								</tr>
							</table>
						</div>
					</fieldset>
				</div>

				<!-- Holidays, Attendance & Leaves -->
				<div class="col-lg-6 col-12 grid-margin">
					<fieldset>
						<legend class="d-flex justify-content-between align-items-center flex-wrap grid-margin mb-2">
							<div>
								<h4 class="mb-3 mb-md-0">Holidays, Attendance & Leaves</h4>
							</div>
							<div>
								<a href="<?= base_url("settings/app-settings/attendance") ?>" class="btn btn-sm btn-outline-primary text-uppercase">Edit Settings</a>
							</div>
						</legend>
						<div class="">
							<table class="table table-sm table-striped">
								<tr>
									<td>Attendance Enabled</td>
									<td>Yes</td>
								</tr>
								<tr>
									<td>Track Shift Timings</td>
									<td>Yes</td>
								</tr>
								<tr>
									<td>Weekends</td>
									<td>NA</td>
								</tr>
								<tr>
									<td>Types of Leaves</td>
									<td>NA</td>
								</tr>
								<tr>
									<td>Holidays</td>
									<td>12 Days Added</td>
								</tr>
							</table>
						</div>
					</fieldset>
				</div>

				<!-- Payroll Settings -->
				<div class="col-lg-6 col-12 grid-margin">
					<fieldset>
						<legend class="d-flex justify-content-between align-items-center flex-wrap grid-margin mb-2">
							<div>
								<h4 class="mb-3 mb-md-0">Payroll, Salary & Reimbursements Setup</h4>
							</div>
							<div>
								<a href="<?= base_url("settings/app-settings/payroll") ?>" class="btn btn-sm btn-outline-primary text-uppercase">Edit Settings</a>
							</div>
						</legend>
						<div class="">
							<table class="table table-sm table-striped">
								<tr>
									<td>Payslip Alert</td>
									<td>10th of Every Month</td>
								</tr>
								<tr>
									<td>Advance Salary Requests</td>
									<td>Disabled</td>
								</tr>
								<tr>
									<td>Salary Structure</td>
									<td>Default</td>
								</tr>
								<tr>
									<td>Bonus Types</td>
									<td>6 Bonuses Selected</td>
								</tr>
								<tr>
									<td>Payslip Receipts</td>
									<td>13th of Every Month</td>
								</tr>
								<tr>
									<td>Reimbursement Requests</td>
									<td>Enabled - Bill Required</td>
								</tr>
							</table>
						</div>
					</fieldset>
				</div>

				<!-- Employee Settings -->
				<div class="col-lg-6 col-12 grid-margin">
					<fieldset>
						<legend class="d-flex justify-content-between align-items-center flex-wrap grid-margin mb-2">
							<div>
								<h4 class="mb-3 mb-md-0">Employee Settings</h4>
							</div>
							<div>
								<a href="<?= base_url("settings/app-settings/employee") ?>" class="btn btn-sm btn-outline-primary text-uppercase">Edit Settings</a>
							</div>
						</legend>
						<div class="">
							<table class="table table-sm table-striped">
								<tr>
									<td>Name</td>
									<td>Company Name</td>
								</tr>
								<tr>
									<td>Company Logo</td>
									<td><?= FCPATH ?></td>
								</tr>
								<tr>
									<td>Company Address</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>GSTIN</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>PAN</td>
									<td>N/A</td>
								</tr>
								<tr>
									<td>TAN</td>
									<td>N/A</td>
								</tr>
							</table>
						</div>
					</fieldset>
				</div>

				<!-- Other Settings -->
				<div class="col-lg-6 col-12 grid-margin">
					<fieldset>
						<legend class="d-flex justify-content-between align-items-center flex-wrap grid-margin mb-2">
							<div>
								<h4 class="mb-3 mb-md-0">User Roles</h4>
							</div>
							<div>
								<a href="<?= base_url("settings/app-settings/roles") ?>" class="btn btn-sm btn-outline-primary text-uppercase">Edit Settings</a>
							</div>
						</legend>
						<div class="">
							<table class="table table-sm table-striped">
								<tr>
									<td>Name</td>
									<td>Company Name</td>
								</tr>
								<tr>
									<td>Company Logo</td>
									<td><?= FCPATH ?></td>
								</tr>
							</table>
						</div>
					</fieldset>
				</div>
				<!-- Documents & Templates -->
				<div class="col-lg-6 col-12 grid-margin">
					<fieldset>
						<legend class="d-flex justify-content-between align-items-center flex-wrap grid-margin mb-2">
							<div>
								<h4 class="mb-3 mb-md-0">Documents, Letters & Other Templates</h4>
							</div>
							<div>
								<a href="<?= base_url("settings/app-settings/documents") ?>" class="btn btn-sm btn-outline-primary text-uppercase">Edit Settings</a>
							</div>
						</legend>
						<div class="">
							<table class="table table-sm table-striped">
								<tr>
									<td>Document Types</td>
									<td>5 Document Types Added</td>
								</tr>
								<tr>
									<td>Setting</td>
									<td>value</td>
								</tr>
								<tr>
									<td>Setting</td>
									<td>value</td>
								</tr>
							</table>
						</div>
					</fieldset>
				</div>
			</div>
		</div>
		<div class="col-xxl-2 col-xl-3 col-12 grid-margin">
			<div class="bg-light p-3">
				<div class="mb-3">
					<h4>Settings</h4>
				</div>
				<div class="desc">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, iusto corporis ea, illum, necessitatibus totam cumque libero sed asperiores dolorum tempore repudiandae. Deleniti ex quam, earum sapiente et sed dignissimos temporibus maiores. Commodi ipsam ea veritatis enim, dolore animi ex!
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
