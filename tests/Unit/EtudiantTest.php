<?php

class EtudiantTest extends \Tests\TestCase{

    public function testIsNomValide(){
        expect(\Exercice\Etudiant::isNomValide('hji'))->toBeTrue();
    }
}