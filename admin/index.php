<?php
  session_start();
  if(isset($_SESSION['id'])) {
    header('Location: dashboard.php');
  }

  require_once "../vendor/autoload.php";
  $login = new App\classes\Login();
  $message = "";
  if(isset($_POST['btn'])){
    $message = $login->adminLoginCheck($_POST);
  }

 ?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Login</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container" style="margin-top: 200px">
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <div class="card">
                      <div class="card-title">
                        <p align=center><i><b>Admin Pannel</b></i></p>
                      </div>
                        <div class="card-body">
                          <h3><?php echo "$message"; ?></h3>
                            <form action="" method="POST">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"  class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control" id="inputPassword3">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" name="btn" class="btn btn-success btn-block">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
