<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Détermination de Mention</title>
<!-- Inclure les fichiers CSS Bootstrap -->
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"rel="stylesheet
">
</head>
<body>

<?php
// Définir la moyenne
$moyenne = $_POST['moyenne'];
            // if(isset($_POST['envoi'])){ 
            //     $moyenne = $_POST['moyenne'];
            //     }
// Initialiser les variables de décision et de mention
$decision = $moyenne >= 10 ? "Admis": "Éliminé";
$mention = "";
// Déterminer la mention en fonction de la moyenne
if ($moyenne >= 17) {
$mention = "Excellent";
} elseif ($moyenne >= 16) {
$mention = "Très Bien";
} elseif ($moyenne >= 14) {
$mention = "Bien";
} elseif ($moyenne >= 12) {
$mention = "Assez Bien";
} elseif ($moyenne >= 10) {
$mention = "Passable";
}
// Afficher la décision et la mention avec les classes de couleurs Bootstrap
echo '<h1 class="mb-4">Résultats de l\'élève</h1>';
echo '<p>Décision: <span class="';
echo ($decision === "Admis") ? 'text-success' : 'text-danger';
echo '">' . $decision . '</span></p>';
echo '<p>Mention: <span class="';
switch ($mention) {
case "Excellent":
echo 'text-primary';
break;
case "Très Bien":
echo 'text-info';
break;
case "Bien":
echo 'text-success';
break;
case "Assez Bien":
echo 'text-warning';
break;
case "Passable":
echo 'text-secondary';
break;
default:
echo 'text-dark';
break;
}
echo '"style="font-size: 14px;">' . $mention . '</span></p>';
?>
</div>
<!-- Inclure le fichier JavaScript Bootstrap (facultatif) -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>