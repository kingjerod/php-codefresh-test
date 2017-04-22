<?php
require __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();


PHP_Timer::start();
echo "This is the the API page!<br />";
echo "DB_HOST: " . getenv('DB_HOST') . "<br />";
echo "DB_DATABASE: " . getenv('DB_DATABASE') . "<br />";
echo "DB_USERNAME: " . getenv('DB_USERNAME') . "<br />";
echo PHP_Timer::resourceUsage();
