<?php
//Based on AMP.DEV html template
//author: Constantine - evergarden.ru
	class AMPER extends Plugin {
	public function beforeSiteLoad(){
	global $url, $page, $site;
	if(isset($_GET["amp"])){
		if($url->whereAmI() == "page" && !$url->notFound()){
			include(__DIR__ . DS . "php" . DS . "amper.php");
	}
	}
	}
	public function siteHead()
	{
	global $page, $url;
	if($url->whereAmI() == "page" && !$url->notFound()){
		return '<link href="' . $page->permalink() . '?amp" rel="amphtml" />' . PHP_EOL;
	}
	}
}
