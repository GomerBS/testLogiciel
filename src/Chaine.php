<?php

namespace Exercice;

class Chaine
{
    public function __construct()
    {
    }

    public static function transformers($str){
        $result = "";
        for($i = 0; $i < strlen($str); $i++){
            if(ctype_lower($str[$i])){
                $result .= strtoupper($str[$i]);
            }else{
                $result .= strtolower($str[$i]);
            }
        }
        return $result;
    }
}