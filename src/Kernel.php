<?php

namespace Framework;

class Kernel
{

    private Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function handle(Request $request): Response
    {
        return $this->router->dispatch($request);
    }

    public function getRouter(): Router
    {
        return $this->router;
    }
}
