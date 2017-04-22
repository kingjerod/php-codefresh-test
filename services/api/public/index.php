<?php

try {
    require __DIR__ . '/../vendor/autoload.php';
} catch (\Exception $ex) {
    die('Failed to load autoload.php file.');
}

try {
    $dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
    $dotenv->load();
} catch (\Exception $ex) {
    echo "Did not load .env file. This is ok in production.<br />";
}

try {
    PHP_Timer::start();
    echo "This is the the API page!<br />";

    $vars = ['DB_HOST', 'DB_DATABASE', 'DB_USERNAME'];

    foreach($vars as $var) {
        if (getenv($var)) {
            echo $var . ": " . getenv($var) . "<br />";
        } else {
            echo "No " . $var . " env var set.<br />";
        }
    }

    echo PHP_Timer::resourceUsage();
} catch (\Exception $ex) {
    echo "PHP exception: " . $ex->getMessage();
}
