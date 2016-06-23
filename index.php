<?php
// Inutile d'expliquer la présence du session_start().
session_start();
// { Début - Première partie
if(!empty($_POST) OR !empty($_FILES))
{

    $_SESSION['sauvegarde'] = $_POST ;

    $_SESSION['sauvegardeFILES'] = $_FILES ;

    

    $fichierActuel = $_SERVER['PHP_SELF'] ;

    if(!empty($_SERVER['QUERY_STRING']))

    {

        $fichierActuel .= '?' . $_SERVER['QUERY_STRING'] ;

    }

    

    header('Location: ' . $fichierActuel);

    exit;

}

// } Fin - Première partie


// { Début - Seconde partie

if(isset($_SESSION['sauvegarde']))

{

    $_POST = $_SESSION['sauvegarde'] ;

    $_FILES = $_SESSION['sauvegardeFILES'] ;

    

    unset($_SESSION['sauvegarde'], $_SESSION['sauvegardeFILES']);
    
    $nom = $_POST['nom']; 
    $message = $_POST['message']; 
    $destinataire= 'thomazeausamuel@gmail.com' ;
    $expediteur = $_POST['email']; 
    $headers = 'message de '.$nom.$expediteur ;
    if(mail($destinataire,$headers,$message))
    {
            echo '<script>alert("votre mail a été envoyé");</script>';
    }
    else
    {
            echo '<script>alert("Erreur d\'envoi");</script>';
    }


    }

// } Fin - Seconde partie



?>


<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Samuel Thomazeau</title>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body >
            
        
		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/photo.jpg" alt="" /></span>
							<h1 id="title"> Samuel Thomazeau</h1>
							<p>Créateur de contenu Multimédia</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--

								Prologue's nav expects links in one of two formats:

								1. Hash link (scrolls to a different section within the page)

								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

							-->
							<ul>
								<li><a href="#top"  id="top-link" class="skel-layers-ignoreHref" ><span class="icon fa-home">Intro</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
								<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Compétences</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
                                
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label" target="_blank">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label" target="_blank">Facebook</span></a></li>
							<li><a href="https://github.com/sthomazeau" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-dribbble" target="_blank"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope" target="_blank"><span class="label">Email</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">Toute histoire a un commencement,<br /> et voici le prélude de la mienne</h2>
								<!----<p>Lorem ipsum, dolor sit amet<br />
								-S.Thomazeau 2016-</p>---->
							</header>

							<footer>
								<a href="documents/CV%20v6.pdf" class="button scrolly" target="_blank">Mon CV</a>
							</footer>

						</div>
					</section>

				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Portfolio</h2>
							</header>

							<p>Ici sont réunis mes réalisations majeures. J'ai, pendant mes études, participé, à divers projets dans différents domaines : Graphisme, Audiovisuel, Communication. Je me spécialise dans l'audiovisuel via la conception de courts-métrages, vidéos institutionnelles,...</p>

							<div class="row">
								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="https://www.youtube.com/watch?v=UKid32emixE" class="image fit" target="_blank"><img src="images/logoblue.png" alt="" /></a>
										<header>
											<h3>Micro-trottoir</h3>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit" target="_blank"><img src="images/logojuju.jpg" alt="" /></a>
										<header>
											<h3>Dessine-moi une région</h3>
										</header>
									</article>
                                    <article class="item">
										<a  class="image fit" target="_blank"><img src="images/logofinal.png" alt="" /></a>
										<header>
											<h3>Vieilles Soupapes d'Artois</h3>
										</header>
									</article>
                                    <article class="item">
										<a href="#" class="image fit" target="_blank"><img src="images/dudu_flat_design.jpg" alt="" /></a>
										<header>
											<h3>Flat Design</h3>
										</header>
									</article>
                                    <article class="item">
										<a href="" class="image fit" target="_blank"><img src="images/moodboard.png" alt="" /></a>
										<header>
											<h3>Moodboard</h3>
										</header>
									</article>
								</div>
								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit" target="_blank"><img src="images/brochure.jpg" alt="" /></a>
										<header>
											<h3>Sweet & Savory</h3>
										</header>
									</article>
                                    <article class="item">
										<a href="#" class="image fit" target="_blank"><img src="images/stickers.jpg" alt="" /></a>
										<header>
											<h3>Stickers</h3>
										</header>
									</article>
                                    <article class="item">
										<a href="#" class="image fit" target="_blank"><img src="images/pechakucha.JPG" alt="" /></a>
										<header>
											<h3>Pechakucha</h3>
										</header>
									</article>  
                                    <article class="item">
										<a href="#" class="image fit" target="_blank"><img src="images/IMGP0930.JPG" alt="" /></a>
										<header>
											<h3>Open International de Taekwondo de Proville</h3>
										</header>
									</article>
                                    <article class="item">
										<a href="#" class="image fit" target="_blank"><img src="images/mobile.png" alt="" /></a>
										<header>
											<h3>Wireframe mobile</h3>
										</header>
									</article>
								</div>
								<div class="4u$ 12u$(mobile)">
									<article class="item">
										<a href="https://www.youtube.com/watch?v=B6yO72lK7ic" class="image fit" target="_blank"><img src="images/option%20musique.jpg" alt="" /></a>
										<header>
											<h3>Option Musique</h3>
										</header>
									</article>
									<article class="item">
										<a href="https://www.youtube.com/watch?v=2vEJrLPhfEg" class="image fit" target="_blank"><img src="images/stluccup.jpg" alt="" /></a>
										<header>
											<h3>Cup Song</h3>
										</header>
									</article>
                                    <article class="item">
										<a href="#" class="image fit" target="_blank"><img src="images/slc2015.jpg" alt="" /></a>
										<header>
											<h3>Organisation évènementielle</h3>
										</header>
									</article>
                                    <article class="item">
										<a href="https://www.youtube.com/watch?v=R-8AjfPGmYA" class="image fit" target="_blank"><img src="images/delta.jpg" alt="" /></a>
										<header>
											<h3>Tournage -acting-</h3>
										</header>
									</article>
                                   
								</div>
							</div>

						</div>
					</section>

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>Compétences</h2>
							</header>

							<a href="#" class="image featured"><img src="images/banner5.png" alt="" /></a>

							<p>Actuellement étudiant en 1ère année de DUT Métiers du Multimédia et de l'Internet et passionné du web et de l'audiovisuel. Ce site sert principalement à montrer l'étendue de mes réalisations et autres travaux</p>

						</div>
					</section>

				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Contact</h2>
							</header>

<!---						<p>Oh que c'est dommage. C'est déjà fini. Mais vous voulez me revoir? Vous souhaitez mecontacter? Ne vous inquiétez pas, j'ai un pigeon voyageur.
                            Il s'appelle "Mail". N'ayez crainte il est très gentil, même avec les étranger.</p>---->

							<form method="post" action="index.php">
								<div class="row">
									<div class="6u 12u$(mobile)"><input type="text" name="nom" placeholder="Nom" /></div>
									<div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="Email" /></div>
									<div class="12u$">
										<textarea name="message" placeholder="Votre Message"></textarea>
									</div>
									<div class="12u$">
										<input type="submit" value="Envoyer" />
									</div>
								</div>
							</form>

						</div>
					</section>

			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Samuel Thomazeau. All rights reserved.</li>
                        <li></li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-79366614-1', 'auto');
              ga('send', 'pageview');

            </script>

	</body>
</html>