<?php // date-interval.php

require_once 'vendor/autoload.php';

// Compare with > and <
$today = date_create('now');
$saturday = date_create('saturday');
$result = $today > $saturday;

// Diff
$inThePast = date_create('2015-04-04');
$inTheFuture = date_create('2025-08-08');
$interval = $inTheFuture->diff($inThePast);