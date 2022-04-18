<?php
include('user.php');

$ID = $_REQUEST['id'];


$dltuser = new User();


$viewuser = $dltuser->deleteuser($ID);
