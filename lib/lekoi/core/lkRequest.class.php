<?php

/**
 * Enter description here...
 * @package lekoi.core
 */
class lkRequest {
	function getPathInfo() {
		return $_SERVER['PATH_INFO'];
	}
	
	function getModuleName() {
		list(, $module) = split('/', $this->getPathInfo());
		return $module;
	}
	
	function getActionName() {
		list(, , $action) = split('/', $this->getPathInfo());
		return $action;
	}

}

?>
