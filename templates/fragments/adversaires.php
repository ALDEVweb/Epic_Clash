<?php

// fragment liste des adversaires présent dans la pièce

if($perso->get("pos") > 0 && $perso->get("pos") < 10){
    $adversaires = $perso->listeAdversaire();
    if(isset($adversaires)){
        foreach($adversaires as $id => $adv){
        ?>
        <button data-idadv="<?= $adv["id"] ?>" class='w120p fs10 btnActif'><?= $emogis[$adv["emogi"]] ?> <?= $adv["pseudo"] ?> - <?= $adv["pv"] ?></button>
        <?php
        }
    }else{
        echo "<p class='mt16 fs16 yellow txt-center'>Tu n'as pas d'adversaires dans cette pièce</p>";
    }    
}else if($perso->get("pos") == 0){
    echo "<p class='fs12 yellow txt-center'>Bienvenu dans 'Epic Clash : Lost Dungeon', entre dans le donjon, combat tes adversaires et soit le premier à atteindre la sortie.</p>";
    echo "<div class='flex j-center w100'><a href='index.php?controleur=afficher_regle'><button class='fs10 wfit btnActif'>📜 Règles du jeu 📜</button></a></div>";
}else if($perso->get("pos") == 10){
    echo "<p class='fs12 yellow txt-center'>Bravo ! Tu as atteint la sortie du donjon, ton aventure se termine ici, crée un nouveau personnage pour rejouer</p>";
    echo "<div class='flex j-center w100'><a href='index.php?controleur=afficher_form_creation'><button class='fs10 wfit btnActif'>Créer un nouveau personnage</button></a></div>";
}else if($perso->get("pos") == 11){
    echo "<p class='fs12 yellow txt-center'>Ton personnage a succombé à une attaqe. C'est la fin de ton aventure, crée un nouveau personnage pour rejouer</p>";
    echo "<div class='flex j-center w100'><a href='index.php?controleur=afficher_form_creation'><button class='fs10 wfit btnActif'>Créer un nouveau personnage</button></a></div>";
}