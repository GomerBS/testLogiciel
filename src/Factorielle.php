<?php

namespace Exercice;


class Factorielle
{
    public function __construct(){}

    public static function factorielle($n) : int{
        if ($n === 0) {
            return 1;
        } else {
            return $n * factorielle($n - 1);
        }
    }

}