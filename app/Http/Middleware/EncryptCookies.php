<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<int, string>
>>>>>>> 98021bc (halaman semua kos)
     */
    protected $except = [
        //
    ];
}
