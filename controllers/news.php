<?php

class News {
	private $method;
	private $id;
	private $model;
	private $view;

	public function __construct($method, $id) {
		$this->model = new NewsModel();
		$this->view = new NewsView();
	}
	
	public function get($key) {
		return $this->$key;
	}
	
	public function set($key, $value) {
		$this->$key = $value;
	}


}

?>
