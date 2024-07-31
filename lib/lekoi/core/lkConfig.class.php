<?php

/**
 * Enter description here...
 * @package lekoi.core
 */
class lkConfig {
	function getInstance() {
		static $instance = null;
		if (is_null($instance)) {
			$instance = lkConfig::load(APP_CONFIG_DIR . '/config.yml');
		}
	}
	
	function load($fileName) {
		$config = new lkConfig();
		$config->get = Spyc::YAMLLoad($fileName);
		return $config;
	}

}

?>
