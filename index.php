<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regex php</title>
</head>
<body>
    <?php
        // /regex/i = Insensible à la casse
        // /^regex/ = En début de chaine de caractère 
        // /regex$/ = En fin de chaine de caractère
        // /^regex$/ = Uniquement La regex (ex: /^chat$/ reconnaît chat seul)
        // /regex1|regex2/ = L'un ou l'autre (attention au espaces)
        // /[aeiou]/ = Recherhe l'un des caractère entre crochet 
        // /[a-z]/ = Intervale de recherche entre a à z
        // /[^a-z]/ = Tout ce qui n'est pas entre a et z et en minuscule
        // /./ = Recherche tout les charactère sauf le retour à la ligne

        // Classes abréger

        // /\d/ = /[0-9]/
        // /\D/ = /^0-9/
        // /\w/ = /[a-zA-z0-9_]/
        // /\W/ = /[^a-zA-z0-9_]/
        // /\n/ = recherche un retour à la ligne pour Mac osx 
        // /\r/ = recherche un retour à la ligne pour Mac os (avant x) 
        // /\n\r/ = recherche un retour à la ligne pour Windows
        // /\s/ = Recherche si il y a un espace
        // /\S/ = Recherche tout sauf les epaces

        // Les quantifieurs

        // ? = Faculative peut être présent 0 ou 1 fois
        // + = Doit apparaitre au moins 1 fois
        // * = Doit apparaitre 0, 1 ou plusieur fois
        // a{3} = pour rechercher une certaine quantité à la suite (ici 3 fois la lettre a)
        // a{3,} = 3 fois a ou plus
        // a{3,5} = soit 3 fois a, 4 fois a ou 5 fois a 
        // Un autre exemple : /a{3}h/ ici on recheche 3 a à la suite et un h

        $r = "J'apprends à coder";
        // $regex1 = "coder";
        // $regex2 = "ode";
        // $regex3 = "CODER";

        // if(preg_match("/^$regex3/i", $r)) {
        //     echo 'L\'expression a bien été trouvée</br>';
        // } else {
        //     echo 'Expression non trouvée';
        // }
        
        // Recherche si il y a une lettre entre a à z en mininuscule
        if(preg_match("/[a-z]/", $r)) {
            echo 'L\'expression a bien été trouvée</br>';
        } else {
            echo 'Expression non trouvée</br>';
        }

        // Recherche si il y a une lettre entre A à Z en majuscule et se trouvant en début de chaine
        if(preg_match("/^[A-Z]/", $r)) {
            echo 'L\'expression a bien été trouvée</br>';
        } else {
            echo 'Expression non trouvée</br>';
        }

        // La même chose avec des chiffres
        if(preg_match("/[0-9]/", $r)) {
            echo 'L\'expression a bien été trouvée</br>';
        } else {
            echo 'Expression non trouvée</br>';
        }

        // On peut aussi combiner plusieurs interval
        if(preg_match("/[a-zA-z0-9éèï]/", $r)) {
            echo 'L\'expression a bien été trouvée</br>';
        } else {
            echo 'Expression non trouvée</br>';
        }

    ?>
</body>
</html>