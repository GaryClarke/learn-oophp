<?php // date-time.php

require_once 'vendor/autoload.php';

// Create a DateTime using new DateTime without args
$dateTime = new DateTime();

// Create a DateTime using a date
$dateTime = new DateTime('2022-10-10');

// Create using human-readable
$dateTime = new DateTime('next Monday');

// Create using date_create()
$dateTime = date_create('next Wednesday');

// Create for different TZ
$buenosAires = new DateTime('now', new DateTimeZone('America/Argentina/Buenos_Aires'));
$bangkok = new DateTime('now', new DateTimeZone('Asia/Bangkok'));