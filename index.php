<?php 
	
	define("_ROOT",__DIR__."/");
	define("_APP",_ROOT."app/");
	define("_CONFIG",_APP."config/");
	define("_CORE",_APP."core/");
	define("_CTR",_APP."controller/");
	define("_VIEW",_APP."view/");
	define("_MODEL",_APP."model/");
	define("_TEM",_VIEW."template/");
	
	define("_URL","http://{$_SERVER['HTTP_HOST']}"."/");

	define("_CSS",_URL."public/css");
	define("_IMG",_URL."public/images");
	define("_JS",_URL."public/js");
	require_once(_CONFIG."lib.php");

	new app();
	controller::start();
