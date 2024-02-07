<?php

namespace Exercice;

/* ecrire une fonction diviseur($n) qui prend un entier $n et renvoie tous les diviseurs
    de ce nombre. Ensuite tester la avec 5 cas de base et un cas limite
*/

/*
 * classe d'équivalence
 * [MinValue, -1]
 * [1, MaxValue]
 * Donc toutes les valeures qui se trouve dans ces intervalles sont utilisable
 */

use Cassandra\Exception\DivideByZeroException;
use phpDocumentor\Reflection\Types\Integer;
use PHPUnit\Exception;

class Math
{
    public function __construct()
    {

    }

    public static function diviseur($n) : array
    {
        $diviseur = [];

        if ($n == 0)
            return $diviseur;

        for ($i = 1; $i <= $n; $i++){
            if ($n % $i == 0)
                $diviseur[] = $i;
        }
        return $diviseur;
    }

    public static function sum($a, $b) : int{
        return $a + $b;
    }

    public static function divisorTwoNumber($nb1, $nb2){
        try {
            return $nb1 / $nb2;
        }catch (DivideByZeroException $e){
            return $e->getMessage();
        }
    }
}