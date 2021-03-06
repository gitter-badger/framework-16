<?php

namespace Http\Middlewares;

use Obullo\Application\Middleware;
use Obullo\Application\Middlewares\BenchmarkTrait;
use Obullo\Application\Middlewares\SanitizeSuperGlobalsTrait;

class Request extends Middleware
{
    use BenchmarkTrait;
    use SanitizeSuperGlobalsTrait;   // You can add / remove addons.

    /**
     * Loader
     * 
     * @return void
     */
    public function load()
    {
        $this->next->load();
    }

    /**
     *  Call action
     * 
     * @return void
     */
    public function call()
    {
        $this->sanitize();
        $this->benchmarkStart();

        $this->next->call();

        $this->benchmarkEnd();
    }

}