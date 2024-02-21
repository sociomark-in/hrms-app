<div class="page-content">
	<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
		<div>
			<h4 class="mb-3 mb-md-0">Welcome to HRMSPanel</h4>
		</div>
	</div>

	<div class="row">
		<div class="col-xl-9 col-md-8 col-12">
			<div class="row">
				<div class="col-12 grid-margin">
					<div class="card">
						<div id="example-basic">
							<h3>Keyboard</h3>
							<section>
								<p>Try the keyboard navigation by clicking arrow left or right!</p>
							</section>
							<h3>Effects</h3>
							<section>
								<p>Wonderful transition effects.</p>
							</section>
							<h3>Pager</h3>
							<section>
								<p>The next and previous buttons help you to navigate through your content.</p>
							</section>
						</div>
					</div>
				</div>
				<div class="col-12 grid-margin">
					<div class="card">
						<div class="card-body"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-4 col-12">
			<div class="row">
				<div class="col-12 grid-margin">
					<div class="card">
						<div class="card-body"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.4/dist/jquery-steps.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.4/dist/jquery-steps.min.js"></script>

<div class="modal modal-lg fade" id="onboardingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="onboardingModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="onboardingModalLabel">Initial Onboarding</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(() => {
		$("#onboardingModal").modal("show", true);

		$("#example-basic").steps({
			headerTag: "h3",
			bodyTag: "section",
			transitionEffect: "slideLeft",
			autoFocus: true
		});
	})
</script>
