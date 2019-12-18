<?php
include "settings.php";
$title = 'anohana';
$json = testAnimeSearch($title);
print_r($json);