<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        require_once './fonctions_france.inc.php';
     
        /*$nomVille = filter_input(INPUT_POST, 'ville');
        $nomDepartement = getNomDepartementFromVille($nomVille);
        echo "<div>";
        echo "la ville de <b>$nomVille</b> se trouve dans le departement : <br/>";
        echo "<b>$nomDepartement</b>";
        echo "</div>";*/
        
        //afficheRegion();
        
        //afficheDepartementsRegions();
        
        $numDep = filter_input(INPUT_POST, 'ville');
        afficheNomDepartementFromNumero($numDep);
        ?>
    </body>
</html>

