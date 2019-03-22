<?php 
	class membermodel extends model{

		public function userchk($id, $pw = false){
			$this->sql = "SELECT * FROM member where id='{$id}'";
			if ($pw) $this->sql .= " and pw='{$pw}'";
			return $this->fetch();
		}

	 	public function login(){
	 		extract($_POST);
	 		$member = $this->userchk($id,$pw);
	 		access($member == "", "아이디 또는 비번 틀림");
	 		$_SESSION['member'] = $member;
	 		alert("로그인완료");
	 		move('/');
		}

		public function join() {
			extract($_POST); 
			$this->userchk($id);
			access($this->userchk($id) != "","아이디가 중복됨");
			$this->sql = "INSERT INTO member set id='{$id}', pw='{$pw}', name='{$name}', nickname='{$nickname}', date=now(), level=1";
			$this->query();
			alert("완료");
			move("/");
		}
	}