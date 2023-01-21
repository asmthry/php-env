<?php

namespace Asmthry\PhpEnv;

class ReadEnv
{
    /**
     * @var string $path Completed path of the env file
     */
    private string $path;

    /**
     * Set env file complete path
     *
     * @param string $path Base path
     */
    public function __construct(string $path)
    {
        $this->setPath($path);

        if (!file_exists($this->path)) {
            throw new \Exception('File Not found');
        }
    }

    /**
     * load .env file content to $_ENV
     */
    public function load()
    {
        $lines = file($this->getPath(), FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) {
                continue;
            }

            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
                putenv(sprintf('%s=%s', $name, $value));
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }

    /**
     * Set env file complete path
     *
     * @param string $path Base path
     */
    public function setPath(string $path)
    {
        $this->path = $path . '/.env';
    }

    /**
     * Set env file complete path
     *
     * @param string $path Base path
     */
    public function getPath()
    {
        return $this->path;
    }
}
