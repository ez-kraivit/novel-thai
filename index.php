<?php
require_once('vendor/autoload.php');
use Novels\Users;
$profile = Users::getprofile();

print_r($profile);
?>