<?php

define("SERVEURBD", "195.221.61.190");
define("LOGIN", "snir");
define("MOTDEPASSE", "snir");
define("NOMDELABASE", "france2015");

function connexionBdd() {

    try {
        $pdoOptions = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $bdd = new PDO('mysql:host=' . SERVEURBD . ';dbname=' . NOMDELABASE, LOGIN, MOTDEPASSE, $pdoOptions);
        $bdd->exec("set names \"utf8\"");
        return $bdd;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getNomDepartementFromVille($ville) {
    try {
        $bdd = connexionBdd();
        $requete = $bdd->prepare("select departement_nom from villes, departements "
                . "where departements.departement_id = villes.ville_departement_id "
                . "and ville_nom like :laville ;");
        $requete->bindParam(":laville", $ville);
        $requete->execute() or die(print_r($requete->errorInfo()));
        $nbLigne = $requete->rowCount();
        if ($nbLigne == 0) {
            $nomDep = "pas de departement correspondant";
        }
        if ($nbLigne == 1) {
            $nomDep = $requete->fetchColumn(0);
        }
        if ($nbLigne > 1) {
            $nomDep = "";
            while ($ligne = $requete->fetch()) {
                $nomDep = $nomDep . "<br />" . $ligne['departement_nom'];
            }
        }
        $requete->closeCursor();
        return $nomDep;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function afficheRegion() {
    try {
        $bdd = connexionBdd();
        $requete = $bdd->prepare("select region_nom from regions");
        $requete->execute() or die(print_r($requete->errorInfo()));
        $nomsReg = "";
        while ($ligne = $requete->fetch()) {
            $nomsReg = $nomsReg . $ligne['region_nom'] . '<br/>';
        }
        echo 'liste des regions : ' .'<br/>'. $nomsReg;
        $requete->closeCursor();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    
}

function afficheDepartementsRegions() {
    try {
        $bdd = connexionBdd();
        $requete = $bdd->prepare("select region_nom, departement_nom from regions, departements "
                               . "where departements.departement_region_id = regions.regions_id "
                               . "order by region_nom asc;");
        $requete->execute() or die(print_r($requete->errorInfo()));
        //$nomsReg = "";
        echo '<table>';
        while ($ligne = $requete->fetch()) {
            echo '<tr><td>' . $ligne['region_nom'] . '</td><td>' . $ligne['departement_nom'] . '</td></tr>';
        }
        echo '</table>';
        $requete->closeCursor();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function afficheNomDepartementFromNumero($numDep) {
    try {
        $bdd = connexionBdd();
        $requete = $bdd->prepare("select departement_nom from departements "
                               . "where departement_code like :numDepartement");
        $requete->bindParam(':numDepartement', $numDep);
        $requete->execute() or die(print_r($requete->errorInfo()));
        $nomDep = $requete->fetchColumn(0);
        echo '<div> le departement ' . $numDep . ' est le deprtement ' . $nomDep;
        $requete->closeCursor();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
