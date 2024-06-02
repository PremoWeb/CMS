<?php

require __DIR__ . '/vendor/autoload.php';

use PremoWeb\CMS\CMS;

$cms = new CMS();

// Display welcome message
echo $cms->welcome() . "<br>";

// // Use methods from UserManagement trait
// $cms->createUser();
// $cms->deleteUser();

// // Use methods from ContentManagement trait
// $cms->createPost();
// $cms->deletePost();