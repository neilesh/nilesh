<?php
App::import('Nano/load.html');
App::import('Config/config');
//echo dirname(dirname(__FILE__)) . '/class/class.form_action.php';
include(dirname(dirname(__FILE__)) . '/class/class.form_action.php');
$form=new form_action('index');



$_SESSION['ArtifactKey']="MDFn+8e5dRDaRMRIwMY7nI84eEccbx+lIiXcGNLEXNu8XTtfJFcA407w";

$post_variable=$_POST;
$temp_host="";
$temp_host=$_SERVER['SERVER_NAME'];
$tem=""."www.".DOMAIN_URL;
//die();
if($temp_host==$tem)
{
$form->select_webservice($post_variable);
}
else
{
echo "<script>window.location.href='".SITE_URL."error.php';</script>";
}
?>