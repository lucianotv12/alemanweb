<?php
//$URL = "http://localhost/comprasgo/admin";

if("localhost" == $_SERVER['SERVER_NAME']):
    $URL = "http://localhost/alemanweb/";
    define('ROOT','127.0.0.1');
    define('DATABASE','alemanweb');
    define('USER','root');
    define('PASS','');	
    define('ANALYTICS', 'false');
else:
    $URL = "http://www.ibris.com.ar/alemanweb/";
    define('ROOT','localhost');
    define('DATABASE','c0010037_laiken');
    define('USER','c0010037_laiken');
    define('PASS','Ibris1193');	
    define('ANALYTICS', 'false');    
        
        
endif;



define('HOME',''.$URL);
define('ADMIN',$URL);
define('JS',$URL.'js/');
define('CSS',$URL.'css/');
define('VIEW',$URL.'view/');
define('CTRL',$URL.'ctrl/');
define('CLASES',$URL.'models/');
define('SERVICES',$URL.'services/');        
define('BOOTSTRAP_CSS',$URL.'template/css/bootstrap/');
define('BOOTSTRAP_JS',$URL.'template/js/bootstrap/');
//define('IMGSDIRECTGROUP',$DIRECTGROUP.'');
define('ECOMMERCE', $URL.'demos/ecommerce/'); //define el estilo de la campania	
define('CONSTRUCCION', $URL.'demos/construction/'); //define el estilo de la campania	

define('XMAX', $URL.'demos/xmas/'); //define el estilo de la campania	
define('SHOP', $URL.'demos/shop/'); //define el estilo de la campania	
define('DIR_CORE', "market-core/");
define('RSPLUGINS', $URL.'include/rs-plugin/'); //define el estilo de la campania	

//cdn
//define('CSS_CDN', CDN .'css/');        
//define('JS_CDN',CDN .'js/');                
//define('ECOMMERCE_CDN', CDN .'demos/ecommerce/'); //define el estilo de la campania	
//define('SHOP_CDN', CDN .'demos/shop/'); //define el estilo de la campania	
//define('XMAX_CDN', CDN .'demos/xmas/'); //define el estilo de la campania	
//define('IMGS_CDN', CDN .'images/');          
define('LOGOS', $URL.'images/logos/'); //define el estilo de la campania	

define('IMGS',$URL.'images/');
define('BANNER',$URL.'images/banners/');





/*----------------------------------------------------------------------------*/
/* funcion que hace una inclusion automatica de las clases
/*----------------------------------------------------------------------------*/
//function __autoload($class_name)
//	{
//	$bajadas = "";
//	while (!is_dir($bajadas."models"))
//		{
//		$bajadas .= "../";
//		}
//
//		require_once($bajadas."models/".strtolower($class_name).".class.php");
//	}
//
//spl_autoload_register(function($class) {
//    include __DIR__.'/models/' . $class . '.php';
//});

//spl_autoload_register(function($class) {
//    include 'models/' . str_replace('\\', '/', $class) . '.php';
//});

//function autoload($className)
//{
//    $className = ltrim($className, '\\');
//    $fileName  = '';
//    $namespace = '';
//    if ($lastNsPos = strrpos($className, '\\')) {
//        $namespace = substr($className, 0, $lastNsPos);
//        $className = substr($className, $lastNsPos + 1);
//        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
//    }
//    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
//
//    require $fileName;
//}
//spl_autoload_register('autoload');

/*----------------------------------------------------------------------------*/
function my_autoloader($class_name)
{
    $bajadas = "";
    while (!is_dir($bajadas."models")) {
        $bajadas .= "../";
    }
    if (is_file($bajadas."models/".strtolower($class_name).".php")) {
        require_once($bajadas."models/".strtolower($class_name).".php");
    }

//        $bajadas = "";
//    while (!is_dir($bajadas."services")) {
//        $bajadas .= "../";
//        }
//
//    if (is_file($bajadas."services/".strtolower($class_name).".php")) {
//
//        require_once($bajadas."services/".strtolower($class_name).".php");
//    }

  //  require __DIR__ . '/vendor/autoload.php';
}

spl_autoload_register('my_autoloader');




function validar_permanencia ($_redireccion_estricta = true)
	{
	if (!isset($_SESSION["usuario"]))
		{
		# Verifico si me pasa una URL para mostrar un mensaje de error
		if($_redireccion_estricta)
			{# sino muestro el mensaje por defecto y redirecciono al Index
			redireccionar("Su sessi&oacute;n ha caducado, aguarde, ser&aacute; redireccionado...",3);
			}
		return false;
		}
	else
		{
		return true;
		}
	}
function redireccionar (  $message="", $seconds=0)
	{
	$url= HOME ;
//	header("Refresh: ".$seconds."; url=".$url); // waits 3 seconds & sends to homepage
    echo '<script type="text/javascript">window.location.assign("'. HOME .'");</script>';

	echo "<h4>".$message."</h4>";
	die();
	}
        
function _sessions(){
    $sess_name = session_name();
    
    if (session_start()) setcookie($sess_name, session_id(), null, '/', null, true, true);
    //$sess_name = session_name();
    //if (session_start()) setcookie($sess_name, session_id(), null, '/', null, true, true);
    //validar_permanencia();
    $inactivo = 900; // 150 minutos de inactividad
     if (isset($_SESSION['tiempo'])) {
         $vida_session = time() - $_SESSION['tiempo'];
         if ($vida_session > $inactivo) {
             session_unset();
             session_destroy();
             //header("Location: login.php" ) ;
         }
     }
    $_SESSION['tiempo'] = time() ;

}
function logOut() {
 session_unset();
 session_destroy();
 session_start();
 session_regenerate_id(true);
 }        
        