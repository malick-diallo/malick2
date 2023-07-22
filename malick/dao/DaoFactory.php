<?php
// Informations de connexion à la base de données
$db_host = 'localhost';       // Nom d'hôte (ou l'adresse IP du serveur)
$db_user = 'root';            // Nom d'utilisateur
$db_password = 'root';        // Mot de passe
$db_db = 'mglsi_news';        // Nom de la base de données

$mysqli = @new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db
);

// Vérifier si la connexion à la base de données a réussi
if ($mysqli->connect_error) {
  echo 'Errno: '.$mysqli->connect_errno;
  echo '<br>';
  echo 'Error: '.$mysqli->connect_error;
  exit();
}

// Exemple de requête pour récupérer les articles à partir de la base de données
$sql = "SELECT * FROM Article";
$resultats = $mysqli->query($sql);

// Vérifier s'il y a des résultats
if ($resultats->num_rows > 0) {
  // Afficher les articles sous forme de liste
  echo "<ul>";
  while ($row = $resultats->fetch_assoc()) {
    echo "<li><strong>" . $row['titre'] . "</strong> - " . $row['contenu'] . "</li>";
  }
  echo "</ul>";
} else {
  echo "Aucun article trouvé.";
}

$mysqli->close();
?>
