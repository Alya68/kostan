<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
<<<<<<< HEAD
=======
use Throwable;
>>>>>>> 98021bc (halaman semua kos)

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<int, class-string<Throwable>>
>>>>>>> 98021bc (halaman semua kos)
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
<<<<<<< HEAD
     * @var array
     */
    protected $dontFlash = [
=======
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
>>>>>>> 98021bc (halaman semua kos)
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
<<<<<<< HEAD
        //
=======
        $this->reportable(function (Throwable $e) {
            //
        });
>>>>>>> 98021bc (halaman semua kos)
    }
}
