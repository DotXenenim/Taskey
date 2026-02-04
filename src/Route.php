<?php

namespace Framework;

class Route
{
    public string $method;

    public string $path;

    public string $return;

    /**
     * @param string $method
     * @param string $path
     * @param string $return
     */
    public function __construct(string $method, string $path, string $return)
    {
        $this->method = $method;
        $this->path = $path;
        $this->return = $return;
    }

    public function matches(string $method, string $path): bool
    {
        return $this->method === $method && $this->path === $path;
    }
}
