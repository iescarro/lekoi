<?php

/**
 * Enter description here...
 * @package lekoi.core
 */
class lkContext {
	function getInstance() {
		static $instance = null;
		if (is_null($instance)) {
			$instance = new lkContext();
			$instance->init();
		}
		return $instance;
	}
	
	function init() {
		$this->set('config', lkConfig::getInstance());
		$this->set('session', new lkSession());
		$this->set('request', new lkRequest());
		$this->set('response', new lkResponse());
		$this->set('controller', new lkFrontController());
	}
	
	function set($name, $value) {
		$this->$name = $value;
		$this->$name->context = $this;
	}
	
	function getController() {
		return $this->controller;
	}
	
	function getRequest() {
		return $this->request;
	}
	
	function getResponse() {
		return $this->response;
	}
	
	function getSession() {
		return $this->session;
	}
	
	function getConfig() {
		return $this->config;
	}

}

?>
