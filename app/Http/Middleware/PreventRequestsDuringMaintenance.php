<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
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
