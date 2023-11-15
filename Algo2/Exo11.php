<?php
$now = new DateTime();

$fmt = new IntlDateFormatter(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN
);


// FULL, SHORT, MEDIUM, LONG, NONE
// echo $now->format("d-m-Y");

echo $fmt->format($now);