<?php

$page = 'login _dev';
include 'incl/_settings.php';

?>
<!DOCTYPE html>
<?php include 'incl/_cc.php'; ?>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title><?php echo 'Login - ' . $client; ?></title>
		<?php include 'incl/_head.php'; ?>
	</head>
	<body class="<?php echo $page; ?> ">
		<div class="page_container">

			<!-- Main content -->
			<section class="project_login">
				<div class="wrapper">
					<form action="" class="form" method="post" novalidate>
						<div class="row">
							<label class="label" for="ph_password">Type password ad hit enter</label>
							<input type="password" class="field field_password" name="ph_password" id="ph_password" data-new-placeholder="Type password ad hit enter" placeholder="Type password ad hit enter" />
						</div>
						<div class="row client">
							<h2 class="title"><?php echo $client; ?></h2>
							<a href="" class="request_access">Request access</a>
						</div>
					</form>
				</div>
			</section>

			<?php include 'incl/_footer.php'; ?>

		</div>
		<?php include 'incl/_js.php'; ?>
		<?php include 'incl/_tag.php'; ?>

	</body>
</html>
