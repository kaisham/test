<?php
// Définit le chemin vers le fichier index.php à afficher
$file = '/challenge/web-serveur/ch13/index.php';

// Vérifie si le fichier existe avant de l'inclure
if (file_exists($file)) {
    // Affiche le contenu du fichier index.php
    echo "<pre>";
    readfile($file);
    echo "</pre>";
} else {
    echo "Le fichier n'a pas pu être trouvé.";
}
?>
