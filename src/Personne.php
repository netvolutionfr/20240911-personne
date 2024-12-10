<?php

class Personne {
    // Attributs
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $taille; // en cm
    private $poids; // en kg
    private $cheveux;

    // Constructeur
    public function __construct($nom, $prenom, $dateNaissance, $taille, $poids, $cheveux) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->taille = $taille;
        $this->poids = $poids;
        $this->cheveux = $cheveux;
    }

    // Méthode pour calculer l'IMC
    public function imc() {
        // Conversion de la taille de cm à m
        $tailleEnMetres = $this->taille / 100;
        // Calcul de l'IMC : poids / (taille en mètres)^2
        return $this->poids / ($tailleEnMetres * $tailleEnMetres);
    }

    // Méthode pour afficher les informations de la personne
    public function afficherInformations() {
        echo "Nom : " . $this->nom . "\n";
        echo "Prénom : " . $this->prenom . "\n";
        echo "Date de naissance : " . $this->dateNaissance . "\n";
        echo "Taille : " . $this->taille . " cm\n";
        echo "Poids : " . $this->poids . " kg\n";
        echo "Couleur de cheveux : " . $this->cheveux . "\n";
        echo "IMC : " . $this->imc() . "\n";
    }
}
