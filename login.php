<?php
include "inc/header.php";
require_once("app.php");
?>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<div class="card-body px-5 py-5" style="background-color:darkgray;">


<?php if($session->getSession("error")){ ?>
  <div class="alert alert-danger"><?= $session->getSession("error") ?></div>
<?php }
  // $session->deleteSession($session->getSession("error"));
  unset($_SESSION["error"]);
 ?>

              
                <h3 class="card-title text-left mb-3">Login</h3>
                <form action="handlers/handleLogin.php" method="post">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control p_input" >
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control p_input" >
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <br>
                  </div>
                  <div class="form-check">
                    </div>
                  <div class="text-center">
                    <button type="submit" name="login" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <br>

                  <p class="sign-up text-center">Don't have an Account?<a href="register.php"> Register</a></p>
                  <br>
                  <br>

                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <?php include "inc/footer.php" ?>
