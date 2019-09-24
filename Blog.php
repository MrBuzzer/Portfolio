<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Adalle Killyan - Website</title>
			<link  rel="stylesheet" href="assets/css/aos.css">
			<link rel="stylesheet" href="assets/css/style.css">
			<link  rel="stylesheet" href="assets/css/modal.css">
			<script type="text/javascript" href="assets/scripts/lightbox.js"></script>
			<script type="text/javascript" href="assets/scripts/modal.js"></script>
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
			<h1 id="page_title_blog" class="page_title">Blog</h1>
		</header>
		<main>

			<section data-aos="fade-left" id="block1">
                <div class="bigtitle">
                    <h1 data-aos="fade-right">Econocom | Osiatis</h1>
                    <p data-aos="fade-down">
                            Econocom est un groupe européen spécialisé dans les services liés à la transformation numérique, le groupe est notamment spécialisé dans le conseil, l’approvisionnement de produits et solutions numériques, les services informatiques (infrastructures, applicatifs et solutions métiers), le financement des projets digitaux, et dispose d’expertises en matière d’Internet des objets, de cloud computing et de sécurité numérique.<br/>
                    </p>
                        <body>
                        
                        <!-- Trigger/Open The Modal -->
                        <button id="myBtn">Rapport de stage</button>
                        
                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                        
                        <!-- Modal content -->
                        <div class="modal-content">
                        <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2>Econocom | Osiatis</h2>
                        </div>
                        <div class="modal-body">
                        <p>Lors de ce stage j'ai pu faire de la maintenance physique de tablette de la marque Lenovo. Mon travail était de remettre en état de fonctionnement les tablettes en passant par la vérification de l'etat de la batterie puis des fixations et pour finir les touches du clavier. </p>
                        <p>J'ai aussi pu teste le reconditionement de la tablette grâce à un boutage par clef USB ainsi que de la remise a zero de la tablette en cas de don.</p>
                        </div>
                        <div class="modal-footer">
                        <h3>Description du travail effectué (Année 2018-2019)</h3>
                        </div>
                        </div>
                        
                        </div>
                        <script>
                        // Get the modal
                        var modal = document.getElementById("myModal");
                        
                        // Get the button that opens the modal
                        var btn = document.getElementById("myBtn");
                        
                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];
                        
                        // When the user clicks the button, open the modal 
                        btn.onclick = function() {
                          modal.style.display = "block";
                        }
                        
                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                          modal.style.display = "none";
                        }
                        
                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                          if (event.target == modal) {
                            modal.style.display = "none";
                          }
                        }
                        </script>
		</main>
		<footer id="footer_blog">
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
