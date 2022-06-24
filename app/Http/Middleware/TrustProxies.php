<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use Fideloper\Proxy\TrustProxies as Middleware;
=======
use Illuminate\Http\Middleware\TrustProxies as Middleware;
>>>>>>> 98021bc (halaman semua kos)
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
<<<<<<< HEAD
     * @var array|string|null
     */
    protected $proxies = '*';
=======
     * @var array<int, string>|string|null
     */
    protected $proxies;
>>>>>>> 98021bc (halaman semua kos)

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
<<<<<<< HEAD
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
=======
    protected $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;
>>>>>>> 98021bc (halaman semua kos)
}
