<div class="page-content">
	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Attendance & Leaves</li>
		</ol>
	</nav>
	<div class="row">
		<div class="col-12 grid-margin">
			<div class="row m-0 justify-content-between">
				<div class="col-auto">
					<h3>Timing, Attendance & Leaves</h3>
				</div>
				<div class="col-auto">
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
							Apply New
						</button>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#newLeaveModal">Leave</a></li>
							<li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#newWFHModal">Work From Home</a></li>
							<li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#newOnDutyModal">On Duty</a></li>
							<li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#newCompOffModal">Comp Off</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xxl-10 col-xl-9 col-12">
			<div class="row">
				<div class="col-xxl-2 col-xl-3 col-lg-6 col-12 grid-margin stretch-card">
					<div class="card intro__days">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-baseline">
								<h6 class="card-title mb-0">Working Days</h6>
							</div>
							<div class="row">
								<div class="col-12">
									<h3 class="mb-1">24/30</h3>
									<div class="d-flex align-items-baseline mb-2">
										<p class="text-success">
											<span>+3.3%</span>
											<i data-feather="arrow-up" class="icon-sm mb-1"></i>
										</p>
									</div>
									<div class="">
										<a href="<?= base_url("calendar") ?>">View Details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-2 col-xl-3 col-lg-6 col-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-baseline">
								<h6 class="card-title mb-0">Leaves</h6>
							</div>
							<div class="row">
								<div class="col-12">
									<h3 class="mb-1">03/03</h3>
									<div class="d-flex align-items-baseline mb-2">
										<p class="text-success">
											<span>+3.3%</span>
											<i data-feather="arrow-up" class="icon-sm mb-1"></i>
										</p>
									</div>
									<div class="">
										<a href="<?= base_url("calendar") ?>">View Details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-2 col-xl-3 col-lg-6 col-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-baseline">
								<h6 class="card-title mb-0">Half Days</h6>
							</div>
							<div class="row">
								<div class="col-12">
									<h3 class="mb-1">01/01</h3>
									<div class="d-flex align-items-baseline mb-2">
										<p class="text-success">
											<span>+3.3%</span>
											<i data-feather="arrow-up" class="icon-sm mb-1"></i>
										</p>
									</div>
									<div class="">
										<a href="<?= base_url("calendar") ?>">View Details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-2 col-xl-3 col-lg-6 col-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-baseline">
								<h6 class="card-title mb-0">Work From Home</h6>
							</div>
							<div class="row">
								<div class="col-12">
									<h3 class="mb-1">02/02</h3>
									<div class="d-flex align-items-baseline mb-2">
										<p class="text-success">
											<span>+3.3%</span>
											<i data-feather="arrow-up" class="icon-sm mb-1"></i>
										</p>
									</div>
									<div class="">
										<a href="<?= base_url("calendar") ?>">View Details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-2 col-xl-3 col-lg-6 col-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-baseline">
								<h6 class="card-title mb-0">Comp Offs</h6>
							</div>
							<div class="row">
								<div class="col-12">
									<h3 class="mb-1">02/02</h3>
									<div class="d-flex align-items-baseline mb-2">
										<p class="text-success">
											<span>+3.3%</span>
											<i data-feather="arrow-up" class="icon-sm mb-1"></i>
										</p>
									</div>
									<div class="">
										<a href="<?= base_url("calendar") ?>">View Details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-2 col-xl-3 col-lg-6 col-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-baseline">
								<h6 class="card-title mb-0">On Duty</h6>
							</div>
							<div class="row">
								<div class="col-12">
									<h3 class="mb-1">10</h3>
									<div class="d-flex align-items-baseline mb-2">
										<p class="text-success">
											<span>+3.3%</span>
											<i data-feather="arrow-up" class="icon-sm mb-1"></i>
										</p>
									</div>
									<div class="">
										<a href="<?= base_url("calendar") ?>">View Details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12 grid-margin">
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4>Punch Time History</h4>
							</div>
							<table id="example" class="display table table-striped table-sm" style="width:100%">
								<thead>
									<tr>
										<th>Date</th>
										<th>In</th>
										<th>Out</th>
										<th>Hours</th>
									</tr>
								</thead>
								<tbody>
									<?php for ($i = 0; $i < 100; $i++) : ?>
										<tr>
											<td>2011-04-25</td>
											<td>10:00:45</td>
											<td>10:00:45</td>
											<td>61</td>
										</tr>
										<tr>
											<td>2011-07-25</td>
											<td>10:00:45</td>
											<td>10:00:45</td>
											<td>63</td>
										</tr>
										<tr>
											<td>2009-01-12</td>
											<td>10:00:45</td>
											<td>10:00:45</td>
											<td>66</td>
										</tr>
									<?php endfor ?>
								</tbody>
							</table>
						</div>
					</div>
					<script>
						new DataTable('#example', {
							dom: 'lrtip'
						});
					</script>
				</div>
				<div class="col-lg-8 col-md-6 col-12 grid-margin">
					<div class="row">
						<div class="col-12 grid-margin">
							<div class="card">
								<div class="card-body">
									<div class="card-title">
										<h4>Work-Off History</h4>
									</div>
									<div id='fullcalendar'></div>
								</div>
							</div>
						</div>
					</div>
					<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
					<script>
						$(function() {

							// sample calendar events data

							var Draggable = FullCalendar.Draggable;
							var calendarEl = document.getElementById('fullcalendar');
							var containerEl = document.getElementById('external-events');

							var curYear = moment().format('YYYY');
							var curMonth = moment().format('MM');

							// Calendar Event Source
							var calendarEvents = {
								id: 1,
								backgroundColor: 'rgba(1,104,250, .15)',
								borderColor: '#0168fa',
								events: [{
									id: '1',
									start: curYear + '-' + curMonth + '-08T08:30:00',
									end: curYear + '-' + curMonth + '-08T13:00:00',
									title: 'Google Developers Meetup',
									description: 'In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis az pede mollis...'
								}, {
									id: '2',
									start: curYear + '-' + curMonth + '-10T09:00:00',
									end: curYear + '-' + curMonth + '-10T17:00:00',
									title: 'Design/Code Review',
									description: 'In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis az pede mollis...'
								}, {
									id: '3',
									start: curYear + '-' + curMonth + '-13T12:00:00',
									end: curYear + '-' + curMonth + '-13T18:00:00',
									title: 'Lifestyle Conference',
									description: 'Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi...'
								}, {
									id: '4',
									start: curYear + '-' + curMonth + '-15T07:30:00',
									end: curYear + '-' + curMonth + '-15T15:30:00',
									title: 'Team Weekly Trip',
									description: 'In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis az pede mollis...'
								}, {
									id: '5',
									start: curYear + '-' + curMonth + '-17T10:00:00',
									end: curYear + '-' + curMonth + '-19T15:00:00',
									title: 'DJ Festival',
									description: 'In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis az pede mollis...'
								}, {
									id: '6',
									start: curYear + '-' + curMonth + '-08T13:00:00',
									end: curYear + '-' + curMonth + '-08T18:30:00',
									title: 'Carl Henson\'s Wedding',
									description: 'In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis az pede mollis...'
								}]
							};

							// Birthday Events Source
							var birthdayEvents = {
								id: 2,
								backgroundColor: 'rgba(16,183,89, .25)',
								borderColor: '#10b759',
								events: [{
										id: '7',
										start: curYear + '-' + curMonth + '-01T18:00:00',
										end: curYear + '-' + curMonth + '-01T23:30:00',
										title: 'Jensen Birthday',
										description: 'In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis az pede mollis...'
									},
									{
										id: '8',
										start: curYear + '-' + curMonth + '-21T15:00:00',
										end: curYear + '-' + curMonth + '-21T21:00:00',
										title: 'Carl\'s Birthday',
										description: 'In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis az pede mollis...'
									},
									{
										id: '9',
										start: curYear + '-' + curMonth + '-23T15:00:00',
										end: curYear + '-' + curMonth + '-23T21:00:00',
										title: 'Yaretzi\'s Birthday',
										description: 'In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis az pede mollis...'
									}
								]
							};


							var holidayEvents = {
								id: 3,
								backgroundColor: 'rgba(241,0,117,.25)',
								borderColor: '#f10075',
								events: [{
										id: '10',
										start: curYear + '-' + curMonth + '-04',
										end: curYear + '-' + curMonth + '-06',
										title: 'Feast Day'
									},
									{
										id: '11',
										start: curYear + '-' + curMonth + '-26',
										end: curYear + '-' + curMonth + '-27',
										title: 'Memorial Day'
									},
									{
										id: '12',
										start: curYear + '-' + curMonth + '-28',
										end: curYear + '-' + curMonth + '-29',
										title: 'Veteran\'s Day'
									}
								]
							};

							var discoveredEvents = {
								id: 4,
								backgroundColor: 'rgba(0,204,204,.25)',
								borderColor: '#00cccc',
								events: [{
									id: '13',
									start: curYear + '-' + curMonth + '-17T08:00:00',
									end: curYear + '-' + curMonth + '-18T11:00:00',
									title: 'Web Design Workshop Seminar'
								}]
							};

							var meetupEvents = {
								id: 5,
								backgroundColor: 'rgba(91,71,251,.2)',
								borderColor: '#5b47fb',
								events: [{
										id: '14',
										start: curYear + '-' + curMonth + '-03',
										end: curYear + '-' + curMonth + '-05',
										title: 'UI/UX Meetup Conference'
									},
									{
										id: '15',
										start: curYear + '-' + curMonth + '-18',
										end: curYear + '-' + curMonth + '-20',
										title: 'Angular Conference Meetup'
									}
								]
							};

							var otherEvents = {
								id: 6,
								backgroundColor: 'rgba(253,126,20,.25)',
								borderColor: '#fd7e14',
								events: [{
										id: '16',
										start: curYear + '-' + curMonth + '-06',
										end: curYear + '-' + curMonth + '-08',
										title: 'My Rest Day'
									},
									{
										id: '17',
										start: curYear + '-' + curMonth + '-29',
										end: curYear + '-' + curMonth + '-31',
										title: 'My Rest Day'
									}
								]
							};


							// initialize the calendar
							var calendar = new FullCalendar.Calendar(calendarEl, {
								title: "Text",
								headerToolbar: {
									left: "prev,today,next",
									center: 'title',
									right: 'dayGridMonth,listMonth'
								},
								editable: false,
								droppable: false, // this allows things to be dropped onto the calendar
								fixedWeekCount: true,
								initialView: 'dayGridMonth',
								timeZone: 'UTC',
								hiddenDays: [],
								navLinks: false,
								// weekNumbers: true,
								// weekNumberFormat: {
								//   week:'numeric',
								// },
								dayMaxEvents: 2,
								events: [],
								eventSources: [calendarEvents, birthdayEvents, holidayEvents, discoveredEvents, meetupEvents, otherEvents],
							});

							calendar.render();


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

<div class="modal fade" id="newLeaveModal" tabindex="-1" aria-labelledby="newLeaveModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="row">
			<div class="col-lg-7 col-md col-12 grid-margin">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="newLeaveModalLabel">New Leave</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label for="" class="form-label">Leave Type</label>
							<select name="" id="" class="form-select">
								<option value="">Full Day</option>
								<option value="">Half Day (First Half)</option>
								<option value="">Half Day (Second Half)</option>
							</select>
						</div>
						<div class="mb-3">
							<label for="" class="form-label">From Date - To Date</label>
							<input type="text" class="form-control" name="leave_dates">
						</div>
						<div class="mb-3">
							<label for="" class="form-label">Reason to Apply</label>
							<textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>
						</div>
						<div class="mb-3"></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Apply for Leave</button>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-auto col-12 grid-margin">
				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<h5>Quick Insights</h5>
						</div>
						<table class="table table-striped">
							<tr>
								<td>Leaves</td>
								<td>03</td>
							</tr>
							<tr>
								<td>Work From Home</td>
								<td>03</td>
							</tr>
							<tr>
								<td>Comp Offs</td>
								<td>03</td>
							</tr>
							<tr>
								<td>On Duty</td>
								<td>20</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="newWFHModal" tabindex="-1" aria-labelledby="newWFHModalLabel" aria-hidden="true">
	<div class="modal-dialog  modal-lg">
		<div class="row">
			<div class="col-lg-7 col-md col-12 grid-margin">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="newWFHModalLabel">New WFH</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label for="" class="form-label">From Date - To Date</label>
							<input type="text" class="form-control" name="wfh_date">
						</div>
						<div class="mb-3">
							<label for="" class="form-label">Reason to Apply</label>
							<textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>
						</div>
						<div class="mb-3"></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Apply for WFH</button>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-auto col-12 grid-margin">
				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<h5>Quick Insights</h5>
						</div>
						<table class="table table-striped">
							<tr>
								<td>Leaves</td>
								<td>03</td>
							</tr>
							<tr>
								<td>Work From Home</td>
								<td>03</td>
							</tr>
							<tr>
								<td>Comp Offs</td>
								<td>03</td>
							</tr>
							<tr>
								<td>On Duty</td>
								<td>20</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="newCompOffModal" tabindex="-1" aria-labelledby="newCompOffModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="row">
			<div class="col-lg-7 col-md-auto col-12 grid-margin">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="newCompOffModalLabel">New Comp. Off</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Apply for Comp. Off</button>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-auto col-12 grid-margin">
				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<h5>Quick Insights</h5>
						</div>
						<table class="table table-striped">
							<tr>
								<td>Leaves</td>
								<td>03</td>
							</tr>
							<tr>
								<td>Work From Home</td>
								<td>03</td>
							</tr>
							<tr>
								<td>Comp Offs</td>
								<td>03</td>
							</tr>
							<tr>
								<td>On Duty</td>
								<td>20</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$('input[name="leave_dates"]').daterangepicker({
		"minDate": moment().add(2, 'days'),
		"maxSpan": {
			"days": 3
		},

		isInvalidDate: function(date) {
			if (date.day() == 0 || date.day() == 6) {
				return true;
			} else {
				return false;
			}
		}
	});
	$('input[name="compoff_dates"]').daterangepicker({
		"maxDate": moment(),
		"maxSpan": {
			"days": 2
		},
	});
	$('input[name="wfh_date"]').daterangepicker({
		"minDate": moment(),
		"maxSpan": {
			"days": 1
		},
	});
</script>
