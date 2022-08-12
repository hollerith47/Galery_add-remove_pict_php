<?php
function suprime_dossier_visiteur($adresse_dossier){
    if (is_dir($adresse_dossier)){
        $contenu_objets = scandir($adresse_dossier);
        foreach ($contenu_objets as $objet) {
            if ($objet !="." && $objet !="..") {
                if (filetype($adresse_dossier."/".$objet) == "dir") {
                    rmdir($adresse_dossier."/".$objet);
                }else {
                    unlink($adresse_dossier."/".$objet);
                }
            }
        }
        reset($contenu_objets);
        rmdir($adresse_dossier);
    }
}


