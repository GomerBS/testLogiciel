<?php

namespace Exercice;

use PDO;
use PDOException;

class DBExercice
{
    private $dbname = 'exercice';
    private $username = 'root';
    private $servername = 'localhost';
    private $password = '';
    private $con;

    public function __construct() {
        try {
            $this->con = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        }catch (PDOException $e){
            echo "la connexion avec la BD a echoué a cause de : ". $e->getMessage();
        }
    }

    public function Enregistrement($id, $designation, $prix) : array{
        $sql = "INSERT INTO articles(id, designation, prix) VALUES(:value1, :value2, :value3)";
        try {
            if($prix <= 0){
                echo "Erreur d'insertion : prix doit etre supérieur a 0";
            }else{
                $stmt = $this->con->prepare($sql);
                $stmt->bindValue(':value1', $id);
                $stmt->bindValue(':value2', $designation);
                $stmt->bindValue(':value3', $prix);
                $result = $stmt->execute();

                $sql2 = "SELECT * FROM articles";
                $stmt2 = $this->con->prepare($sql2);
                $stmt2->execute();

                return $stmt2;
            }

        }catch (PDOException $e){
            echo "Erreur d'insertion a cause de : ". $e->getMessage();
        }

        return [];
    }

    public function afficherArticles() : array{
        $sql = "SELECT * FROM articles";
        try {
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }catch (PDOException $e){
            echo "Erreur d'insertion a cause de : ". $e->getMessage();
        }

        return [];
    }
}