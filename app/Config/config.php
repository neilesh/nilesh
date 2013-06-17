<?php 
error_reporting(0);
session_start();
session_regenerate_id (true);
 //var_dump($_COOKIE);
//session_destroy();
// Include DAL
//require_once(dirname(dirname(__FILE__)) . '/inc/class/DAL.php');
//var_dump($_SERVER);
// site configuration variable
if($_SERVER['HTTP_HOST']=="localhost")
{
define ( 'SITE_URL', 'http://localhost/CP/' );
}
else
{
define ( 'SITE_URL', 'https://tmgsdccpqa.inservices.tatamotors.com/bb/' );
}

define ( 'CLASS_DIR', SITE_URL.'app/webroot/class/' );
define ( 'FILES_DIR', SITE_URL.'app/webroot/files/' ); //js directory path
define ( 'JS_DIR', SITE_URL.'app/webroot/js/' ); //js directory path
define ( 'IMAGE_DIR', SITE_URL.'app/webroot/img/' );  //images directory path
define ( 'FORM_TRANSFORM', SITE_URL.'inc/jqtransformplugin/' );  //form element transform directory path
define ( 'CSS_DIR', SITE_URL.'app/webroot/css/' );
define ( 'ACTION_DIR', SITE_URL.'app/webroot/action/' );
define ( 'USER_ID');
define('MERCHANT_ID','TATAMOTVEH');
define('SECURITY_ID','tatamotveh');
define('CHECKSUM_KEY','gCP4RFEtwCPk');
define('TEST_MODE','N');
define('DIR_STRUCT','');
if($_SERVER['HTTP_HOST']=="localhost")
{
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("buynano", $con);
}
else
{
$con = mysql_connect("localhost","buynano","buynano");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("buynano", $con);
}


/*$url = parse_url('https://example.org');

if($url['scheme'] == 'https'){
   // is https;
}*/
?>
