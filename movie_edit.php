<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>

  <form method="post" action="movie_save.php">
    <div class="mb-3">
      <label for="name" class="form-label">Nom</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="mb-3">
      <label for="release" class="form-label">Sortie</label>
      <input type="date" class="form-control" id="release" name="release">
    </div>

    <div class="mb-3">
      <label for="duration" class="form-label">Durée</label>
      <input type="number" class="form-control" id="duration" name="duration">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</body>

</html>