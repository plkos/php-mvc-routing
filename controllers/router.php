<?php

class Router extends MainController {
	private $route = '';
	private $controller;
	private $method;
	private $id;

	public function __construct($route) {
		$this->route = $route;
		$this->parseRoute();
	}

	public function parseRoute() {
		list($this->controller, $this->method, $this->id) = explode("/", $this->route, 3);
	}
	
	public function get($key) {
		return $this->$key;
	}
	
	public function set($key, $value) {
		$this->$key = $value;
	}

}

?>
