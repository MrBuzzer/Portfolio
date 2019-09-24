<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8">
		<title>Adalle Killyan - Website</title>
			<link  rel="stylesheet" href="assets/css/aos.css">
			<link rel="stylesheet" href="assets/css/style.css">
			<script type="text/javascript" href="assets/scripts/lightbox.js"></script>
            <link rel="stylesheet" href="assets/css/lightbox.css">
            
            <!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
</html>
<body>
    <header>
        <nav>

        <a href="index.php">Index</a>
        <a href="projet.php">Projets</a>
        <a href="CV.php">CV</a>
        <a href="contact.php">Contact</a>
        <a href="Blog.php">Blog</a>
        </nav>
        <h1 id="page_title_CV" class="page_title">CV</h1>
    </header>
    <main>
    
        <section id="block1">
            <div class="bigtitleproject">
                <h1 data-aos="fade-right">Mon niveau de codage actuelle</h1>
                <div data-aos="fade-up" class="language">
                <a class="smalltitle" href="project.html#html"> <h1>HTML/CSS</h1></a>
                <a class="smalltitle" href="project.html#nodejs"> <h1>POWERSHELL</h1></a>
                <a class="smalltitle" href="project.html#arduino"> <h1>ARDUINO</h1></a>
                <a class="smalltitle" href="project.html#c"> <h1>C</h1></a>
                </div>

            <?php
            $param = parse_ini_file("php/db.ini");


            try {
                $dbh = new PDO($param['url'], $param['user'], $param['pass']);
              } catch (PDOException $e) {
                  echo("Erreur de connexion");
                  exit;
              }

                $sql = $dbh->prepare("SELECT nom, niveau FROM competence");
                $sql->execute();
                $res = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach ($res as $key){
                    echo "<h1>" . $key["nom"] . "</h1>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" aria-valuenow=\"" . $key["niveau"] . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $key["niveau"] . "%;\">
                                <span class=\"sr-only\">" . $key["niveau"] . "%</span>
                            </div>
                        </div>";   
                }
            ?>



        </section>
        <section id="block1">
                <div class="bigtitle">
                    <p data-aos="fade-right">
                    <h1 data-aos="fade-left">EXPERIENCE PROFESSIONNELLE</h1>
                    <p data-aos="fade-down">
                        Ifacette Informatique : Fevrier 2015<br/> 
                        Banque Société marseillaise de crédit : Août-septempbre 2018<br/>
                    </p>
                    <h1 data-aos="fade-right">FORMATION</h1>
                    <p data-aos="fade-up">
                        Brevet des collèges (Collège Nathalie SARRAUTE, Aubagne) : 2015 <br/> 
                        baccalauréat série STI2D option SIN EME(Ecole Modéle d'Electronique, St Marcel 13011 Marseille)<br/>
                    </p>
                </div>
                <a href="../php/admin.php"><input type="button" value="modifier"></a>
            </section>

    <footer id="footer_CV">
        <a target="_blank" href="https://twitter.com/Shironebruh"><img src="assets/images/icons/twitter.png" alt=""></a>
        <a  target="_blank" href="https://www.facebook.com/profile.html?id=100010522624846"><img src="assets/images/icons/facebook.png" alt=""></a>
        <a  href="mailto:k.adalle0604@gmail.com"><img src="assets/images/icons/mail.png" alt=""></a>
        <a  target="_blank" href="https://github.com/MrBuzzer"><img src="assets/images/icons/github.png" alt=""></a>
        <a  target="_blank" href="https://www.linkedin.com/in/adalle-killyan-6361a8171/?originalSubdomain=fr"><img src="assets/images/icons/linkedin.png" alt=""></a>
        <script src="assets/scripts/jquery.js"></script>
        <script src="assets/scripts/totop.js"></script>
        <script src="assets/scripts/aos.js"></script>
        <script type="text/javascript" src="assets/scripts/smooth.js"></script>
        <script>
            AOS.init();
        </script>
    </footer>
    </main>
</body>