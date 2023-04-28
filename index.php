<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
      <div class="conatiner d-flex justify-content-center align-items-center" style="height:100vh;">
        <form action="AddUser.php" method="post">
          <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name</label>
            <input type="name" class="form-control" id="exampleInputName1" name="name">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Emial</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          </div>
          <div class="mb-3">
            <label for="exampleInputMobile1" class="form-label">Mobile</label>
            <input type="mobile" class="form-control" id="exampleInputMobile1" name="mobile">
          </div>
          <button type="submit" class="btn btn-primary">Add user</button>
        </form>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>