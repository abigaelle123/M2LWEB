<?php include 'Core/helper.class.php'; ?>

<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>M2L</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?= BASE_URL; ?>/Views/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
            <?php
            if($_SESSION['auth']['level']== 1)
            {
                echo('<h1 id="logo"><a href="index.html">ADMIN M2L</a></h1>');
            }
            elseif ($_SESSION['auth']['level'] == 2)
            {
                echo('<h1 id="logo"><a href="index.html">CHEF M2L</a></h1>');
            }
            else
            {
                echo('<h1 id="logo"><a href="index.html">SALARIE M2L</a></h1>');
            }
           
            ?>   
                    <nav id="nav">
                        <ul>
                    <li>
                    <?php
                    if($_SESSION['auth']['level']== 1 || $_SESSION['auth']['level']== 2)
                    {
                        if ($_SESSION['auth']['level'] == 1)
                        {
                            echo helper::menu('admin','Accueil');
                        }
                        elseif ($_SESSION['auth']['level'] == 2)
                        {
                            echo helper::menu('chef','Accueil');
                        }
                        echo helper::menu('user','Gestion utilisateurs');
                        echo helper::menu('prestataire', 'Ajouter un Prestataire');
                        echo helper::menu('formation','Ajouter une Formation');
                    }
                    else
                    {
                        echo helper::menu('accueil','Accueil');
                    }
                        echo helper::menu('formation','Formations');
                        echo helper::menu('calendar','Calendrier');
                    ?>
                </li>
                    
                    <li><a href="<?= BASE_URL; ?>/disconnect" class="button special">Deconnexion</a></li>      
                        </ul>
                    </nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Bienvenue</h2>
							<p>Vous pouvez consulter les formations en ligne. </p>
						</header>
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
			<section id="one" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2><?= $title;  ?></h2>
                            <?= $content; ?>
                        </header>
					</div>
                    <a href="#two" class="goto-next scrolly">Next</a>
				</section>


			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/pic03.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Interdum amet non magna accumsan</h2>
							<p>Nunc commodo accumsan eget id nisi eu col volutpat magna</p>
						</header>
						<p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/pic04.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Interdum felis blandit praesent sed augue</h2>
							<p>Accumsan integer ultricies aliquam vel massa sapien phasellus</p>
						</header>
						<p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				
			<!-- Five -->
				<section id="four" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Magna faucibus lorem diam</h2>
							<p>Ante metus praesent faucibus ante integer id accumsan eleifend</p>
						</header>
						<form method="post" action="#" class="container 50%">
							<div class="row uniform 50%">
								<div class="8u 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
								<div class="4u$ 12u$(xsmall)"><input type="submit" value="Get Started" class="fit special" /></div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Copyright  All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="<?= BASE_URL; ?>/Views/assets/js/jquery.min.js"></script>
			<script src="<?= BASE_URL; ?>/Views/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?= BASE_URL; ?>/Views/assets/js/jquery.dropotron.min.js"></script>
			<script src="<?= BASE_URL; ?>/Views/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?= BASE_URL; ?>/Views/assets/js/skel.min.js"></script>
			<script src="<?= BASE_URL; ?>/Views/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?= BASE_URL; ?>/Views/assets/js/main.js"></script>

	</body>
</html>