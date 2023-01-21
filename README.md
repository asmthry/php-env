# PHP ENV

## Initialize Env
```php
(new ReadEnv(__DIR__))->load();
```

### Set New Env variable
```php
Asmthry\PhpEnv\Env::set('PLUGIN', 'Asmthry');
```
### Get Env variable
```php
Asmthry\PhpEnv\Env::get('USERNAME');
```
### Update Env variable
```php
Asmthry\PhpEnv\Env::update('USERNAME', 'Asmthry');
```
### Remove Env variable
```php
Asmthry\PhpEnv\Env::remove('USERNAME');
```