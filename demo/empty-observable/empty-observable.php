<?php

require_once __DIR__ . '/../bootstrap.php';

$observable = \Rx\Observable::emptyObservable();
$observable->subscribe($stdoutObserver);
