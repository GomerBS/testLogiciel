<?php

    test('Transform maj to min and min to maj', function() {
       expect(\Exercice\Chaine::transformers('bonJOUR'))->toBe('BONjour');
    });

    test('Transform all min to maj', function() {
       expect(\Exercice\Chaine::transformers('bonjour'))->toBe('BONJOUR');
    });

    test('Transform all maj to min', function() {
       expect(\Exercice\Chaine::transformers('BONJOUR'))->toBe('bonjour');
    });

    test('Transform first char min to maj', function() {
       expect(\Exercice\Chaine::transformers('bONJOUR'))->toBe('Bonjour');
    });

    test('Transform two char in maj ', function() {
       expect(\Exercice\Chaine::transformers('bonJOUR'))->toBe('BONjour');
    });

    test('Transform two char first and last in maj ', function() {
       expect(\Exercice\Chaine::transformers('bONJOUr'))->toBe('BonjouR');
    });