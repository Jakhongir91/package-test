<?php

namespace PackageTest;

class Path
{
    private $path;

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    private function setPath($path)
    {
        $this->path = $path;
    }

    public function __construct()
    {
        var_dump(__DIR__);
        $this->setPath(__DIR__);
    }
}