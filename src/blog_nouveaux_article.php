<?php

include dirname(__DIR__).'\src\init.php';

$page_contenu = <<<formulaireArticle
<div class="row">
  <form action="" method="post" class="col-md-6 offset-md-3">
    <h3 class="text-center"> Editeur d'article</h3> 
    <input type="text" name="titre" placeholder="entrez un titre" class="form-control mb-2" required>
    <input type="text" name="auteur" placeholder="entrer un auteur" class="form-control mb-2" required>

    <input type="hidden" name="ma_upload_size" value="2097152">
    <input type="file" name="photo" placeholder="sélectionner une photo pour votre article" class="form-control mb-2" required>
    <p class="mb-2">L'image dot faire moins de 2 Mo</p>

    <textarea name="contenu" class="form-control mb-2" placeholder="contenu de votre article" cols="30" rows="7" required></textarea>
    <div class="text-center">
      <button type="submit" class="btn btn-primary justify-content">Soumettre</button>
    </div>
  </form>
</div>
formulaireArticle;

include dirname(__DIR__).'\src\layout.php';

?>