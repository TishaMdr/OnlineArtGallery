<!--PARSIDHA bsdk SIR-->
<?php 

include 'config.php';

session_start();

error_reporting(0);

if (!isset($_SESSION['admin_name'])) {
    header("Location: adminlogin.php");
}


?>