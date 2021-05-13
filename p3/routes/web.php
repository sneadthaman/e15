<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;

Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/projects', [ProjectController::class, 'list']);

    Route::get('/{slug}', [DashboardController::class, 'show']);

    // CREATE
    Route::post('/projects', [ProjectController::class, 'store']);

    // READ
    Route::get('/projects/{id}', [ProjectController::class, 'show']);

    //UPDATE
    Route::put('/projects/{id}', [ProjectController::class, 'update']);

    // DELETE
    Route::delete('projects/{id}', [ProjectController::class, 'destroy']);
}); 