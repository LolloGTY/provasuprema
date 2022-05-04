<!DOCTYPE html>
<html lang="it">
  <head>
      <meta charset="it">
      <title>Form Mail</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
  <body>
    <div class="container mt-5">
        <h1>Contattaci</h1>
        <form action="send.php" method="POST">
            <div class="row">
                <div class="form-group col-6">
                    <input type="text" class="form-control" name="name" placeholder="Nome">
                </div>
                <div class="form-group col-6">
                    <input type="text" class="form-control" name="surname" placeholder="Cognome">
                </div>
                <div class="form-group col-6">
                    <input type="email" class="form-control" name="email" placeholder="Inserisci la tua mail">
                </div>
                <div class="form-group col-6">
                    <input type="text" class="form-control" name="object" placeholder="Oggetto">
                </div>
                <div class="form-group col-12">
                    <textarea name="message" cols="30" class="form-control" rows="10" placeholder="Testo del messaggio"></textarea>
                </div>
                <div class="form-group col-12">
                    <button class="btn btn-primary float-right">Invia Mail</button>
                </div>

            </div>
        </form>
    </div>
  </body>
</html>