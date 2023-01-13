<?php
	error_reporting(E_ALL); @ini_set('display_errors', true);

	$pages = array(
		'0'	=> array('id'  => '0', 'alias' => '', 'file' => '0.php'),
		'1'	=> array('id'  => '1', 'alias' => 'home', 'file' => '0.php'),
		'2' => array('id'  => '2', 'alias' => 'content', 'file' => '2.php'),
		'3' => array('id'  => '3', 'alias' => 'about', 'file' => '3.php'),

		'404' => array('id'  => '404', 'alias' => '404', 'file' => '404.php'),
	);

	$page = '';
	$base_url = '/';
	$base_dir = dirname(__FILE__).'/..';
  include "$base_dir/src/services/functions.inc.php";
	$fl =  "$base_dir/views/base.php";

	$page = getFilePageByAlias($pages, getRoute($_SERVER['REQUEST_URI']));

	ob_start();

	if($page!=404)
  {
		$fl =  "$base_dir/views/pages/$page";
	}

  else
  {
		header("Content-type: text/html; charset=utf-8", true, 404);
		$fl =  dirname(__FILE__).'/../views/pages/404.php';
	}

	if (is_file($fl))
	{
		ob_start();
		include $fl;
		$out = ob_get_clean();
		echo $out;
	}
	else
	{
		echo "<!DOCTYPE html>\n";
		echo "<html>\n";
		echo "<head>\n";
		echo "<title>404 Not found</title>\n";
		echo "</head>\n";
		echo "<body>\n";
		echo "404 Not found\n";
		echo "</body>\n";
		echo "</html>";
	}

	ob_end_flush();

?>
