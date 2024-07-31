<?php

/**
 * Enter description here...
 * @package lekoi.generator
 */
class lkSchema {
	function getInstance() {
		static $instance = null;
		if (is_null($instance)) {
			$instance = lkSchema::load(CONFIG_DIR . '/schema.yml');
			$instance->init();
		}
		return $instance;
	}
	
	function init() {
		$this->set('pageGenerator', new lkPageGenerator());
	}
	
	function generate() {
		
	}
	
	function buildModel() {
		
	}
	
	function buildSql() {
		
	}
	
	function generateCrud() {
		
	}
	
	function buildController() {
		
	}
	
	function buildView() {
		
	}
	
	function buildDao() {
		
	}

}

?>
