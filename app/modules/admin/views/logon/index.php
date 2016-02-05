<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Admin WPanel | Login</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- bootstrap 3.3.4 -->
		<link href="<?= base_url('lib/css') ?>/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- Theme style -->
		<link href="<?= base_url('lib/css') ?>/AdminLTE.min.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="login-page">
		<div class="login-box">
			<div class="login-logo">
				<b>Admin</b>WPanel
			</div><!-- /.login-logo -->
			<div class="login-box-body">
				<p class="login-box-msg">Faça o login para acessar</p>
				<?php
				$msg_sistema = $this->session->flashdata('msg_auth');
				if ($msg_sistema)
					echo alerts($msg_sistema, 'warning', true);
				echo form_open('admin/login', array('role' => 'form'));
				?>
					<div class="form-group has-feedback">
						<input type="text" name="email" class="form-control" placeholder="Nome de usuário ou email"/>
						<?= form_error('email'); ?>
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" name="password" class="form-control" placeholder="Senha"/>
						<?= form_error('password'); ?>
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<div class="row">
						<div class="col-xs-8">       
							<?= anchor('admin/recovery', 'Esqueci minha senha'); ?>                 
						</div><!-- /.col -->
						<div class="col-xs-4">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
						</div><!-- /.col -->
					</div>
				<?= form_close(); ?>
			</div><!-- /.login-box-body -->
		</div><!-- /.login-box -->
		<!-- jQuery 2.1.4 -->
		<script src="<?= base_url('lib/plugins') ?>/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- bootstrap 3.3.2 JS -->
		<script src="<?= base_url('lib/js') ?>/bootstrap.min.js" type="text/javascript"></script>
	</body>
</html>