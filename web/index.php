<?php

define('ROOT_DIR', dirname(__FILE__) . '/..');
define('APP', 'frontend');
require_once(dirname(__FILE__) . '/../lib/lekoi/core/config.php');
$context = lkContext::getInstance();
$context->controller->dispatch();
?>