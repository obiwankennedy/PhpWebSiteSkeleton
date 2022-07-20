<?php

session_start();
$title="Home";
$body="";
$currentLang=array();

require_once("security/index.php");
require_once("include/libphp/lib.php");


if(!empty($_GET['path']))
{
 $currentPage = $_GET['path'];
 $currentPath = explode('/',$_GET['path']);
}
else
	$currentPage="default";
    

$description="";

// Select css
$css='vtr';

//Parse the url to know which page should be displayed:
$includedpage = "";
if((!empty($currentPage)&&($currentPage!="/")))
{
	
	if(file_exists('modules/'.$currentPage.".php"))
	{
		$includedpage = 'modules/'.$currentPage.".php";
	}
	else if(file_exists('modules/'.$currentPage."/index.php"))
    {
		$includedpage = 'modules/'.$currentPage."/index.php";
    }
    else if(file_exists('modules/'.$currentPath[0].".php"))
    {
        $includedpage = 'modules/'.$currentPath[0].".php";
    }
    else if(file_exists('modules/'.$currentPath[0]."/index.php"))
    {
        $includedpage = 'modules/'.$currentPath[0]."/index.php";
    }
    else if(file_exists('modules/'.$currentPath[0].'/'.$currentPath[0].'.php'))
    {
        $includedpage = 'modules/'.$currentPath[0].'/'.$currentPath[0].'.php';
    }
	
}
else
	$includedpage = "modules/default/index.php";
	


if(strpos($includedpage,"modules/api")=== false)
{

require_once($includedpage);


//menu
require_once("menu.php"); 

//template
require_once("include/template/template_z.html"); 
}
else
{
    // include api to allow ajax 
    require_once($includedpage);
}

?>
