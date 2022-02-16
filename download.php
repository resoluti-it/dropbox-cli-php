<?php
require "vendor/autoload.php";

use App\DotenvLoad;
use Dotenv\Dotenv;
use App\Database\DoctrineManager;

$currentPath = __DIR__;
$dotenv = Dotenv::createImmutable($currentPath);
$envLoad = new DotenvLoad($dotenv);

$newDoctrine = new DoctrineManager();

$doctrine = $newDoctrine->getDoctrine();
