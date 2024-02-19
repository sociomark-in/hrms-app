<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>



	<title>Document</title>
</head>

<body>
	<div class="clock_in_time">10:00</div>
	<button id="punch_in_start" class="btn btn-primary w-100">Punch In</button>
	<button id="punch_in_pause" class="btn btn-primary w-100">Take A Break</button>
	<button id="punch_out" class="btn btn-primary w-100">Punch Out</button>
</body>
<script src="<?= base_url("/assets/js/") ?>stopwatch.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.clock_in_time').stopwatch('init');
		$("#punch_in_start").on("click", () => {
			$('.clock_in_time').stopwatch('start');
		})
	});
</script>

</html>
