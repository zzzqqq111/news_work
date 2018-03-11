<?php
header("content-type:text/html;charset=utf-8");
define("COMING","yes");
$server=$_SERVER;
define("ROOT_PATH",$server["DOCUMENT_ROOT"]);
define("APP_PATH",ROOT_PATH."ershouApp");
define("LIBS_PATH",APP_PATH."/libs");
define("TPL_PATH",APP_PATH."/template");
define("MODULE_PATH",APP_PATH."/module");
 $prot=substr($server["SERVER_PROTOCOL"],0,strrpos($server["SERVER_PROTOCOL"],"/"));
 $path=substr($server["SCRIPT_NAME"],0,strrpos($server["SCRIPT_NAME"],"/"));
define("URL_PATH",$prot."://".$server["HTTP_HOST"].$path);
define("CSS_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/css");
define("IMG_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/img");
define("JS_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/js");
define("EDITOR_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/editor");

define("SELF_PATH",$prot."://".$server["HTTP_HOST"].$server["SCRIPT_NAME"]);

require_once LIBS_PATH."/functions.php";
require_once LIBS_PATH."/route.class.php";
include LIBS_PATH."/db.class.php";
require_once LIBS_PATH."/smarty/Smarty.class.php";
require_once LIBS_PATH."/main.class.php";
require_once LIBS_PATH."/indexMain.class.php";
require_once LIBS_PATH."/code.class.php";
require_once LIBS_PATH."/session.class.php";
require_once LIBS_PATH."/tree.class.php";


$routeObj=new route();
$routeObj->getInfo();












