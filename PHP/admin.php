<?php

$param = parse_ini_file('db.ini');

try{
    $dbh = new PDO($param['url'], $param['user'], $param['pass']);
}catch(PDOException $e){
    echo("Erreur de connexion");
    exit;
}
if (isset($_POST['pass']) && isset($_POST['user'])){
  $req1 = $dbh->prepare("SELECT user, pass FROM admin where user=:user");
  $req1->execute(array(":user" => $_POST['user']));
  $res1 = $req1->fetch(PDO::FETCH_ASSOC);
  // var_dump($req1->debugDumpParams());
  if ($req1->rowCount() == 1){
      if(password_verify($_POST['pass'], $res1['pass'])){
        header("location: panel.php");
      }

      else{
          echo("mauvais password");
      }
  }
  else{
      echo("Mauvais pseudo");
  }
}
$dbh = null;
?>
<html>
<head>
       <meta charset="utf-8">
         <!--importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
             <!--zone de connexion -->
            
            <form action="admin.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Pseudo</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="user" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="pass" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>
