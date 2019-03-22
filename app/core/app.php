<?php 
	Class app{

		private static $param;

		public function __construct(){
			if (isset($_GET['param'])) $get = explode('/',$_GET['param']);
			$this->type = isset($get[0]) && strlen($get[0]) ? $get[0] : "main";
			$this->page = isset($get[1]) && strlen($get[1]) ? $get[1] : NULL;
			$this->idx = isset($get[2]) && strlen($get[2]) ? $get[2] : NULL;
			$this->pageNum = isset($_GET['page']) && strlen($_GET['page']) ? $_GET['page'] : "1";
			$this->member = isset($_SESSION['member']) ? $_SESSION['member'] : NULL;
			self::$param = $this;
		}
		public function getparam(){
			self::$param = new app();
			return self::$param;
		}
	}