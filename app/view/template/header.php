<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Todo Blog</title>
    <link href="<?php echo _CSS ?>/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo _CSS ?>/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo _CSS ?>/main.css" rel="stylesheet">
</head>

<body>
	<header id="header">  

        <!-- topicon -->    
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        
        <!-- navigation -->
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <a class="navbar-brand" href="/">
                    	<h1><img src="<?php echo _IMG; ?>/logo.png" alt="logo"></h1>
                    </a>
                </div>
                <div class="pull-right">
                    <ul class="navi">
                        <?php if (!$this->param->member): ?>
                        <li>
                            <a href="/member/login" title="로그인">
                                로그인
                            </a>
                        </li>
                        <li>
                            <a href="/member/join" title="회원가입">
                                회원가입
                            </a>
                        </li>
                        <?php else: ?>
                        <li>
                            <a href="/member/logout" title="로그아웃">
                                로그아웃
                            </a>
                        </li>
                        <li>
                            <a href="/board/myblog/php" title="내 블로그">
                                내 블로그
                            </a>
                        </li>
                        <li>
                            <a href="/board/preferences" title="블로그관리">
                                블로그관리
                            </a>
                        </li>
                        <?php endif ?>
                    </ul>
                </div>
           </div> 
        </div>
      
    </header>
    
    <!-- visual -->
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>We Are Creative <br>Web Programers.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                        <a href="#" class="btn btn-common">SIGN UP</a>
                    </div>
                    <img src="<?php echo _IMG; ?>/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="<?php echo _IMG; ?>/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="<?php echo _IMG; ?>/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="<?php echo _IMG; ?>/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="<?php echo _IMG; ?>/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
    </section>
