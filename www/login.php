<?php

    include dirname(__DIR__).'\src\init.php';
    $page_error = '';

//verification donnée
if(empty($_POST)=== false){
    echo 'debug';
    $form_u_id = $_POST['utilisateur_id'];
    $form_u_mdp = $_POST['utilisateur_mdp'];

    if($form_u_id == $utilisateur_id){

        if($form_u_mdp == $utilisateur_mdp){
            //gestion session utilisateur
            $_SESSION['s_utilisateur'] = $form_u_id;
            //redirectiond page
            header('Location:index.php');
            exit();
        }
        else{
            $error_msg = 'Erreur de mot de pass';
        }
    }
    else{
        $error_msg = 'utilisateur inconnu';
    }

}

if(!empty($page_error)){
    $page_error = '<div class=\"alert alert-danger\">{$error_msg}</div>';
}

$page_titre='<h1> entrer vos identifiant';
$page_contenu=
<<<formulaire_login

<form method="POST" action=""  class="col-md-6 offset-md-3">
    {$page_error}
    <input type='text' class="form-control mb-2" name="utilisateur_id" placeholder="entrez le nom d'utilisateur" required>
    <input type='text'  class="form-control mb-2" name="utilisateur_mdp" placeholder="entrez le mot de pass utilisateur" required>
    <button type="submit" class="btn btn-primary mb-2">connecter</button>

</form>

formulaire_login;

include dirname(__DIR__).'\src\layout.php';
?>