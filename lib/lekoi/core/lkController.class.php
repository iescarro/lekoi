<?php

/**
 * Enter description here...
 * @package lekoi.core
 */
class lkController {
	function getControllerName() {
		return ucfirst($this->context->request->getModuleName()) . 'Controller';
	}
	
	function getActionName() {
		return 'execute' . ucfirst($this->context->request->getActionName());
	}
	
	function forward404() {
		include(DEFAULT_TEMPLATE_DIR . '/404.php');
	}
	
	function forward404If($condition) {
		if ($condition) {
			$this->forward404();
		}
	}
	
	function forward404Unless($condition) {
		if (!$condition) {
			$this->forward404();
		}
	}

}

?>
