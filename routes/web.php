<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('employee', [EmployeeController::class, 'index']);
Route::post('employee', [EmployeeController::class,'store']);

Route::get('display', [ShowController::class,'show']);


foreach (scandir($path = app_path('Modules')) as $dir) {
    if (file_exists($filepath = "{$path}/{$dir}/Presentation/web.php")) {
        require $filepath;
    }
}



