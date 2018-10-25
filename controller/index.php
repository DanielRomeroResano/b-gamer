<?php
// index.php

require_once __DIR__-'/model/config.php';

$accio = $_GET['accio'];

switch ($accio) {
case 'llistar-categories':
include __DIR__.'/controllers/llistar-categories.php';
break;
default:
include __DIR__.'/controllers/portada.php';
break;
}
