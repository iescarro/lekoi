<?php

/**
 * Enter description here...
 * @package lekoi.core
 */
class lkFrontController extends lkController {
	function dispatch() {
		echo $this->getControllerName() . '::' . $this->getActionName();
		if (class_exists($this->getControllerName())) {
			$controller = $this->getControllerName();
			$controller = new $controller;
			if (is_callable(array($controller, $this->getActionName()))) {
				
				extract(get_object_vars($controller));
				call_user_func(array($controller, $this->getActionName()));
			} else {
				$this->forward404();
			}
		} else {
			$this->forward404();
		}
	}

}

?>
