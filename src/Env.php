<?php

namespace Asmthry\PhpEnv;

class Env
{
    /**
     * Access env variable value
     *
     * @param string $key env variable key
     * @param  $default Default value of env variable
     */
    public static function get(string $key, $default = null)
    {
        return array_key_exists($key, $_ENV) ? $_ENV[$key] : $default;
    }

    /**
     * Set new env variable
     *
     * @param string $key env variable key
     * @param  $value Value of the env variable
     */
    public static function set(string $key, $value)
    {
        if (!array_key_exists($key, $_ENV)) {
            $_ENV[$key] = $value;
        }

        return new self;
    }

    /**
     * Update existing env variable
     *
     * @param string $key env variable key
     * @param  $value Value of the env variable
     */
    public static function update(string $key, $value)
    {
        if (array_key_exists($key, $_ENV)) {
            $_ENV[$key] = $value;
        }

        return new self;
    }

    /**
     * Remove existing env variable
     *
     * @param string $key env variable key
     */
    public static function remove(string $key)
    {
        if (array_key_exists($key, $_ENV)) {
            unset($_ENV[$key]);
        }

        return new self;
    }
}
