<?php

require __DIR__ . '/vendor/autoload.php';

$resumeManager = new App\ResumeManager;
$resumeManager->read();
$resumeManager->generate();
