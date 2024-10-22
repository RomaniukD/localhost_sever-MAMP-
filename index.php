<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP web site</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<?php require "blocks/header.php" ?>

<div class="contaier mt-5">
    <h3 class="mb-5">Naszy Artyculy</h3>
    <div class="d-flex flex-wrap">
    <?php
    for($i=0; $i<5; $i++):
    ?>
   <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Free</h4>
      </div>
      <div class="card-body">
        <img src="img/<?php echo ($i +1) ?>.png" class="img-thumbnail">
        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>10 users included</li>
          <li>2 GB of storage</li>
          <li>Email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Szczegóły</button>
      </div>
    </div>

    <?php endfor; ?>
    </div>

</div>

<?php require "blocks/footer.php"?>

</html>