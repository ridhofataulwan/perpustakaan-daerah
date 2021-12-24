<?= $this->extend('Auth/Templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card o-hidden border-0 shadow-lg my-5 mx-0">
				<div class="card-body p-0">
					<div class="row">
						<div class="col-md-7">
							<img src="img/bg-book.jpg" style="height: 100%; width: 100%; object-fit: fill" alt="">
						</div>
						<div class="col-md-5">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4"><?= lang('Auth.register') ?></h1>
								</div>
								<?= view('Myth\Auth\Views\_message_block') ?>
								<form action="<?= route_to('register') ?>" method="post" class="user">
									<?= csrf_field() ?>
									<div class="form-group">
										<input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
									</div>
									<div class="form-group">
										<input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" aria-describedby="emailHelp">
										<small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
									</div>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
										</div>
										<div class="col-sm-6">
											<input type="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
										</div>
									</div>
									<button class="btn btn-primary btn-user btn-block" type="submit">
										<?= lang('Auth.register') ?>
									</button>
								</form>
								<hr>
								<!-- <div class="text-center">
									<a class="medium" href="#">Forgot Password?</a>
								</div> -->
								<div class="text-center">
									<a href="<?= route_to('login') ?>">
										Already have an account? <?= lang('Auth.signIn') ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection(''); ?>