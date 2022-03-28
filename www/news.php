<?php
$url = 'http://newsapi.org/v2/top-headlines';
echo file_get_contents($url.'?'. $_SERVER['QUERY_STRING']);
?>