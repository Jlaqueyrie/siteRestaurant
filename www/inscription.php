<?php
    include dirname(__DIR__).'\src\connect_bdd.php';

    if(!empty($_POST['pseudo']) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirmation'])){
        $f_pseudo = $_POST['peudo'];
        $f_email = $_POST['email'];
        $f_password= $_POST['password'];
        $f_password_conf= $_POST['password_confirmation'];
        $f_date_creation = date('Y,m,d h:i:s');

        //verif mdp
        if(!$f_password != $f_password_conf){
            header('location:../www/inscription.php?error=1&pass=1');
            exit();
        }
        //verif doublon email
        $sql_req_email = $conn_bdd_pdo ->prepare("SELECT COUNT(*) AS nbrDoublon FROM utilisateur WHERE email = ?");
        $sql_req_email->execute(array($f_email));

        while($email_verif = $sql_req_email->fetch()){

            if($email_verif['nbrDoublon'] != 0){
                header('Location:./www/inscription.php?error=1&email=1');
                exit();
            }

        }

        //cryptage mdp
        $password = "hyk9".sha1($password.time()."4855Ghj")."dhf9".time();
        //envoie des info en bdd
        $sql_rep_sauv_pwd = $conn_bdd_pdo ->prepare("INSERT INTO utilisateur(pseudo,email,password,date_creation) VALUES(?,?,?,?)");
        $sql_rep_sauv_pwd -> execute(array($f_pseudo,$f_email,$f_password,$f_date_creation));
        header('Location:../www/inscription.php?success=1');
        exit();
 }
?>
<section id="inscription" class="col-md-6 offset-md-3">
    <?php
        if(isset($_GET['error'])){
            if(isset($_GET['pass'])){
                printf("<p class=\"alert alert-danger\">les mot de pass ne sont pas identiques</p>");
            }
            else if(isset($_GET['email'])){
                printf("<p class=\"alert alert-danger\">Cette adresse email est déjà utilisé pa run autre utilisateur</p>");
            }
        }
        else if(isset($_GET['sucess'])){
            printf("<p class=\"alert alert-succes\">Votre inscription a bien été prise en compte</p>");
        }
    ?>
    <form action="inscription.php" method="post">
        <h3 class="mb-2">Veuillez compléter les champ suivant<h3>
        <input type="text" name="pseudo" placeholder="Votre pseudo" class="form-control mb-2" required>
        <input type="email" name="email" placeholder="Votre email" class="form-control mb-2" required>
        
        <input type="password" name="password" placeholder="entrez votre mot de pass" class="form-control mb-2" required>
        <input type="password" name="password-confirmation" placeholder="entrez votre mot de pass" class="form-control mb-2" required>

        <button type="submit" class="form-control">s'inscrire</button>
    </form>
</section>