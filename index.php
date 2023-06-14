<?php 
    session_start();
    include 'connection.php';
    include 'encryption.php';

    $sql = 'Select * from users';
    $users = $conn->query($sql);
    
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Simple Todolist</title>
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
        <div class="row">
            <div class="col-md-12">
                <h1>
                    Users
                    <button type="button" class="btn btn-primary btn-sm float-right mt-3" data-toggle="modal" data-target="#modelId">
                        Add new User
                    </button>
                </h1>
            </div>
            <div class="col-md-12">
                <?php if(isset($_SESSION['flash_message'])){ ?>
                    <div class="alert <?php echo $_SESSION['flash_message']['alert']; ?>" role="alert">
                        <?php echo $_SESSION['flash_message']['msg']; ?>
                    </div>
                <?php } ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Action(s)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $users->fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td> 
                            <td><?php echo $row['email']; ?></td> 
                            <td><?php echo $row['phoneNumber']; ?></td> 
                            <td>
                                <a href="editUser.php?id=<?php echo encrypt($row['id'],'SecretKey'); ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="deleteUser.php?id=<?php echo encrypt($row['id'],'SecretKey'); ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
      </div>
       
    
       <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register New User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="createUser.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name" id="name"  aria-describedby="helpUser" placeholder="Please enter you name" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email"  id="email" aria-describedby="helpUser" placeholder="Please enter you email address" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber">phoneNumber</label>
                                    <input type="text" class="form-control" name="phoneNumber"  id="phoneNumber" aria-describedby="helpUser" placeholder="Please enter you phone number" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" id="password" aria-describedby="helpUser" placeholder="Please enter you password address" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
       </div>                     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php unset($_SESSION['flash_message']); ?>     
  </body>
</html>