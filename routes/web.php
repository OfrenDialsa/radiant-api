<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

function loadModuleRoutes($module)
{
    $path = base_path("app/Modules/{$module}/routes.php");
    if (file_exists($path)) require $path;
}

loadModuleRoutes('Auth');
