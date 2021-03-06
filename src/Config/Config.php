<?php

namespace Hyperized\Benchmark\Config;

use Adbar\Dot;
use Symfony\Component\Config\FileLocator;

/**
 * Class Config
 * @package Hyperized\Benchmark\Config
 */
class Config
{
    /**
     * @var string
     */
    private $file = 'config.yml';
    /**
     * @var string
     */
    private $directory = 'config';
    /**
     * @var \Symfony\Component\Config\FileLocator
     */
    private $locator;
    /**
     * @var \Hyperized\Benchmark\Config\YamlConfigLoader
     */
    private $loader;
    /**
     * @var array
     */
    private $config;

    /**
     * Config constructor.
     */
    public function __construct()
    {
        $this->locator = new FileLocator([
            __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . $this->directory
        ]);

        $this->loader = new YamlConfigLoader($this->locator);

        $this->config = $this->loader->load(
            $this->locator->locate($this->file)
        );

        return true;
    }

    /**
     * @param string $field
     *
     * @return mixed
     */
    public function get(string $field)
    {
        $dot = new Dot($this->config);

        return $dot->get($field);
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->config;
    }
}