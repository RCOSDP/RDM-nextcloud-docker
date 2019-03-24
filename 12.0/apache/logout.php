<?php
require_once __DIR__ . '/lib/base.php';
\OC::$server->getUserSession()->logout();

header('Location: '.getenv('CAS_URL').'/logout/');
?>
