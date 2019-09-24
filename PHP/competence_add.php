<?php
$param = parse_ini_file('db.ini');
  try {
    $dbh = new PDO($param['url'], $param['user'], $param['pass']);
  } catch (PDOException $e) {
      echo("Erreur de connexion");
      exit;
  }
  if(isset($_POST['comp'])) {
    $nom=$_POST['comp'];
  } else {
    $nom="";
  }
  if(isset($_POST['niveau'])) {
    $percent=$_POST['niveau'];
  } else {
    $percent="";
  }
  if(empty($nom) OR empty($percent)) {
    echo '<font color="red">Veuillez remplir tout les champs</font>';
    return;
  } else {
    $query = "INSERT INTO competence (nom, niveau)  VALUES(?,?)";
    $sql = $dbh->prepare($query);
    $sql->execute([$nom,$percent]);
    $dbh = null;
    header("Location: panel.php");
    exit;
  }
?>