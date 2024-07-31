<?php

/**
 * Enter description here...
 * @package lekoi.core
 */
define('APPS_DIR', ROOT_DIR . '/apps');

define('APP_DIR', APPS_DIR . '/' . APP);
define('APP_CONFIG_DIR', APP_DIR . '/config');
define('CONTROLLERs_DIR', APP_DIR . '/controllers');
define('VIEWS_DIR', APP_DIR . '/views');

define('LIB_DIR', ROOT_DIR . '/lib');

define('LEKOI_DIR', LIB_DIR . '/lekoi');
define('SPYC_DIR', LIB_DIR . '/spyc');

define('CORE_DIR', LEKOI_DIR . '/core');
define('GENERATOR_DIR', LEKOI_DIR . '/generator');
define('HELPER_DIR', LEKOI_DIR . '/helper');
define('TEMPLATES_DIR', LEKOI_DIR . '/templates');

define('DEFAULT_TEMPLATE_DIR', TEMPLATES_DIR . '/default');
define('GENERATOR_TEMPLATE_DIR', TEMPLATES_DIR . '/generator');

require_once(HELPER_DIR . '/IOHelper.php');
require_once(SPYC_DIR . '/spyc.php');
require_once_dir(HELPER_DIR);
require_once_dir(CORE_DIR);
require_once_dir(CONTROLLERs_DIR);
?>