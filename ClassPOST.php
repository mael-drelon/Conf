<html>
    <?php require("IndexPOST.php");
    ?>
        <head>
            <title>exercice</title>
        </head>
    <body>
        <form action="utilisateur.php" method="POST">
            <label >Identifiant</label>
            <input type="text" name="nom_user">
            <p></p>
            <label >MDP</label>
            <input type="password" name="mdp">
            <p></p>
            <label>Confimation du mot de passe</label>
            <input type="password" name="mdp1">
            <input type="submit">

            <?php
                 if(empty($_POST['user'])&& empty($_POST['mdp']))
                {

                }else if($_POST['mdp']==$_POST['mdp1'])
                {
                    $admin = new utilisateur();
                    $admin->inscription($_POST['user'] ,$_POST['mdp']);
                    echo"Inscription validée";
                }else{
                    echo"mot de passe ou nom d'utilisateur incorrect";
                }
            ?>
        </form>
    </body>
</html>