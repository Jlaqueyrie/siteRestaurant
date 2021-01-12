<?php

include dirname(__DIR__).'\src\init.php';


//if le connecteur bdd n'existe pas
if(!$conn_bdd){
  printf("erreur de connection à la base de donnée; Erreur serveur: %s", mysqli_connect_error());
  exit();
  //redirection vers page accueil
}
//verification champ formulaire
if($_FILES['photo']['error']){

  switch($_FILES['photo']['error']){
    case 0:

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

if((isset($_FILES['photo']['name'])) && ($_FILES['photo']['error'] == UPLOAD_ERR_OK)){
  //deplacer l'image du dossier temporaire vers le dossier de destination  
  $p_dest = dirname(__DIR__).'/www/img/';
  if(move_uploaded_file($_FILES['photo']['name'], $p_dest.$_FILES['photo']['name'])){
    //déplacement ok
    printf('déplacement fichier ok');
  }
  else{
    //déplacement nok
    printf('erreur déplacement fichier photo');
    var_dump($_FILES);
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