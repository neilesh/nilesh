<?php 
error_reporting(0);
session_start();
session_regenerate_id (true);
var_dump($_COOKIE);
//session_destroy();
// Include DAL
//require_once(dirname(dirname(__FILE__)) . '/inc/class/DAL.php');
//var_dump($_SERVER);
// site configuration variable

if($_SERVER['HTTP_HOST']=="localhost")
{
define ( 'SITE_URL', 'http://localhost/bb/' );
}
else
{
define ( 'SITE_URL', 'https://tmgsdccpqa.inservices.tatamotors.com/bb/' );
}
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
/*old_url*/
define('apiUrl_C','http://tmcrmappsqa.inservices.tatamotors.com/cordys/com.eibus.web.soap.Gateway.wcp?organization=o=B2C,cn=cordys,cn=cbop,o=tatamotors.com');

define('apiUrl',apiUrl_C.'&SAMLart='.$_SESSION['ArtifactKey']);

/*new url http://tmcrmapps.inservices.tatamotors.com/cordys/com.eibus.web.soap.Gateway.wcp?organization=o=B2C,cn=cordys,cn=cbop,o=tatamotors.com

define('apiUrl_C','http://tmcrmapps.inservices.tatamotors.com/cordys/com.eibus.web.soap.Gateway.wcp?organization=o=B2C,cn=cordys,cn=cbop,o=tatamotors.com');

define('apiUrl',apiUrl_C.'&SAMLart='.$_SESSION['ArtifactKey']);*/
/*SQL*/
require_once('mysqloopli.php');
$db= new mysqldb();
$db->mysqldb();
/*SQL*/

/*$url = parse_url('https://example.org');

if($url['scheme'] == 'https'){
   // is https;
}*/
?>
