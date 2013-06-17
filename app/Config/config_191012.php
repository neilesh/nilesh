<?php 
//error_reporting(0);
session_start();
session_regenerate_id (true);
//session_destroy();
// Include DAL
//require_once(dirname(dirname(__FILE__)) . '/inc/class/DAL.php');

// site configuration variable
//define ( 'SITE_URL', 'http://localhost/bb/' );
define ( 'SITE_URL', 'https://tmgsdccpqa.inservices.tatamotors.com/bb/' );
define ( 'CLASS_DIR', SITE_URL.'inc/class/' );
define ( 'FILES_DIR', SITE_URL.'inc/files/' ); //js directory path
define ( 'JS_DIR', SITE_URL.'inc/js/' ); //js directory path
define ( 'IMAGE_DIR', SITE_URL.'inc/images/' );  //images directory path
define ( 'FORM_TRANSFORM', SITE_URL.'inc/jqtransformplugin/' );  //form element transform directory path
define ( 'CSS_DIR', SITE_URL.'inc/css/' );
define ( 'ACTION_DIR', SITE_URL.'inc/action/' );
define ( 'USER_ID');
define('MERCHANT_ID','TATAMOTVEH');
define('SECURITY_ID','tatamotveh');
define('CHECKSUM_KEY','gCP4RFEtwCPk');

$con = mysql_connect("localhost","buynano","buynano");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("buynano", $con);



/*$url = parse_url('https://example.org');

if($url['scheme'] == 'https'){
   // is https;
}*/
?>
