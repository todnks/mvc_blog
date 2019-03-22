<?php 
	class controller{

		public function start(){
			$param = app::getParam();
			$type = $param->type;
			new $param->type;
			$ctr = new $param->type;
			$modelName = $param->type."model";
			$ctr->model = new $modelName();
			$ctr->index();
		}

		public function index(){
			$this->param = app::getParam();
			$page = isset($this->param->page) ? $this->param->page : NULL;
			$method = isset($page) ? $page : 'basic';
			if(method_exists($this, $method)) $this->$method();
			print_r($this);
			if($this->param->type != 'board'){

			include_once(_TEM."header.php");
			} else{

			}
			if($page){
				include_once(_VIEW."{$this->param->type}/{$this->param->page}.php");
			} else {
				include_once(_TEM."main.php");
			}
		}
	}