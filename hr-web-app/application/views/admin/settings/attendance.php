<div class="page-content">
	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= base_url("settings/app-settings/home") ?>">Settings</a></li>
			<li class="breadcrumb-item active" aria-current="page">Holidays, Attendance & Leaves</li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-xl-4 col-lg-6 col-12">
			<div class="mb-3 form-check">
				<input class="form-check-input" name="holiday_structure" type="checkbox" value="default" checked id="checkDefaultHolidays">
				<label class="form-check-label" for="checkDefaultHolidays">
					Use <?= APP_NAME ?>'s Default Organizational Holidays?
				</label>
			</div>
			<div class="">
				<table class="table table-striped fixed-h500 mb-3" id="defaultHolidays">
					<tr>
						<th>Holiday</th>
						<th>Date</th>
					</tr>
					<?php foreach ($org_holidays as $key => $holiday) : ?>
						<tr>
							<td><?= $holiday['title'] ?></td>
							<td>
								<?php
								if ($holiday["from_date"] == $holiday["to_date"]) {
									$date = $holiday["from_date"];
								} else {
									$date = $holiday["from_date"] . " to " . $holiday["to_date"];
								}
								echo $date;
								?>
							</td>
						</tr>
					<?php endforeach ?>
				</table>

				<table id="customHolidays" class="table table-sm table-striped fixed-h500" style="display: none;">
					<tr>
						<th>Holiday</th>
						<th>From Date</th>
						<th>To Date</th>
					</tr>
					<?php foreach ($org_holidays as $key => $holiday) : ?>
						<tr>
							<td><input type="text" class="form-control" value="<?= $holiday['title'] ?>"></td>
							<td>
								<input type="date" class="form-control" value="<?= date_format(date_create_from_format("d-m", $holiday["from_date"]), "Y-m-d") ?>">
							</td>
							<td>
								<input type="date" class="form-control" value="<?= date_format(date_create_from_format("d-m", $holiday["to_date"]), "Y-m-d") ?>">
							</td>
						</tr>
					<?php endforeach ?>
					<?php for ($i = 0; $i < 5; $i++) : ?>
						<tr>
							<td><input type="text" class="form-control"></td>
							<td>
								<input type="date" class="form-control">
							</td>
							<td>
								<input type="date" class="form-control">
							</td>
						</tr>
					<?php endfor ?>
				</table>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-12 grid-margin">
			Attendance & Leaves Management
		</div>
		<div class="col-xl-4 col-lg-6 col-12 grid-margin">
			<div class="p-3 bg-light">
				<div class="mb-2">
					<h5>Holidays, Attendance & Leaves Settings</h5>
				</div>
				<div class="">
					<ul>
						<li>
							You can customize the default Organizational Holidays that <?= APP_NAME ?> uses for your employees.
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$("#checkDefaultHolidays").on('change', () => {
		console.log($("#checkDefaultHolidays").is(':checked'));
		if ($("#checkDefaultHolidays").is(':checked')) {
			console.log("Default Salary Structure");
			$("#defaultHolidays").css("display", "table")
			$("#customHolidays").css("display", "none")
		} else {
			console.log("Custom Holidays");
			$("#defaultHolidays").css("display", "none")
			$("#customHolidays").css("display", "table")
		}
	})
</script>
