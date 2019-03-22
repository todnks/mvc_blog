<?php 
	class member extends controller{

		public function join() {
			memberchk();
			if(isset($_POST['action'])){
				$this->model->join();
			}
		}

		public function login() {
			memberchk();
			if(isset($_POST['action'])){
				$this->model->login();
			}
		}

		public function logout() {
			session_destroy();
			alert('로그아웃');
			move('/');
		}
	}