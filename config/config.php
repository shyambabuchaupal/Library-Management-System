<?php
if($_SERVER['HTTP_HOST']=='localhost'){
    define("BASE_URL", "http://localhost/LMS/");
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT']."/LMS/");
    // databesse connection 
    define("SERVER_NAME","localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "lms");
}else{
    define("BASE_URL", "http://lsm.com");
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT']."/LMS/");
     // databesse connection 
    define("SERVER_NAME","");
    define("USERNAME", "");
    define("PASSWORD", "");
    define("DATABASE", "");
}

?>