<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Détermination de Mention</title>
    <!-- Inclure les fichiers CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Calcul de Mention</h1>
        <!-- Formulaire de saisie de la moyenne -->
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="moyenne" class="form-label">Moyenne Générale au Bac:</label>
                <input type="number" step="0.01" max="20" min="1" class="form-control" id="moyenne" name="moyenne"  value="<?php echo $moyenne; ?>" required >
            </div>
            <button type="envoi" class="btn btn-primary" >Calculer</button>
        </form>

        <?php
            // Votre code PHP pour déterminer la mention va ici
            $moyenne = ""; 
            if(isset($_POST['envoi'])){ 
                $moyenne = $_POST['moyenne'];
                }
            $decision = ($moyenne >= 10) ? "Admis": "Éliminé";
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

            
        ?>
    </div>
    <!-- Inclure le fichier JavaScript Bootstrap (facultatif) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>