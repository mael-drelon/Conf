<?php
class utilisateur
{
    private $_user;
    private $_ID;
    private $_mdp;

public function inscription(){
    try
    {
        //execution du code sur la BDD 
        $BDD = new PDO('mysql:host=localhost; dbname=; charset=utf8','root','');
        $inscription = $BDD->query('INSERT INTO inscription (user, mdp) VALUES ("'$this->.$Identifiant.'","'$this->.$MDP.'")');

    }

    catch (Exception $erreur)
    {
        echo 'Erreur : '.$erreur->getmessage();
    }
}
}
?>