<?php

require 'vendor/autoload.php';

// This part of the code should be run from command line for DB migration

$migration = new \App\Database\Migration();

$migration->run();