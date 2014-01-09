<?php
$page = 'project_home _dev';
$client = 'Grupo Consultores';
$project = "Blog de salud mental"
 ?>
<!DOCTYPE html>
<?php include 'incl/_cc.php'; ?>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title><?php echo $client . ' - ' . $project; ?></title>
		<?php include 'incl/_head.php'; ?>
	</head>
	<body class="<?php echo $page; ?> ">
		<div class="page_container">

			<?php include 'incl/_header.php'; ?>

			<!-- Main content -->
			<section id="future" class="view">
				<div class="wrapper">



				</div>
			</section>

			<section id="present" class="view">
				<div class="wrapper">

					<ul class="timeline">

						<li class="task">
							<div class="status pending">Pending</div>
							<div class="date js_timestamp">
								<time class="time" datetime="2014-01-15">15-01-2014</time>
							</div>
							<div class="task_data">
								<h2 class="title">Entrega de prototipos</h2>
								<p class="description">Primera entrega de prototipos</p>
								<ul class="actions">
									<li class="item"><a href="" class="download">Descargar</a></li>
									<li class="item"><a href="">Ver online</a></li>
								</ul>
							</div>
						</li>

						<li class="task">
							<div class="status checked">Ok</div>
							<div class="date js_timestamp">
								<time class="time" datetime="2014-01-08">08-01-2014</time>
							</div>
							<div class="task_data">
								<h2 class="title">Entrega de prototipos</h2>
								<p class="description">Primera entrega de prototipos</p>
								<ul class="actions">
									<li class="item"><a href="" class="download">Descargar</a></li>
									<li class="item"><a href="">Ver online</a></li>
								</ul>
							</div>
						</li>

					</ul>

				</div>
			</section>

			<?php include 'incl/_footer.php'; ?>

		</div>
		<?php include 'incl/_js.php'; ?>
		<?php include 'incl/_tag.php'; ?>

		<?php include 'incl/_popups.php'; ?>
	</body>
</html>
