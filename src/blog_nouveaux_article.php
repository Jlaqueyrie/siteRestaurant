<?php

include dirname(__DIR__).'\src\init.php';


//if le connecteur bdd n'existe pas
if(!$conn_bdd){
  printf("erreur de connection à la base de donnée; Erreur serveur: %s", mysqli_connect_error());
  exit();
  //redirection vers page accueil
}
//verification champ formulaire
if(!empty($_POST['titre']) && !empty($_POST['auteur']) && !empty($_POST['contenu'])){

  if($_FILES['photo']['error']){

    switch($_FILES['photo']['error']){
      case 1:
        printf('taille du fichier supérieur à la limite');
        break;
      case 2:
        printf('taille du fichier trop grande');
      case 3:
        printf('envoi du fichier interrompue durant le transfert');
      case 4:
        printf('taille du fichier nulle');

    }
  }
  else{

    if((isset($_FILES['photo']['name'])) && ($_FILES['photo']['error'] == UPLOAD_ERR_OK)){
      //deplacer l'image du dossier temporaire vers le dossier de destination  
      $p_dest = dirname(__DIR__).'/www/images/';
      move_uploaded_file($_FILES['photo']['tmp_name'], $p_dest.$_FILES['photo']['name']);
      //déplacement ok
      $sql_insert = "INSERT INTO 
                    article(titre,auteur,date,image,contenu)
                    VALUES
                    ('".htmlentities(addslashes($_POST['titre']),ENT_QUOTES)."',
                    '".htmlentities(addslashes($_POST['auteur']),ENT_QUOTES)."',
                    '".date("Y-m-d H:i:s")."',
                    '".$_FILES['photo']['name']."',
                    '".htmlentities(addslashes($_POST['contenu']),ENT_QUOTES)."'
                    )";

      if($sql_send_res = mysqli_query($conn_bdd,$sql_insert)){
        printf('<div class="alert alert-success text-center">Votre article a bien été mis en ligne</div>');
      }
      else{
        printf('<div class="alert alert-danger text-center">Erreur dans la sauvegarde de l\'article en base de donnée</div>');
      }
      mysqli_close($conn_bdd);
    }
    else{
      printf('<div class="alert alert-danger text-center">Le fichier n\'a pas été sauvegardé.</div>');
    }
  }
}

  
$page_contenu = <<<formulaireArticle
<div class="row">
  <form action="" method="post" class="col-md-6 offset-md-3" enctype="multipart/form-data">

    <h3 class="text-center"> Editeur d'article</h3> 
    <input type="text" name="titre" placeholder="entrez un titre" class="form-control mb-2" required>
    <input type="text" name="auteur" placeholder="entrer un auteur" class="form-control mb-2" required>

    <input type="hidden" name="ma_upload_size" value="2097152">
    <input type="file" name="photo" placeholder="sélectionner une photo pour votre article" class="form-control mb-2" required>
    <p class="mb-2">L'image doit faire moins de 2 Mo</p>

    <textarea name="contenu" class="form-control mb-2" placeholder="contenu de votre article" cols="30" rows="7" required></textarea>
    <div class="text-center">
      <button type="submit" class="btn btn-primary justify-content">Soumettre</button>
    </div>
  </form>
</div>
formulaireArticle;

include dirname(__DIR__).'\src\layout.php';

?>