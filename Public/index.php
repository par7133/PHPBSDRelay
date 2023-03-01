<?php

/**
 * Copyright (c) 2016, 2024, 5 Mode
 * All rights reserved.
 * 
 * This file is part of PHPBSDRelay.
 *
 * PHPBSDRelay is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHPBSDRelay is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.  
 * 
 * You should have received a copy of the GNU General Public License
 * along with PHPBSDRelay. If not, see <https://www.gnu.org/licenses/>.
 *
 * index.php
 * 
 * The index file.
 *
 * @author Daniele Bonini <my25mb@aol.com>
 * @copyrights (c) 2016, 2024, 5 Mode     
 * @license https://opensource.org/licenses/BSD-3-Clause 
 */

require "../Private/core/init.inc";


//use fivemode\fivemode\Class;

// FUNCTION AND VARIABLE DECLARATIONS

$scriptPath = APP_SCRIPT_PATH;

// PARAMETERS VALIDATION

$url = filter_input(INPUT_GET, "url")??"";
$url = strip_tags($url);
$url = strtolower(trim(substr($url, 0, 300), "/"));

switch ($url) {
  case "action":
    $scriptPath = APP_AJAX_PATH;
    define("SCRIPT_NAME", "action");
    define("SCRIPT_FILENAME", "action.php");     
    break;
  case "script":
    define("SCRIPT_NAME", "script");
    define("SCRIPT_FILENAME", "scriptContent.php");   
    break;
  case "":

    $bsdha = filter_input(INPUT_GET, "bsdha")??"";
    $bsdha = strip_tags($bsdha);
    $bsdha = strtolower(substr($bsdha, 0, 64));
    
    // SALT LOGIC
    $SALT = "";

    // Authentication
    $myhash = hash("sha256", APP_PASSWORD . $SALT, false);
    if ($myhash === $bsdha) {
      $auth = true;
    } else {
      $auth = false;
    }
    
    $bsdto = filter_input(INPUT_GET, "bsdto")??"";
    $bsdto = strip_tags($bsdto);
    $bsdto = trim(substr($bsdto, 0, 100), " ");
    
    $bsdsu = filter_input(INPUT_GET, "bsdsu")??"";
    $bsdsu = strip_tags($bsdsu);
    $bsdsu = trim(substr($bsdsu, 0, 300), " ");
    
    $bsdbo = filter_input(INPUT_GET, "bsdbo")??"";
    $bsdbo = strip_tags($bsdbo);
    $bsdbo = trim(substr($bsdbo, 0, 5000), " ");
    
    if (!$auth || ($bsdto===PHP_STR) || ($bsdsu===PHP_STR) || ($bsdbo===PHP_STR)) {
      echo("Param error.");
      exit(-1);
    } else {  
      define("SCRIPT_NAME", "m");
      define("SCRIPT_FILENAME", "m.php"); 
    }
    break;
  
  default:
    
   $scriptPath = APP_ERROR_PATH;
   define("SCRIPT_NAME", "err-404");
   define("SCRIPT_FILENAME", "err-404.php");  
 
}

if (SCRIPT_NAME==="err-404") {
  header("HTTP/1.1 404 Not Found");
}  

require $scriptPath . "/" . SCRIPT_FILENAME;
