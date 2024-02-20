<div class="card">
	<div class="card-body">
		<?php
		// $attendance["punch_in_time"] = "10:02:30";
		$elapsed_time = 0;
		$isPunchedIn = false;
		$isPunchedOut = false;
		$punch_in_time = $attendance["time_in"];
		if (isset($punch_in_time) && $punch_in_time != "") {
			$isPunchedIn = true;
			$clock_time = new DateTime(date_format(date_create($punch_in_time), "y-m-d H:i:s"));
			$now = new DateTime(date("Y-m-d H:i:s"));
			$diff = $clock_time->diff($now);
			$elapsed_time = (($diff->h + ($diff->i / 60)) / 12) * 100;
		}
		if (isset($punch_out_time) && $punch_out_time != "") {
			$isPunchedOut = true;
			$elapsed_time = 0;
		}
		?>
		<div class="row align-items-center">
			<div class="col-md-6 col-12">
				<div class="chart_wrapper">
					<div class="chart pie_chart clock_in" style="--time-elapsed-pc:<?= $elapsed_time ?>"></div>
					<div class="chart pie_chart clock_in_expected" style="--time-expected-pc:83.33"></div>
					<div class="clock_in_time"><?= (isset($diff)) ? implode(":", [str_pad($diff->h, 2, "0", STR_PAD_LEFT), str_pad($diff->i, 2, "0", STR_PAD_LEFT)]) : "00:00"  ?></div>
				</div>
			</div>
			<div class="col-md-6 col-12">
				<div class="row gap-3">
					<div class="col-md-12 col-6">
						<?php
						if ($isPunchedIn) : ?>
							<div class="mb-2">
								Punched in at <br> <strong><?= $punch_in_time ?></strong>
							</div>
							<button id="punch_in_button" class="btn btn-danger w-100">Punch Out</button>
						<?php elseif ($isPunchedOut) : ?>
						<?php else : ?>
							<button id="punch_in_button" class="btn btn-primary w-100">Punch In</button>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	// "9:59:00"
	$("#punch_in_button").on("click", () => {
		if ($(this).hasClass('btn-primary')) {
			$.ajax({
				data: {
					'punch_in_time': "<?= date('H:i:s') ?>",
				},
				method: "POST",
				url: "<?= base_url("api/action/attendance/punch-in") ?>",
				success: () => {
					console.log("Succecss");
					$(this).removeClass("btn-primary")
					$(this).addClass("btn-danger")
					$(this).text("Punch in")
				},
				error: () => {
					console.log("AJAX Error");
				}
			})
		} else {
			$.ajax({
				data: {
					'punch_out_time': "<?= date('H:i:s') ?>",
				},
				method: "POST",
				url: "<?= base_url("api/action/attendance/punch-out") ?>",
				success: () => {
					console.log("Succecss");
					$(this).removeClass("btn-primary")
					$(this).addClass("btn-danger")
					$(this).text("Punch Out")
				},
				error: () => {
					console.log("AJAX Error");
				}
			})
		}
	})
</script>
