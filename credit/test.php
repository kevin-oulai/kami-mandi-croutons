<?php
// Assurez-vous que l'image est dans le bon répertoire
$imagePath = "image.png";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image qui tourne</title>
    <style>
        #rotate-image {
            width: 200px; /* Taille de l'image */
            height: auto;
            transition: transform 2s ease-in-out;
            /* Au début, aucune transformation */
        }

        /* Animation infinie en CSS */
        @keyframes rotation {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        #rotate-image {
            animation: rotation 5s linear infinite;
        }
    </style>
</head>
<body>

<img src="<?= $imagePath ?>" id="rotate-image" alt="Image tournante">

</body>
</html>