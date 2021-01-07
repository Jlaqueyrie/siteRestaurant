-<!doctype html>
<html lang="en">
  <head>
    <title>Nous Contacter</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     <main class="containter">
        <div class="row">
            <form method="POST" action="envoie-message.php" class="col-md-10 offset-md-1">
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
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
     </main> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>