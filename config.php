<?php 

    define("SITE_URL", "");
    define("ASSETS_URL", SITE_URL."~/media/KraftHeinz/FoodServiceCA");
    define("IMAGE_URL", ASSETS_URL."/Files/images");
    define("SITE_LANGUAGE", "english");

    $lang = isset($_COOKIE['site_lang']) ? $_COOKIE['site_lang'] : 'english';

    if (isset($lang) && !empty($lang) && file_exists(ASSETS_URL."/language/".$lang.".php"))
    {
        define('USER_LANGUAGE', $lang);
        require_once(ASSETS_URL."/language/".$lang.".php");
    }
    else
    {
        define('USER_LANGUAGE', SITE_LANGUAGE);
        require_once(ASSETS_URL."/language/".SITE_LANGUAGE.".php");
    }

    include_once("functions.php");
    
