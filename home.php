<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="nl">
	<head>
		<!-- Encoding, browser compatibility, viewport -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Website and page title -->
		<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		<link rel="shortcut icon" href="<?= $Wcms->asset('img/favicon.ico') ?>" />
		<link rel="icon" type="image/png" href="<?= $Wcms->asset('img/favicon.png') ?>" />

		<!-- Search Engine Optimization (SEO) -->
		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		<meta property="og:url" content="<?= $Wcms->getCurrentPageUrl() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

		<!-- Admin CSS -->
		<?= $Wcms->css() ?>
		
		<!-- Theme CSS -->
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>?ver=1.26">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

		<script>
		/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
		function myFunction() {
			var x = document.getElementById("mainNav");
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}
		}
		</script>
	</head>

	<body class="home">
		<!-- Admin settings panel and alerts -->
		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>


		<section id="brand-nav"> 
			<div class="inner">

				<div class="branding">
					<span class="logo"><a href="/"><img src="<?= $Wcms->asset('img/akc.svg') ?>"></a></span>
					<span class="name"><?= $Wcms->get('config', 'siteTitle') ?></span>
				</div>

				<div class="main-navigation">
					<div class="topbar">menu</div>
						<nav id="mainNav">
							<ul class="menu">
								<!-- Menu -->
								<li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
								<li class="nav-item has-submenu"><a class="nav-link" href="/bt/results.php?id=bt-28e58472-1684-4f42-9b01-04b09edcd631">Competitie</a>
									<ul class="submenu">
										<!-- SubMenu -->
										<li class="subnav-item"><a class="nav-link" href="/bt/results.php?id=bt-28e58472-1684-4f42-9b01-04b09edcd631">Uitslagen</a></li>
										<li class="subnav-item"><a class="nav-link" href="/bt/schedule.php?id=bt-28e58472-1684-4f42-9b01-04b09edcd631">Programma</a></li>
										<li class="subnav-item"><a class="nav-link" href="/bt/teamranking.php?id=bt-28e58472-1684-4f42-9b01-04b09edcd631">Stand</a></li>
										<li class="subnav-item"><a class="nav-link" href="/bt/playerranking.php?id=bt-28e58472-1684-4f42-9b01-04b09edcd631">Persoonlijk klassement</a></li>
										<li class="subnav-item"><a class="nav-link" href="/bt/periods.php?id=bt-28e58472-1684-4f42-9b01-04b09edcd631">Periode standen</a></li>
										<li class="subnav-item"><a class="nav-link" href="/bt/teams.php?id=bt-28e58472-1684-4f42-9b01-04b09edcd631">Teams & Spelers</a></li>
										<li class="subnav-item"><a class="nav-link" href="/bt/changes.php?id=bt-28e58472-1684-4f42-9b01-04b09edcd631">Herzieningen</a></li>
									</ul>
								</li>
								<li class="nav-item"><a class="nav-link" href="/speellocaties">Speellocaties</a></li>
								<li class="nav-item"><a class="nav-link" href="/reglementen">Reglementen</a></li>
								<li class="nav-item"><a class="nav-link" href="/mededelingen">Mededelingen</a></li>
							</ul>
						</nav>
						<!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
						<a href="javascript:void(0);" class="icon-menu" onclick="myFunction()">
							<i class="fa fa-bars"></i>
						</a>
					</div>
				</div> 

			</div> 
		</section><!-- /#nav-holder -->


		<section id="hero-banner"> 
			<div class="inner">
				<?= $Wcms->block('subside') ?>
				<a href="/mededelingen" class="button"><i class="fa fa-eye" aria-hidden="true"></i> Lees verder</a>
			</div>
		</section><!-- /#hero-banner-->


		<section id="page-holder">
			<div class="inner">
				<?= $Wcms->page('content') ?>
			</div>
		</section><!-- /#page-holder -->


		<section id="footer-holder">
			<div class="inner">				
				<?= $Wcms->footer() ?>
			</div>
		</section><!-- /#footer-holder -->


		<footer class="copyright">
			<div class="inner">
				<!-- Footer -->
				<div class="">© <?php echo date("Y"); ?> <?= $Wcms->get('config', 'siteTitle') ?></div>
			</div>
		</footer>


		<!-- Admin JavaScript. More JS libraries can be added below -->
		<?= $Wcms->js() ?>		

	</body>
</html>