<?php
include('mysmtpconfig.php');
include('smtpClass.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$to = "empireaktobe@gmail.com";
$from = "contactform@empire-m.kz";
$subject = $_POST['name'] ." || ". $_POST['email'];
$body = $_POST['message'];
$SMTPMail = new SMTPClient ($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body);
$SMTPChat = $SMTPMail->SendMail();
}
?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107087946-1"></script>
		<script>
  			window.dataLayer = window.dataLayer || [];
  			function gtag(){dataLayer.push(arguments)};
  			gtag('js', new Date());

  			gtag('config', 'UA-107087946-1');
		</script>		
		<meta http-equiv="Refresh" content="10; url=http://empire-m.kz/">
		<title>Empire - маркетинговая компания</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->
		<link rel="shortcut icon" href="../images/favicon.ico" />
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">EMPIRE  | +77070350055, +77771566887</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Меню</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Главная</a></li>
											<li><a href="index.html/#one">О нас</a></li>
											<li><a href="index.html/#two">Услуги</a></li>

										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- One -->
					<section id="one" class="wrapper style4 special">
						<div class="inner">
							<header class="major">
								<p>
									Ваша заявка принята! Наш сотрудник всяжется с вами в ближайшее время!
								</p>
							</header>
						</div>
					</section>



				<!-- Footer -->
					<footer id="footer">
						<p>
							Наш телефон:<br />
							+77070350055 <br />+77771566887
						</p>
						<ul class="icons">
							<li><a href="https://instagram.com/empire.kz" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://vk.com/empire_aktobe" class="icon fa-vk"><span class="label">Vk</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="mail-to:empireaktobe@gmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Empire Agency</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="../assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>

	</body>
</html>
<!doctype html>