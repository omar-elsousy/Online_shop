<?php
require_once("../app.php");
unset($_SESSION['userId']);
$request->redirect("../login.php");
