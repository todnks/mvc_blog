<?php 
	Class model{

		private $db;

		public function __construct(){
			$this->db = new PDO("mysql:host=localhost;dbname=0320;charset=utf8;","root","");
			$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

		}

		public function query($sql = false){
			if($sql) $this->sql = $sql;
			$res = $this->db->query($this->sql);
			if(!$res){
				echo "<pre>";
				print_r($this->db->errorInfo());
				print_r($this->sql);
				echo "</pre>";
			} else{
				return $res;
			}
			exit;
		}

		protected function fetch($sql = false){
			if($sql) $this->sql = $sql;
			return $this->query()->fetch();
		}
		protected function fetchAll($sql = false){
			if($sql) $this->sql = $sql;
			return $this->query()->fetch();
		}
		protected function cnt($sql = false){
			if($sql) $this->sql = $sql;
			return $this->query()->rowCount();
		}
	}