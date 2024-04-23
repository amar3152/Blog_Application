<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application, or '*' for trusting any proxies.
     *
     * @var array|string
     */
    protected $proxies = '*';  // Trust all proxies - modify this as required for your network

    /**
     * The headers that should be used to detect proxies.
     *
     * These headers are for trusting the `X-Forwarded-For` and other `X-Forwarded-*` headers.
     * Depending on the proxies used, you might need to adjust these headers. Laravel uses
     * Symfony's Request class constants for these values.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_FOR |
                         Request::HEADER_X_FORWARDED_HOST |
                         Request::HEADER_X_FORWARDED_PORT |
                         Request::HEADER_X_FORWARDED_PROTO |
                         Request::HEADER_X_FORWARDED_AWS_ELB;
}
