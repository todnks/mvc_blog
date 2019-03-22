<?php 
	session_start();

	function alert($msg){
		echo "<script>alert('{$msg}')</script>";
	}

	function move($url = false){
		echo "<script>";
		echo $url ? "location.replace('{$url}');" : "history.back();";
		echo "</script>";
		exit;
	}

	function access($bool,$msg,$url = false){
		if($bool){
			alert($msg);
			move($url);
		}
	}

	function loginchk(){
		access(!isset($_SESSION['member']),"로그인후에 이용가능합니다");
	}

	function memberchk(){
		access(isset($_SESSION['member']),"로그인후에는 이용불가능합니다");
	}

	function __autoload($className){
		$className2 = strtolower($className);
		switch ($className2) {
			case 'app':
			case 'controller':
			case 'model':
				$path = _CORE;
				break;
			default:
			 	$path = strpos($className2,"model") ? _MODEL : _CTR;	
				break;
		}
		require_once("{$path}{$className2}.php");
	}