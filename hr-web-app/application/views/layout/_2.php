<!-- partial:partials/_footer.html -->
<?php $this->load->view('components/theme/partials/_footer'); ?>
<!-- partial -->

</div>
</div>

<!-- core:js -->
<script src="<?= base_url("assets") ?>/vendors/core/core.js"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="<?= base_url("assets") ?>/vendors/flatpickr/flatpickr.min.js"></script>
<script src="<?= base_url("assets") ?>/vendors/apexcharts/apexcharts.min.js"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="<?= base_url("assets") ?>/vendors/feather-icons/feather.min.js"></script>
<script src="<?= base_url("assets") ?>/js/template.js"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="<?= base_url("assets") ?>/js/dashboard-light.js"></script>
<!-- End custom js for this page -->

<?php
if ($this->session->userdata('first_user')) :
?>
	<script>
		function app_tour() {
			introJs().setOptions({
				steps: [{
						title: "Welcome Abord!",
						intro: "Take a tour to your Dashboard!"
					},
					{
						element: document.querySelector('.intro__profile'),
						intro: "This is where you'll see the status of your profile. Don't forget to make it upto 100%."
					},
					{
						element: document.querySelector('.intro__days'),
						intro: "This is where you'll get to know your attendace and performance at a glance."
					},
					{
						element: document.querySelector('.intro__leaves'),
						intro: "This is where you'll get to know who's form you team or from Company are on leave."
					},
					{
						element: document.querySelector('.intro__feed'),
						intro: "This is the common announcements board. Announcements can either be made by HR and Admin."
					},
					{
						element: document.querySelector('.intro__events'),
						intro: "This is where you'll get to know the intra-premises events happening in our office."
					},
					{
						element: document.querySelector('.intro__holidays'),
						intro: "This is where you'll get to know the upcoming holidays."
					},
					{
						title: "That's it for now!",
						intro: "I'll leave it on to you to explore this dashboard more."
					},
				]
			}).start();
		}
		$(window).ready(() => {
			app_tour();
		})
		$("#startTour").on("click", () => {
			app_tour();
		})
	</script>
<?php endif ?>

</body>

</html>
