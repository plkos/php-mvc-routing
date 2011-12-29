<?php

abstract class MainController {
	private $method;
	private $id;
	
	abstract function get($key);
	abstract function set($key, $value);
}

?>
