<?php namespace App\Modules\Dashboard\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

class RouteServiceProvider extends ServiceProvider {

    public function map(Router $router)
    {
        $router->group(['middleware' => 'web', 'namespace' => $this->namespace], function($router)
        {
            require (config('modules.path').'/Dashboard/Http/web.php');
        });
    }

}