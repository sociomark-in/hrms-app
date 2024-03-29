<div class="page-content">
	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Attendance</li>
		</ol>
	</nav>
	<div class="row">
		<div class="col-lg-3 col-md-6 col-12 grid-margin">
			<div class="card">
				<div class="card-body">
					<table id="example" class="display table" style="width:100%">
						<thead>
							<tr>
								<th>Date</th>
								<th>Hours</th>
							</tr>
						</thead>
						<tbody>
							<?php for ($i = 0; $i < 100; $i++) : ?>
								<tr>
									<td>2011-04-25</td>
									<td>61</td>
								</tr>
								<tr>
									<td>2011-07-25</td>
									<td>63</td>
								</tr>
								<tr>
									<td>2009-01-12</td>
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
		<div class="col-lg-9 col-md-6 col-12 grid-margin">
			<div class="card- card-body">
				<div id='fullcalendar'></div>
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
							left: false,
							center: 'title',
							right: false
						},
						editable: false,
						droppable: false, // this allows things to be dropped onto the calendar
						fixedWeekCount: true,
						height: 500,
						initialView: 'listMonth',
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
