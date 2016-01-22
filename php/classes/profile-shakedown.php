<?php
require_once("/etc/apache2/capstone-mysql/encrypted-config.php");
require_once("profile.php");

$profile = new Profile(null, 1, "this is from PHP");
$profile->insert($pdo);
$profile->setProfile("now I changed the message");
$profile->update($pdo);
$profile->delete($pdo);
