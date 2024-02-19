<div class="card">
	<div class="card-body">
		<?php
		$punch_time = new DateTime(date_format(date_create("9:59:00"), "y-m-d H:i:s"));
		$now = new DateTime(date("Y-m-d H:i:s"));
		$diff = $punch_time->diff($now);
		$elapsed_time = (($diff->h + ($diff->i / 60)) / 12) * 100;
		?>
		<div class="row align-items-center">
			<div class="col-md-6 col-12">
				<div class="chart_wrapper">
					<div class="chart pie_chart clock_in" style="--time-elapsed-pc:<?= $elapsed_time ?>"></div>
					<div class="chart pie_chart clock_in_expected" style="--time-expected-pc:83.33"></div>
					<div class="clock_in_time"><?= implode(":", [str_pad($diff->h, 2, "0", STR_PAD_LEFT), str_pad($diff->i, 2, "0", STR_PAD_LEFT)]) ?></div>
				</div>
			</div>
			<div class="col-md-6 col-12">
				<div class="row gap-3">
					<div class="col-md-12 col-6">
						<?php if (isset($punch_time)) : ?>
							<button id="punch_in_start" class="btn btn-danger w-100">Punch Out</button>
						<?php else : ?>
							<button id="punch_in_start" class="btn btn-primary w-100">Punch In</button>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
