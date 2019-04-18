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
        // /regex/i = Insensible à la casse  || Case insensitive
        // /^regex/ = Recherche en début de chaine de caractère || Search at the beginning of a string
        // /regex$/ = Recherche en fin de chaine de caractère || Search at the end of the string
        // /^aaa$/ = Retoune true si la chaine de caractère contient UNIQUEMENT 3 'a' à la suite ("aaa" = true "aaaa" = false) || Returns true if the string contains ONLY 3 'a' following ("aaa" = true "aaaa" = false)
        // /regex1|regex2/ = L'un ou l'autre (attention au espaces) || One or the other (paid attention to spaces)
        // /[aeiou]/ = Recherhe l'un des caractère entre crochet || Look for one of the characters between brackets
        // /[a-z]/ = Intervale de recherche entre a à z || Search interval between a to z
        // /[^a-z]/ = Tout ce qui n'est pas entre a et z et en minuscule || All that is not between a and z and in lower case
        // /./ = Recherche tout les charactère sauf le retour à la ligne || Search all characters except the return to the line

        // Classes abréger

        // /\d/ = /[0-9]/
        // /\D/ = /^0-9/
        // /\w/ = /[a-zA-z0-9_]/
        // /\W/ = /[^a-zA-z0-9_]/
        // /\n/ = Recherche un retour à la ligne pour Mac osx || Search a return to the line for Mac osx
        // /\r/ = Recherche un retour à la ligne pour Mac os (avant x) || Search a return to the line for Mac os (before x)
        // /\n\r/ = Recherche un retour à la ligne pour Windows || Search a return to the line for Windows
        // /\s/ = Recherche si il y a un espace || Search if there is a space
        // /\S/ = Recherche tout sauf les epaces || Search all except the epaces

        // Les quantifieurs || 

        // ? = Faculative peut être présent 0 ou 1 fois || optional can be present 0 or 1 time 
        // + = Doit apparaitre au moins 1 fois || Must appear at least once
        // * = Doit apparaitre 0, 1 ou plusieur fois || Must appear 0, 1 or more times
        // a{3} = Pour rechercher une certaine quantité à la suite (ici 3 fois la lettre a) || To search for a certain amount in a row (here 3 times the letter a) 
        // a{3,} = 3 fois a ou plus || 3 times a or more
        // a{3,5} = Recherche soit 3 fois a, 4 fois a ou 5 fois a || Search either 3 times a, 4 times a or 5 times a
        // Un autre exemple : /a{3}h/ ici on recheche 3 a à la suite et un h || Another example : /a{3}h/ here we search 3 a following and a h

        $r = "J'apprends à coder";
        // $regex1 = "coder";
        // $regex2 = "ode";
        // $regex3 = "CODER";

        // if(preg_match("/^$regex3/i", $r)) {
        //     echo 'The expression has been found</br>';
        // } else {
        //     echo 'Expression not found';
        // }
        
        // Recherche si il y a une lettre entre a à z en mininuscule || Search if there is a letter between a to z in miniscule
        if(preg_match("/[a-z]/", $r)) {
            echo 'The expression has been found</br>';
        } else {
            echo 'Expression not found</br>';
        }

        // Recherche si il y a une lettre entre A à Z en majuscule et se trouvant en début de chaine || Search if there is a letter between A to Z in upper case and at the beginning of the chain
        if(preg_match("/^[A-Z]/", $r)) {
            echo 'The expression has been found</br>';
        } else {
            echo 'Expression not found</br>';
        }

        // La même chose avec des chiffres || The same with numbers
        if(preg_match("/[0-9]/", $r)) {
            echo 'The expression has been found</br>';
        } else {
            echo 'Expression not found</br>';
        }

        // On peut aussi combiner plusieurs interval || We can also combine several intervals
        if(preg_match("/[a-zA-z0-9éèï]/", $r)) {
            echo 'The expression has been found</br>';
        } else {
            echo 'Expression not found</br>';
        }

    ?>
</body>
</html>