$.fn.stopwatch = function (action) {
	var plugin = this;

	plugin.options = {};
	plugin.duration = {};

	// Private attributes
	const displayMode = {
		IN_SECONDS: 0,
		IN_MINUTES: 1,
		IN_HOURS: 2,
		FULL: 3,
		MAX_INDEX: 3,
	};

	const eventNames = ["second", "minute", "hour"];

	var defaultSettings = {
		displayMode: displayMode.FULL,
		enableEvents: false,
		autoStart: true,
		useHours: true,
		minuteIndicator: "",
		secondIndicator: "",
		separator: ":",
		leadingZeros: 2,
		initHours: 0,
		initMinutes: 0,
		initSeconds: 0,
	};

	plugin.options = defaultSettings;

	var init = {
		START_TIME: moment().format("HH:mm"),
	};

	var isStopped;
	var currentTime;

	var startTimer = function (fromTime) {
		const today = new Date();
		console.log(fromTime);
		let h = today.getHours();
		let m = today.getMinutes();
		let s = today.getSeconds();

		let H = parseInt(fromTime.split(":")[0]);
		let M = parseInt(fromTime.split(":")[1]);
		let S = parseInt(fromTime.split(":")[2]);

		// let stopwatchTime = (m- M) + ":" + (s - S);
		if (s == 60) {
			m++;
			s = 0;
		}

		if (m == 60) {
			h++;
			m = 0;
			s = 0;
		}
		plugin.html(
			String(h - H).padStart(2, "0") +
				plugin.options.separator +
				String(m - M).padStart(2, "0")
		);
	};

	switch (action) {
		case "start":
			// init.START_TIME = plugin.currentTime;

			setInterval(() => {
				startTimer(init.START_TIME);
			}, 1000);
			break;

		case "init":
			console.log(init.START_TIME);
			plugin.html(init.START_TIME);
			break;

		default:
			return this;
			break;
	}

	// plugin.start = function () {
	// 	isStopped = true;
	// 	// plugin.currentTime =
	// 	setTimeout(() => {
	// 		startTimer(init.START_TIME)
	// 	}, 1000);
	// }
};
