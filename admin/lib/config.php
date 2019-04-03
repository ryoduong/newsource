<?php if(!defined('_lib')) die("Error");



	error_reporting(E_ALL & ~E_NOTICE & ~8192);

	$config['database']['servername'] = 'localhost';

	$config_url=$_SERVER["SERVER_NAME"].'/thongke';

	$config['database']['database'] = 'duongadmin';	

	$config['database']['username'] = 'root';

	$config['database']['password'] = '';

	$config['database']['refix'] = 'table_';

	$meta_robots = 'NOINDEX, NOFOLLOW';

	

	$ip_host = '127.0.0.1';

	$mail_host = 'hotro@huynhdu.com';

	$pass_mail = 'I91wAj9Rqw';



	$config['lang']=array(''=>'Tiếng Việt');#Danh sách ngôn ngữ hỗ trợ

	

	date_default_timezone_set('Asia/Ho_Chi_Minh');



?>