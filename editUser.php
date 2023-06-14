<?php
    include_once('connection.php');
    include_once('encryption.php');

    $id = $_GET['id'];

    $id = decrypt($id,'SecretKey');

    // echo $id;

    $query = "select * from users where id = $id";
    $result = $conn->query($query);

    $row = $result->fetch_assoc();
    $user = $row;
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="#" class="navbar-brand">Logo</a>
        <button class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Users</a></li>
                <li class="nav-item"><a href="tasks.php" class="nav-link">Tasks</a></li>
            </ul>
        </div>
      </nav>

      <div class="container">
        <form action="updateUser.php" method="post">    
        <div class="row">
            <div class="col-md-12">
                <h1>
                    Edit User
                </h1>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" value="<?php echo $row['name'] ?? ''; ?>" class="form-control" name="name" id="name" aria-describedby="helpUser" placeholder="Please enter you name" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" value="<?php echo $row['email'] ?? ''; ?>" class="form-control" name="email" id="email" aria-describedby="helpUser" placeholder="Please enter you email address" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phoneNumber">phoneNumber</label>
                            <input type="text" class="form-control" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?? ''; ?>" id="phoneNumber" aria-describedby="helpUser" placeholder="Please enter you phone number" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
    </form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>