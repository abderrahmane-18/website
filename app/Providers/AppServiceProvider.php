<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;
use Spatie\Export\Exporter;
class AppServiceProvider extends ServiceProvider
{
   
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        
    }

    /**
     * Bootstrap any application services.
     */
    
    /*
public function boot(\Illuminate\Http\Request $request)
{
    if (!empty(env('NGROK_URL')) && $request->server->has('HTTP_X_ORIGINAL_HOST')) {
        $this->app['url']->forceRootUrl(env('NGROK_URL'));
    }
}
*/
public function boot(Exporter $exporter)
    {
        $exporter->crawl(false);
    }
}










