<?php ob_start();

// Start a Session
if (!session_id()) @session_start();

require __DIR__ . '/../vendor/autoload.php';
