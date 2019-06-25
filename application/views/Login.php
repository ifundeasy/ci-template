<?php
/**
 * Created by IntelliJ IDEA.
 * User: rappresent
 * Date: 25/06/19
 * Time: 4.26 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<title>CI Template · Bootstrap</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('assets/libs/bootswatch/united/bootstrap.min.css'); ?>" rel="stylesheet">

	<style>
		html,
		body {
			height: 100%;
		}

		body {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: center;
			align-items: center;
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;
		}

		.form-signin {
			width: 100%;
			max-width: 330px;
			padding: 15px;
			margin: auto;
		}
		.form-signin .checkbox {
			font-weight: 400;
		}
		.form-signin .form-control {
			position: relative;
			box-sizing: border-box;
			height: auto;
			padding: 10px;
			font-size: 16px;
		}
		.form-signin .form-control:focus {
			z-index: 2;
		}
		.form-signin input[type="email"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}

		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
</head>
<body class="text-center">
<form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
	<img class="mb-4" src="<?php echo base_url('assets/img/bootstrap-solid.svg'); ?>" alt="" width="72" height="72">
	<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

	<p>
		<?php echo $this->session->flashdata('msg');?>
	</p>

	<label for="username" class="sr-only">Email address</label>
	<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
	<label for="password" class="sr-only">Password</label>
	<input type="password" name="password" class="form-control" placeholder="Password" required>
	<div class="checkbox mb-3">
		<label>
			<input type="checkbox" value="remember-me"> Remember me
		</label>
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	<p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>

<script src="<?php echo base_url('assets/libs/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/bootstrap/js/bootstrap.min.js'); ?>"></script>

</body>
</html>
