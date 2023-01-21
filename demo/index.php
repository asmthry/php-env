<?php

use Asmthry\PhpEnv\ReadEnv;

require_once '../vendor/autoload.php';

(new ReadEnv(__DIR__))->load();

echo '<pre>';
print_r($_ENV);
echo '</pre>';
