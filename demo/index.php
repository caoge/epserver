<?php
use EPS\Process\MainProcess;
define('SERVER_PATH', __DIR__ . '/');
define('LOG_FILE', __DIR__ . '/ttt.log');
$loader = include SERVER_PATH . 'autoload.php';
MainProcess::instance('eps_main')
    ->setWorker('Server\\Worker\\Main')
    ->setMain()
    ->run();