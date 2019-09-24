<?php
$param = parse_ini_file('db.ini');
  try {
    $dbh = new PDO($param['url'], $param['user'], $param['pass']);
  } catch (PDOException $e) {
      echo("Erreur de connexion");
      exit;
  }
  if(isset($_POST['compS'])) {
    $nom=$_POST['compS'];
  } else {
    $nom="";
  }
  if(isset($_POST['niveauS'])) {
    $percent=$_POST['niveauS'];
  } else {
    $percent="";
  }
  if(empty($nom)) {
    echo '<font color="red">Veuillez remplir tout les champs</font>';
    return;
  } else {
    $query = "DELETE FROM competence WHERE nom = :comp";
    $sql = $dbh->prepare($query);
    $sql->execute(array(":comp" => $_POST['compS']));
    $dbh = null;
    header('location: panel.php');
    exit;
  }
?>