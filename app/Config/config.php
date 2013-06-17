<?php 
//error_reporting(0);
session_start();
//session_regenerate_id (true);

/* site url and domain */
define ( 'SITE_URL', 'http://www.tatanano.com/bb/' );
define ( 'DOMAIN_URL', 'tatanano.com' );
/* site url and domain */

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
define('TEST_MODE','Y');
define('DIR_STRUCT','');

/* sql connection */
///$con = mysql_connect("localhost","buynano","buynano");
$con = mysql_connect("portalvpcdb.cm5n0ndaq46k.ap-southeast-1.rds.amazonaws.com","buy","jartv3190");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
///mysql_select_db("buynano", $con);
mysql_select_db("buynano", $con);
/* sql connection */

header('X-Frame-Options:DENY,DENY');

/* google api key captcha*/
define ( 'PUBLIC_KEY', '6LeFAd0SAAAAAMoAZ4ZHPCkkraxLxXRgF_b23x2X' );
define ( 'PRIVATE_KEY', '6LeFAd0SAAAAALAQB6yfqHQGDf1nYHUGU77D8pKD' );
/* google api key*/

/* 15 min session*/
if(isset($_SESSION['user_login_time']))
{
if((time() - $_SESSION['user_login_time']) > 900)
{
unset($_SESSION['user_login_time']);
unset($_SESSION['user']);
if($_SESSION['user']=='')
{
setcookie("NanoConfig",'',time()+10, "/",'; HttpOnly');
setcookie("BuyConfig",'',time()+10, "/",'; HttpOnly');
?>
<script>window.location.href='<?php echo SITE_URL;?>';</script>
<?php
}
}
}
/* 15 min session*/

/* body onload for form*/
define('BODYDRAG','ondragstart="return false" draggable="return false" ondragenter="event.dataTransfer.dropEffect=\'none\'; event.stopPropagation(); event.preventDefault();" ondragover="event.dataTransfer.dropEffect=\'none\';event.stopPropagation(); event.preventDefault();" ondrop="event.dataTransfer.dropEffect=\'none\';event.stopPropagation(); event.preventDefault();" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false"');
/* body onload for form*/

/*encrypt/decrypt key */
define ( 'ENC_DEC_KEY', 'tmgsd@ccpqa#514' );
/*encrypt/decrypt key */
?>
