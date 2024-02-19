<nav class="sidebar">
	<div class="sidebar-header">
		<a href="#" class="sidebar-brand">
			HRMS<span>Panel</span>
		</a>
		<div class="sidebar-toggler not-active">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="sidebar-body">
		<ul class="nav">
			<li class="nav-item nav-category">Main</li>
			<li class="nav-item">
				<a href="<?= base_url("") ?>dashboard" class="nav-link">
					<i class="link-icon" data-feather="home"></i>
					<span class="link-title">Dashboard</span>
				</a>
			</li>

			<li class="nav-item nav-category">Applications</li>
			<li class="nav-item d-none">
				<a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
					<i class="link-icon" data-feather="mail"></i>
					<span class="link-title">Email</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="emails">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("") ?>mail/inbox" class="nav-link">Inbox</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("") ?>mail/compose" class="nav-link">Compose</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item d-none">
				<a href="<?= base_url("chat") ?>" class="nav-link">
					<i class="link-icon" data-feather="message-square"></i>
					<span class="link-title">Chat</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url("calendar") ?>" class="nav-link">
					<i class="link-icon" data-feather="calendar"></i>
					<span class="link-title">Calendar</span>
				</a>
			</li>

			<li class="nav-item nav-category">Employee</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#generalOption" role="button" aria-expanded="false" aria-controls="generalOption">
					<i class="link-icon" data-feather="box"></i>
					<span class="link-title">General</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="generalOption">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("attendance") ?>" class="nav-link">Attendance</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#workOffs" role="button" aria-expanded="false" aria-controls="workOffs">
					<i class="link-icon" data-feather="navigation"></i>
					<span class="link-title">Work-Offs</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="workOffs">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("work-offs/new") ?>" class="nav-link">Request New</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("work-offs/history/all") ?>" class="nav-link">Work-Off History</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#allRequests" role="button" aria-expanded="false" aria-controls="allRequests">
					<i class="link-icon" data-feather="navigation"></i>
					<span class="link-title">Requests</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="allRequests">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("reimbursements") ?>pages/ui-components/accordion" class="nav-link">Reimbursements</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("salary-slips") ?>pages/ui-components/alerts" class="nav-link">Salary Slips</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("salary-slips") ?>pages/ui-components/alerts" class="nav-link">Comp-offs</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#salaryPayroll" role="button" aria-expanded="false" aria-controls="salaryPayroll">
					<i class="link-icon" data-feather="credit-card"></i>
					<span class="link-title">Payroll</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="salaryPayroll">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("salary-slips") ?>pages/ui-components/accordion" class="nav-link">Salary Slips</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a href="<?= base_url("employees") ?>" class="nav-link">
					<i class="link-icon" data-feather="users"></i>
					<span class="link-title">All Employees</span>
				</a>
			</li>
			
			
			<li class="nav-item nav-category">Admin</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#generalOption" role="button" aria-expanded="false" aria-controls="generalOption">
					<i class="link-icon" data-feather="box"></i>
					<span class="link-title">General</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="generalOption">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("") ?>pages/ui-components/accordion" class="nav-link">Attendance</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("") ?>pages/ui-components/alerts" class="nav-link">Alerts</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#requestAll" role="button" aria-expanded="false" aria-controls="requestAll">
					<i class="link-icon" data-feather="navigation"></i>
					<span class="link-title">All Requests</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="requestAll">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("") ?>pages/ui-components/accordion" class="nav-link">Request New</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("") ?>pages/ui-components/alerts" class="nav-link">Work-Off History</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#salaryPayroll" role="button" aria-expanded="false" aria-controls="salaryPayroll">
					<i class="link-icon" data-feather="credit-card"></i>
					<span class="link-title">Payroll</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="salaryPayroll">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("") ?>pages/ui-components/accordion" class="nav-link">Salary Slips</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("") ?>pages/ui-components/alerts" class="nav-link">Work-Off History</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a href="<?= base_url("employees") ?>" class="nav-link">
					<i class="link-icon" data-feather="users"></i>
					<span class="link-title">All Employees</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#reportsAll" role="button" aria-expanded="false" aria-controls="reportsAll">
					<i class="link-icon" data-feather="file"></i>
					<span class="link-title">Reports</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="reportsAll">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("") ?>pages/ui-components/accordion" class="nav-link">Attendance</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("") ?>pages/ui-components/alerts" class="nav-link">Leaves</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("") ?>pages/ui-components/alerts" class="nav-link">Comp-off</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("") ?>pages/ui-components/alerts" class="nav-link">Half-days</a>
						</li>
					</ul>
				</div>
			</li>


			<li class="nav-item nav-category">Account</li>
			<li class="nav-item">
				<a href="https://www.nobleui.com/html/documentation/docs" target="_blank" class="nav-link">
					<i class="link-icon" data-feather="hash"></i>
					<span class="link-title">Documentation</span>
				</a>
			</li>
		</ul>
	</div>
</nav>
<nav class="settings-sidebar">
	<div class="sidebar-body">
		<a href="#" class="settings-sidebar-toggler">
			<i data-feather="settings"></i>
		</a>
		<h6 class="text-muted mb-2">Sidebar:</h6>
		<div class="mb-3 pb-3 border-bottom">
			<div class="form-check form-check-inline">
				<input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
				<label class="form-check-label" for="sidebarLight">
					Light
				</label>
			</div>
			<div class="form-check form-check-inline">
				<input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
				<label class="form-check-label" for="sidebarDark">
					Dark
				</label>
			</div>
		</div>
		<div class="theme-wrapper">
			<h6 class="text-muted mb-2">Light Theme:</h6>
			<a class="theme-item active" href="<?= base_url("") ?>../demo1/dashboard">
				<img src="<?= base_url("assets") ?>/images/screenshots/light.jpg" alt="light theme">
			</a>
			<h6 class="text-muted mb-2">Dark Theme:</h6>
			<a class="theme-item" href="<?= base_url("") ?>../demo2/dashboard">
				<img src="<?= base_url("assets") ?>/images/screenshots/dark.jpg" alt="light theme">
			</a>
		</div>
	</div>
</nav>
