<?php

    /*
     * la fonction describe s'utilise pour grouper les tests
     *
     */

    use Dataset;

    describe('Test', function (){
        test('Diviseur de 10', function () {
            expect(\Exercice\Math::diviseur(10))->toBe([1, 2, 5, 10]);
        });

        test('Diviseur de 5', function () {
            expect(\Exercice\Math::diviseur(5))->toBe([1, 5]);
        });

        test('Diviseur de 4', function () {
            expect(\Exercice\Math::diviseur(4))->toBe([1, 2, 4]);
        });

        test('Diviseur de 0', function () {
            expect(\Exercice\Math::diviseur(0))->toBe([]);
        });
    });

    describe('Dataset ex', function () {
        test('somme', function ($a, $b, $c){
            expect(\Exercice\Math::sum($a, $b))->toBe($c);
        })->with('somme_nb');
    });

    describe('Exception test', function () {
        test('division par zero', function () {
            expect(function () {
                \Exercice\Math::divisorTwoNumber(0, 0);
            })->toThrow(\DivisionByZeroError::class);
        });
    });