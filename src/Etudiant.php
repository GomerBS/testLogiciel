<?php

namespace Exercice;

class Etudiant
{
    private $nom;
    private $postnom;
    private $prenom;
    private $email;

    public function __construct(){}

    public static function isNomValide($nom) : bool{
        if (empty($nom)){
            return false;
        }else{
            if (strlen($nom) < 3 || strlen($nom) > 12){
                return false;
            }else{
                if (preg_match('/^[a-zA-Z][a-zA-Z0-9]*$/', $nom  )){
                    return true;
                }else{
                    return false;
                }
            }
        }

        // Vérifier la longueur du nom
        //expect(strlen($nom))->toBeGreaterThanOrEqual(3);
        //expect(strlen($nom))->toBeLessThanOrEqual(12);

        // Vérifier s'il ne contient pas de caractères spéciaux
        //expect($nom)->;
    }
}