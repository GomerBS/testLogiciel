<?php

    describe('Exercice sur la base de données', function () {


        test('Enregistrement article 3', function (){
            $article = new \Exercice\DBExercice();
            $result = $article->Enregistrement(3, 'ppp', 10.0);
            expect($result)->toBeArray();
        })->skip();

        test('Enregistrement article 2', function (){
            $article = new \Exercice\DBExercice();
            $result = $article->Enregistrement(4, 'pp', 10.0);
            expect($result)->toBeArray();
        })->skip();

        test('Enregistrement article 1', function (){
            $article = new \Exercice\DBExercice();
            $result = $article->Enregistrement(6, 'ch', 10.0);
            expect($result)->toBeArray();
        });


        test('Affichage des articles', function (){
            $article = new \Exercice\DBExercice();
            $articles = $article->afficherArticles();
            expect($articles)->dd();
        })->skip('temporarily unavailable');
    });