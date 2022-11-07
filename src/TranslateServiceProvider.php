<?php

namespace Jmnn\Translate;

use Illuminate\Support\ServiceProvider;
use Jmnn\Translate\Manager\TranslateManager;

class TranslateServiceProvider extends ServiceProvider
{

    public  function register()
    {
        $this->app->singleton('jmnn-translate',function ($app)
        {
            return new TranslateManager($app);
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/jmnn-translate.php' => config_path('jmnn-translate.php')
        ], 'jmnn/translate/config');
    }
}
