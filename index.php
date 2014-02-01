<?php
session_start();
include 'incl/_config.php';
check_logged();

$page = 'project_page';

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
			<section id="future" class="future view">
				<div class="wrapper">
					<ul class="timetravel buttons">
						<li class="item"><button class="button present js_view_present">Volver al presente</button></li>
						<li class="item"><button class="button future js_view_future">Ver el futuro</button></li>
					</ul>

					<ul class="timeline">
						<li class="task">
							<div class="status">Pending</div>
							<div class="date js_timestamp">
								<time class="time" datetime="15-02-2014">15-02-2014</time>
							</div>
							<div class="task_data">
								<h2 class="title">Entrega de prototipos</h2>
								<p class="description">Primera entrega de prototipos</p>
								<ul class="actions">
									<li class="action"><a href="" class="download">Descargar</a></li>
									<li class="action"><a href="">Ver online</a></li>
								</ul>
							</div>
						</li>
						<li class="task no_date">
							<div class="status">Pending</div>
							<div class="date js_timestamp">
								<time class="time" datetime="15-01-2014">15-01-2014</time>
							</div>
							<div class="task_data">
								<h2 class="title">Entrega de prototipos</h2>
								<p class="description">Primera entrega de prototipos</p>
								<ul class="actions">
									<li class="action"><a href="" class="download">Descargar</a></li>
									<li class="action"><a href="">Ver online</a></li>
								</ul>
							</div>
						</li>
					</ul>

				</div>
			</section>

			<section id="present" class="present view">
				<div class="wrapper">

					<ul class="timeline">

						<li class="task">
							<div class="status pending">Pending</div>
							<div class="date js_timestamp">
								<time class="time" datetime="01-02-2014 15:45">15-01-2014</time>
							</div>
							<div class="task_data">
								<h2 class="title">Entrega de prototipos</h2>
								<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, quisquam temporibus ipsam nisi vero mollitia officia dolor odio quos adipisci consequatur repudiandae dolorem magni perferendis error. Optio, totam animi eum.</p>
								<ul class="actions">
									<li class="action"><a href="" class="download">Descargar</a></li>
									<li class="action"><a href="">Ver online</a></li>
									<li class="action"><a href="">[Layervault] Repositorio</a></li>
								</ul>
							</div>
						</li>
						<li class="task">
							<div class="status checked">Ok</div>
							<div class="date js_timestamp">
								<time class="time" datetime="08-01-2014">08-01-2014</time>
							</div>
							<div class="task_data">
								<h2 class="title">Entrega de prototipos</h2>
								<p class="description">Primera entrega de prototipos</p>
								<ul class="actions">
									<li class="action"><a href="" class="download">Descargar</a></li>
									<li class="action"><a href="">Ver online</a></li>
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

	</body>
</html>
