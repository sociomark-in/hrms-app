<div class="page-content">
	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">All Employees</li>
		</ol>
	</nav>
	<div class="row">
		<div class="col-12 grid-margin">
			<div class="row m-0 justify-content-between">
				<div class="col-auto">
					<h3>All Employees</h3>
				</div>
				<div class="col-auto">
					<div class="dropdown">
						<a href="<?= base_url("employees/add") ?>" class="btn btn-primary">Add New Employee</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xxl-10 col-xl-9 col-12">
			<div class="card">
				<div class="card-body">
					<table id="employee_table" class="table table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Employee Name</th>
								<th>Designation</th>
								<th>Department</th>
								<th>Gender</th>
								<th>Date of Joining</th>
							</tr>
						</thead>
						<tbody>
							<?php for ($i = 1; $i < 50; $i++) : ?>
								<tr>
									<?php
									$id = "EMP_". random_string('alnum', 5) . "_". str_pad($i, 2, "0", STR_PAD_LEFT);
									?>
									<td><a href="<?= base_url('profile?employee_id=' . $id) ?>"><?= "#" .$id ?></a></td>
									<td>Employee_<?= str_pad($i, 2, "0", STR_PAD_LEFT) ?></td>
									<td>Designation_000</td>
									<td>Department_000</td>
									<td>Male</td>
									<td><?= date_format(date_create('now'), "Y-m-d") ?></td>
								</tr>
							<?php endfor ?>
						</tbody>
					</table>
					<script>
						new DataTable('#employee_table', {
							dom: 'lfrtip'
						});
					</script>
				</div>
			</div>
		</div>
		<div class="col-xxl-2 col-xl-3 col-12">
			<div class="p-3 bg-light">
				<div class="mb-3">
					<h5>Timing, Attendance & Holidays</h5>
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
