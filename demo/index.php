<?php

use Asmthry\PhpEnv\Env;
use Asmthry\PhpEnv\ReadEnv;

require_once '../vendor/autoload.php';

(new ReadEnv(__DIR__))->load();

echo '<pre>';
print_r($_ENV);

# Access env variable
echo '<br />';
echo 'PLUGIN : ' . Env::get('USERNAME');
echo '<br /><br /><br />';

# Set new env variable
echo 'PLUGIN : ' . Env::get('PLUGIN');
echo '<br />';
echo 'PLUGIN after set : ' . Env::set('PLUGIN', 'Asmthry')->get('PLUGIN');
echo '<br /><br />';

# Update existing env variable
echo 'USERNAME : ' . Env::get('USERNAME');
echo '<br />';
echo 'USERNAME after update : ' . Env::update('USERNAME', 'Asmthry')->get('USERNAME');
echo '<br /><br />';

# Remove existing env variable
echo 'USERNAME : ' . Env::get('USERNAME');
echo '<br />';
echo 'USERNAME after remove : ' . Env::remove('USERNAME')->get('USERNAME');
echo '<br /><br /><br />';

print_r($_ENV);
echo '</pre>';
