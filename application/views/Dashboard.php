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
	<title>CI Template · Admin</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('assets/libs/bootswatch/united/bootstrap.min.css'); ?>" rel="stylesheet">

	<style>
		body {
			min-height: 75rem;
			padding-top: 4.5rem;
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
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<a class="navbar-brand" href="#">CI Template</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
			aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
			<!--
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#">Disabled</a>
			</li>
			-->
			<?php if ($this->session->userdata('level') === '1'): ?>
				<li class="nav-item active">
					<a class="nav-link" href="#">Dashboard</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Posts</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Pages</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Media</a>
				</li>

			<?php elseif ($this->session->userdata('level') === '2'): ?>
				<li class="nav-item active">
					<a class="nav-link" href="#">Dashboard</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Pages</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Media</a>
				</li>

			<?php else: ?>
				<li class="nav-item active">
					<a class="nav-link" href="#">Dashboard</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Posts</a>
				</li>
			<?php endif; ?>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('login/destroy'); ?>">Sign Out</a>
			</li>
		</ul>
	</div>
</nav>

<main role="main" class="container">
	<div class="jumbotron">
		<h1>Welcome Back <?php echo $this->session->userdata('email');?></h1>
		<p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it
			will remain fixed to the top of your browser’s viewport.</p>
		<a class="btn btn-lg btn-primary" href="#" role="button">View navbar docs &raquo;</a>
	</div>
</main>

<script src="<?php echo base_url('assets/libs/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/libs/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
