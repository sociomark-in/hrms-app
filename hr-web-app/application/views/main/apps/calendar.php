<div class="page-content">
	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">All Apps</a></li>
			<li class="breadcrumb-item active" aria-current="page">Calendar</li>
		</ol>
	</nav>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3 d-none d-md-block">
					<div class="card">
						<div class="card-body">
							<h6 class="card-title mb-4">Full calendar</h6>
							<div id='external-events' class='external-events'>
								<h6 class="mb-2 text-muted">Draggable Events</h6>
								<div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
									<div class='fc-event-main'>Birth Day</div>
								</div>
								<div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
									<div class='fc-event-main'>New Project</div>
								</div>
								<div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
									<div class='fc-event-main'>Anniversary</div>
								</div>
								<div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
									<div class='fc-event-main'>Clent Meeting</div>
								</div>
								<div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event hii'>
									<div class='fc-event-main'>Office Trip</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md col-12">
					<div class="card">
						<div class="card-body">
							<div id='fullcalendar'></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fullCalModal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 id="modalTitle1" class="modal-title"></h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"><span class="visually-hidden">close</span></button>
				</div>
				<div id="modalBody1" class="modal-body"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button class="btn btn-primary">Event Page</button>
				</div>
			</div>
		</div>
	</div>

	<div id="createEventModal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 id="modalTitle2" class="modal-title">Add event</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"><span class="visually-hidden">close</span></button>
				</div>
				<div id="modalBody2" class="modal-body">
					<form>
						<div class="mb-3">
							<label for="formGroupExampleInput" class="form-label">Example label</label>
							<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
						</div>
						<div class="mb-3">
							<label for="formGroupExampleInput2" class="form-label">Another label</label>
							<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button class="btn btn-primary">Add</button>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
<script>
	$(function() {

		// sample calendar events data
		var Draggable = FullCalendar.Draggable;

		var containerEl = document.getElementById('external-events');
		new Draggable(containerEl, {
			itemSelector: '.fc-event',
			eventData: function(eventEl) {
				return {
					title: eventEl.innerText
				};
			}
		});

		var calendarEl = document.getElementById('fullcalendar');

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
			headerToolbar: {
				left: "prev,today,next",
				center: 'title',
				right: 'dayGridMonth,listMonth'
			},
			editable: true,
			droppable: true, // this allows things to be dropped onto the calendar
			fixedWeekCount: true,
			// height: 300,
			initialView: 'dayGridMonth',
			timeZone: 'UTC',
			hiddenDays: [],
			navLinks: 'true',
			// weekNumbers: true,
			// weekNumberFormat: {
			//   week:'numeric',
			// },
			dayMaxEvents: 2,
			events: [],
			eventSources: [calendarEvents, birthdayEvents, holidayEvents, discoveredEvents, meetupEvents, otherEvents],
			drop: function(info) {
				console.log(info);
				// remove the element from the "Draggable Events" list
				// info.draggedEl.parentNode.removeChild(info.draggedEl);
			},
			eventResize: function(info){
				var eventObj = info.event;
				console.log(info);
			},
			eventClick: function(info) {
				var eventObj = info.event;
				console.log(info);
				$('#modalTitle1').html(eventObj.title);
				$('#modalBody1').html(eventObj._def.extendedProps.description);
				$('#eventUrl').attr('href', eventObj.url);
				$('#fullCalModal').modal("show");
			},
			dateClick: function(info) {
				$("#createEventModal").modal("show");
				console.log(info);
			},
		});

		calendar.render();


	});
</script>
