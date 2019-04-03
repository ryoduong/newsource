<?php

	session_start();

	error_reporting(0);

	$session=session_id();

	// comment code abc
	/// test commit code conflic

	@define ( '_template' , './templates/');

	@define ( '_source' , './sources/');

	@define ( '_lib' , './admin/lib/');

	

	include_once _lib."Mobile_Detect.php";

	$detect = new Mobile_Detect;

	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

	

	$lang_default = array("","en");

	if(!isset($_SESSION['lang']) or !in_array($_SESSION['lang'], $lang_default))

	{

		$_SESSION['lang'] = $company['lang_default'];

	}

	$lang=$_SESSION['lang'];



	require_once _source."lang$lang.php";	

	include_once _lib."config.php";

	include_once _lib."constant.php";

	include_once _lib."functions.php";

	include_once _lib."functions_for.php";	

	include_once _lib."class.database.php";

	include_once _lib."functions_user.php";

	include_once _lib."functions_giohang.php";

	include_once _lib."file_requick.php";

	include_once _source."counter.php";	



?>



<!doctype html>

<html style="background-color: #000" lang="vi">



<head itemscope itemtype="http://schema.org/WebSite">

	<base href="http://<?=$config_url?>/" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">   

	<?php include _template."layout/seoweb.php";?>

	<?php include _template."layout/js_css.php";?> 

    <?=$company['codethem']?>       

</head>



<?php include _template."layout/background.php";?>

<body <?=$str_background?>>

<!-- <div id="pre-loader"><div class="loader"></div></div> -->

<h1 class="vcard fn" style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $company['title'];?></h1>

<h2 style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $company['title'];?></h2>

<h3 style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $company['title'];?></h3>



<?php //include _template."layout/pupop.php";?>

<?php //if($com == '' || $com == 'index'){?>

<div id="wapper">


    <div id="main_content">

        <?php include _template.$template."_tpl.php"; ?> 
        <div class="clear"></div>

    </div><!---END #main_content-->

</div><!---END #wapper-->

</body>

</html>