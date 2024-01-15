<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('components/common/_head'); ?>
	<title>Document</title>
</head>

<body>
	<?php $this->load->view('components/dashboard/_nav'); ?>
	<?php $this->load->view('components/common/_nav'); ?>
	<main>
		<header class="bg-secondary-subtle-10">
			<div class="container-fluid p-3 px-5">
				<div class="row m-0 g-0 justify-content-between align-items-center">
					<div class="col-auto">
						<h2>Hello, Admin</h2>
						<div class="">
							Hope You're having a great day!
						</div>
						<div class="d-flex align-items-center gap-3">
							<div class="">Profile: <strong>87.6% Completed</strong></div>
							<div class="progress" style="width: 15rem; height:0.5rem;" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
								<div class="progress-bar bg-primary" style="width: 87.6%"></div>
							</div>
						</div>
					</div>
					<div class="col-auto">
						<div class="mb-3"><a class="simple-link" href="calendar"><?= date("l, F d") ?></a></div>
						<div class="mb-3">
							<button class="btn btn-secondary btn-lg"><i class="ti ti-clock-hour-4 icon icon-left"></i>Check In</button>
							12:35 Hrs
						</div>
						<div class="">
							<ul class="nav gap-2">
								<li class="nav-item">
									<a class="btn btn-sm btn-outline-primary" href="#">Apply Leave</a>
								</li>
								<li class="nav-item">
									<a class="btn btn-sm btn-outline-primary" href="#">Log Time</a>
								</li>
								<li class="nav-item">
									<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#customizeApps" aria-controls="customizeApps">
										<i class="ti ti-apps"></i>
									</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="offcanvas offcanvas-end" tabindex="-1" id="customizeApps" aria-labelledby="customizeAppsLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="customizeAppsLabel">Offcanvas</h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<ul class="list-group" id="sortApps">
					<?php for ($count = 0; $count < 10; $count++) : ?>
						<li class="list-group-item">
							<div class="row -0 p-0 g-0">
								<div class="col-md">Lorem, ipsum dolor <?= $count ?></div>
								<div class="col-auto">
									<i class="ti ti-grip-vertical"></i>&nbsp;
								</div>
							</div>
						</li>
					<?php endfor ?>
				</ul>
			</div>
		</div>
		<article>
			<div class="mb-3">
				<?php
				require APPPATH . 'Views/widgets/_widget_alerts_stack.php';
				?>
			</div>
			<div class="container-fluid py-3">

				<div class="row m-0" id="sortWidgets">
					<div class="col-xl-3 col-lg-4 col-12 mb-3">
						<div class="mb-3">
							<?php
							// Send instantaneous data to the view.
							require APPPATH . 'Views/widgets/_widget_employee_leaves_counter.php';
							?>
						</div>
						<div class="mb-3">
							<?php
							require APPPATH . 'Views/widgets/_widget_company_holidays_year.php';
							?>
						</div>
					</div>
					<div class="col-xl-6 col-lg-4 col-12 mb-3">
						<div class="card card-widget app-widget h-100">

						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-12 mb-3">
						<div class="mb-3">
							<?php
							require APPPATH . 'Views/widgets/_widget_employee_daily_attendance.php';
							?>
						</div>
						<div class="mb-3">
							<?php
							require APPPATH . 'Views/widgets/_widget_leaves_status.php';
							?>
						</div>
					</div>
				</div>
			</div>
		</article>
	</main>
	<?php
	//require APPPATH . 'Views/components/_common_footer.php';
	?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js" integrity="sha512-Eezs+g9Lq4TCCq0wae01s9PuNWzHYoCMkE97e2qdkYthpI0pzC3UGB03lgEHn2XM85hDOUF6qgqqszs+iXU4UA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		Sortable.create(sortApps, {
			group: 'list-1',
			handle: '.list-group-item'
		});
	</script>
	<script>
		Sortable.create(sortWidgets, {
			group: 'list-2',
			handle: '.app-widget',
			onEnd: (event) => {
				console.log("Dragged from " + event.oldIndex + " to " + event.newIndex);
			},
			store: {
				/**
				 * Save the order of elements. Called onEnd (when the item is dropped).
				 * @param {Sortable}  sortable
				 */
				set: function(sortable) {
					var order = sortable.toArray();
					console.log(order);
					// AJAX call to save the widget order for the specific app_id
				}
			}
		});
	</script>
	<?php $this->load->view('components/common/_js'); ?>
</body>

</html>
