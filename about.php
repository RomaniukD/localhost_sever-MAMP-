<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Forma konta</title>
</head>
<body>
  <?php require "blocks/header.php" ?>
  <div class="container mt-5">

    <h3>Forma konta</h3>
    <form action="check.php" method="post">
      <input type="email" name="email" placeholder="Wpisz email" 
      class="form-control">
      <br>
      <textarea name="message" class="form-control"
      placeholder="Wpisz swoją wiadomość"></textarea>
      <br>
      <button type="submit" name="send" class="btn btn-success">Wyślij</button>
    </form>
  </div>
    
  <?php require "blocks/footer.php"?>
</html>