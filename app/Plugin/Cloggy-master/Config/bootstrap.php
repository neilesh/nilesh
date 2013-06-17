<?php

//setup clog admin prefix url
Configure::write('Cloggy.url_prefix', 'cloggy');

//setup clog admin themes
Configure::write('Cloggy.theme_used', 'default');

//setup registered modules
Configure::write('Cloggy.modules', array(
    'CloggyBlog', 'CloggyUsers', 'CloggyDocs','ModuleTest','CloggySearch'
));

//setup cloggy config path
define('CLOGGY_PATH_CONFIG',APP.'Plugin'.DS.'Cloggy'.DS.'Config'.DS);

//setup cloggy module path
define('CLOGGY_PATH_MODULE', APP . 'Plugin' . DS . 'Cloggy' . DS . 'Module' . DS);

//setup cloggy webroot uploads
define('CLOGGY_PATH_UPLOAD',APP.'Plugin'.DS.'Cloggy'.DS.'webroot'.DS.'uploads'.DS);

/*
 * load other bootstrap files
 */
require_once CLOGGY_PATH_CONFIG.'bootstrap_module.php';
require_once CLOGGY_PATH_CONFIG.'bootstrap_path.php';