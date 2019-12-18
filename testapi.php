<?php
include "settings.php";
$title = 'anohana';
$json = animeSearch($title);
print_r($json);