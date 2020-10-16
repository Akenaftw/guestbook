<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

(session_start());
require 'Post.php';
require 'PostLoader.php';

$sicco = new Post("title",new DateTimeImmutable("04/11/1990"),"fubar","Sicco");
$felix = new Post("derka",new DateTimeImmutable("04/11/1994"),"fubar","Sicco");
$postArray = [$sicco,$felix];
$loader = new PostLoader();
$loader->addPost($postArray);
// json post uitlezen
// display json posts (laatste id in array eerst tonen)
// if posted form validation and array push into json





require 'view.php';