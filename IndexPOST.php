<?php
class utilisateur
{
    private $_user;
    private $_ID;
    private $_mdp;

public function ins(){
    try
    {
        $BDD = new PDO('mysql:host=localhost; dbname=; charset=utf8','root','');
        $ins = $BDD->query('INSERT INTO ins (user, mdp) VALUES ("'$this->_Identifiant'","'$this->_MDP'")');
    }

    catch (Exception $erreur)
    {
        echo 'Erreur : '.$erreur->getmessage();
    }
}
}
?>