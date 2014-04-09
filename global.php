<?php

$working_dir = dirname(__FILE__);

if(!$working_dir)
{
  $working_dir = '.';
}


//load the main MangoCMS Core file which does all the magic
require_once $working_dir.'/inc/init.php';
