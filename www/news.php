<?php
$url = 'http://newsapi.org/v2/'. $_GET['action'];
echo file_get_contents($url.'?'. $_SERVER['QUERY_STRING']);
?>