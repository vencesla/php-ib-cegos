<?php

class Contact {
    private $nom;
    private $prenom;
    private $email;

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function sePresenter() {
        echo sprintf("Je m'appelle %s %s et mon email est %s.", $this->getPrenom(), $this->getNom(), $this->getEmail());
    }
}


$contact = new Contact();

$contact->setNom('DUPONT');
$contact->setPrenom('Jean');
$contact->setEmail('jdupont@example.com');

$contact->sePresenter();
?>