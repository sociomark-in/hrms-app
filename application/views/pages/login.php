<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php require_once APPPATH . "views/components/common/_head.php"; ?>
</head>

<body>
	<?php require_once APPPATH . "views/components/common/_nav_short.php"; ?>
	<main>
		<div class="container">
			<div class="row m-0 justify-content-center">
				<div class="col-xxl-3 col-xl-4 col-lg-5 col-md-7 col-11">
					<div class="py-3 mt-5">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-center mb-3">
									<div class="app_logo" style="--logo-width: 70px;">
										<img src="<?= base_url() ?>" alt="<?= PRODUCT_NAME ?>">
									</div>
								</div>
								<div class="mb-4">
									<div class="mb-3">
										<label for="" class="form-label">Username</label>
										<input type="text" class="form-control">
									</div>
									<div class="mb-3">
										<label for="" class="form-label">Password</label>
										<div class="input-group">
											<input type="password" class="form-control" id="inputPassword">
											<span class="input-group-text paswd_show" aria-controls="#inputPassword"><i class="ti ti-eye"></i></span>
										</div>
									</div>
									<div class="mb-2">
										<button type="submit" class="btn btn-block btn-primary">Login</button>
									</div>
									<div class="mb-2 d-none">
										<button type="submit" class="btn btn-block btn-grey">Sign Up with <?= PRODUCT_NAME ?></button>
									</div>
								</div>
								<div class="card-footer">
									<div class="text-center">
										<text>Not a Customer Yet? <a href="<?= base_url('register') ?>" class="text-primary">Sign Up</a></text>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php require_once APPPATH . "views/components/common/_footer.php"; ?>
	<?php require_once APPPATH . "views/components/common/_js.php"; ?>
	<script>
		$(".paswd_show").each((index, element) => {
			$(element).on('mousedown', (event) => {
				$($(element).attr("aria-controls")).attr('type', 'text');
				$(element).html('<i class="ti ti-eye-off"></i>');
			})
			$(element).on('mouseup', (event) => {
				$($(element).attr("aria-controls")).attr('type', 'password');
				$(element).html('<i class="ti ti-eye"></i>');
			})

		})
	</script>
</body>

</html>
