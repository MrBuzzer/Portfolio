<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Adalle Killyan - Website</title>
			<link  rel="stylesheet" href="assets/css/aos.css">
			<link rel="stylesheet" href="assets/css/style.css">
			<script type="text/javascript" href="assets/scripts/lightbox.js"></script>
			<link rel="stylesheet" href="assets/css/lightbox.css">
	</head>
	<body>
		<header>
			<nav>

				<a href="index.php">Index</a>
				<a href="projet.php">Projets</a>
				<a href="CV.php">CV</a>
				<a href="contact.php">Contact</a>
				<a href="Blog.php">Blog</a>
			</nav>
			<h1 id="page_title_contact" class="page_title">Contact</h1>
		</header>
		<main>

			<section data-aos="fade-left" id="block1">

			<form action="../php/mail.php" method="post">
                    Mail :
                    <input type="text" name="mail"  maxlength="50">
                    Nom Prénom :
                    <input type="text" name="pseudo"  maxlength="20">
                    Message
                    <textarea type="text" name="msg"></textarea>
                    <input class="sendButton" type="submit" name="Envoyer" value="Envoyer">
                  </form>

			</section>
		</main>
		<footer id="footer_contact">
			<a target="_blank" href="https://twitter.com/Shironebruh"><img src="assets/images/icons/twitter.png" alt=""></a>
			<a  target="_blank" href="https://www.facebook.com/profile.html?id=100010522624846"><img src="assets/images/icons/facebook.png" alt=""></a>
			<a  href="mailto:k.adalle0604@gmail.com"><img src="assets/images/icons/mail.png" alt=""></a>
			<a  target="_blank" href="https://github.com/MrBuzzer"><img src="assets/images/icons/github.png" alt=""></a>
			<a  target="_blank" href="https://www.linkedin.com/in/adalle-killyan-6361a8171/?originalSubdomain=fr"><img src="assets/images/icons/linkedin.png" alt=""></a>		</footer>
			<script src="assets/scripts/jquery.js"></script>
			<script src="assets/scripts/totop.js"></script>
			<script src="assets/scripts/aos.js"></script>
			<script type="text/javascript" src="assets/scripts/smooth.js"></script>
			<script>
  				AOS.init();
			</script>
		</footer>
			<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
			</script>
	</body>
</html>
