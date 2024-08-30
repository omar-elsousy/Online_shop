
<?php
include "inc/header.php";
require_once("app.php");
?>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<div class="card-body px-5 py-5" style="background-color:darkgray;">

<?php if($session->getSession("errors")){ 
          foreach($session->getSession("errors") as $error ){
            ?> <div class="alert alert-danger"><?php echo $error ?></div>
         
<?php } }
  // $session->deleteSession($session->getSession("errors"));
  unset($_SESSION["errors"]);
 ?>

                <h3 class="card-title text-left mb-3">Register</h3>
                <form action="handlers/handleRegister.php" method="post">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control p_input" name="name" >
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control p_input" name="email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control p_input" name="password">

                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control p_input"name="phone">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control p_input" name="address">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    </div>
                    <div class="form-check">
                    </div>
                     <br>
                     <div class="text-center">
                    <button type="submit" name="register" class="btn btn-primary btn-block enter-btn">Register</button>
                  </div>
                  <br>
                  <p class="sign-up text-center">Already have an Account?<a href="login.php"> Login</a></p>
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

