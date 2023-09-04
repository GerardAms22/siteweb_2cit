<?php

// Les paramètres de l'API Tmoney
$tmoney_api_key = 'Votre clé API Tmoney';
$tmoney_api_secret = 'Votre clé secrète Tmoney';

// Récupération des données du formulaire
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$numero = isset($_POST['numero']) ? $_POST['numero'] : '';
$montant = isset($_POST['montant']) ? $_POST['montant'] : '';
$payerpar = isset($_POST['payerpar']) ? $_POST['payerpar'] : '';

// Vérification de la validité des données
if (empty($nom) || empty($prenom) || empty($email) || empty($numero) || empty($montant) || empty($payerpar)) {
    die("Veuillez remplir tous les champs du formulaire.");
}

// Initialisation des paramètres de l'API Tmoney
$data = array(
    'apikey' => $tmoney_api_key,
    'montant' => $montant,
    'numero' => $numero
);

// Envoi de la requête à l'API Tmoney
$url = 'https://api.tmoney.tg/paiement';
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

// Traitement de la réponse de l'API Tmoney
if ($result !== false) {
    // La transaction a été effectuée avec succès
    // Enregistrement des données dans la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "website";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("La connexion à la base de données a échoué : " . mysqli_connect_error());
    }
    $sql = "INSERT INTO website.utilisateurs (nom, prenom, email, numero, montant, payerpar) VALUES ('$nom', '$prenom', '$email', '$numero', '$montant', '$payerpar')";
    if (mysqli_query($conn, $sql)) {
        echo "Votre inscription et votre paiement ont été enregistrés avec succès.";
    } else {
        echo "Une erreur est survenue lors de l'enregistrement de votre inscription et de votre paiement : " . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    // La transaction a échoué
    die("La transaction a échoué : " . $result);
}

?>
