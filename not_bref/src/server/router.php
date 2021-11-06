<?php
if (is_file($_SERVER['DOCUMENT_ROOT'].'/'.$_SERVER['SCRIPT_NAME'])) {
  // Serve static files directly
  return false;
}

// Run index.php for all requests
$_SERVER['SCRIPT_NAME'] = '/index.php';
require 'index.php';
?>
