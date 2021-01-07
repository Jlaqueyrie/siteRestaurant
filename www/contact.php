<?php
  include dirname(__DIR__).'\src\init.php';
  $page_contenu=
  '
    <h1 class="col-md-10 offset-1 text-center">Contactez  nous</h1>
    <form method="POST" action="../src/envoie-message.php" class="col-md-10 offset-md-1">
        <div class="form-group col-md-8 offset-md-2">
        <label for="in_nomClient" class="mb-2" id="lbl_nomClient">Entrez votre nom</label>
        <input type="text" class="form-control mb-2" id="in_nomClient" aria-describedby="entrez vôtre nom" name="in_nomClient" placeholder="Entrez votre nom" required>

        <label for="in_emailClient" class="mb-2">Entrez votre adresse email</label>
        <input type="email" class="form-control mb-2" id="in_emailClient" aria-describedby="entrez votre adresse email" name="in_emailClient" placeholder="Entrez votre adresse email" required>
        <label for="sujetMessage">Sujet de votre message</label> 
        <div class="input-group mb-2">
          <select class="custom-select" id="sujetMessage" name="opt_sujetMessage">
            <option selected>Choisisser..</option>
            <option value="Reservation">Réservation</option>
            <option value="Aliments">Aliments</option>
            <option value="Autre">Autre</option>
          </select>
        </div> 

        <div class="form-group mb-2">
          <textarea rows="10" class="form-control" id="message_client" name="txt_messageClient" placeholder="entrez votre message" required></textarea>
        </div>
        <div class="col-md-2 offset-md-5">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
      </div>
    </form>
  ';
  include dirname(__DIR__).'\src\layout.php';