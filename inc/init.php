<?php

if (!defined('IN_MANGOCORE'))
{
  //do not allow access to file
  die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MANGOCORE is defined.");
}

/* Defines the root directory for MangoCMS.

	Uncomment the below line and set the path manually
	if you experience problems.

	Always add a trailing slash to the end of the path.

	* Path to your copy of MangoCMS
 */
//define('MANGOCORE_ROOT', "./");

// Attempt autodetection
if(!defined('MANGOCORE_ROOT'))
{
  define('MANGOCORE_ROOT', dirname(dirname(__FILE__))."/");
}


//load the Symfony classes
require_once MANGOCORE_ROOT.'vendor/symfony/class-loader/Symfony/Component/ClassLoader/UniversalClassLoader.php';
 
use Symfony\Component\ClassLoader\UniversalClassLoader;
 
$loader = new UniversalClassLoader();
$loader->register();
 
