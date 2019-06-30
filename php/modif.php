
  <?php
$param = parse_ini_file('db.ini');
  try {
    $dbh = new PDO($param['url'], $param['user'], $param['pass']);
  } catch (PDOException $e) {
      echo("Erreur de connexion");
      exit;
  }
  if(isset($_POST['compE'])) {
    $nom=$_POST['compE'];
  } else {
    $nom="";
  }
  if(isset($_POST['niveauE'])) {
    $percent=$_POST['niveauE'];
  } else {
    $percent="";
  }
  if(empty($nom) OR empty($percent)) {
    echo '<font color="red">Veuillez remplir tout les champs</font>';
    return;
  } else {
    $query = "UPDATE competence SET niveau = :percent WHERE nom = :comp";
    $sql = $dbh->prepare($query);
    $sql->execute(array(":percent" => $_POST['niveauE'],':comp' => $_POST['compE']));
    $dbh = null;
    header('location: panel.php');
    exit;
  }
?>