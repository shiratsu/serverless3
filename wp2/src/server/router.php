<?php
if (is_file($_SERVER['DOCUMENT_ROOT'].'/'.$_SERVER['SCRIPT_NAME'])) {
  // Serve static files directly
  return false;
}

if($_SERVER['SCRIPT_NAME'] == "phpinfo.php"){
  require 'phpinfo.php';
  return;
}else if($_SERVER['SCRIPT_NAME'] == "aurora_test.php"){
    require 'aurora_test.php';
    return;
}else{
  // Run index.php for all requests
  $_SERVER['SCRIPT_NAME'] = '/index.php';
  require 'index.php';
}


?>
