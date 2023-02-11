<?php

namespace RaviyaTechnical\ServiceGenerator;

use Illuminate\Support\ServiceProvider;
use RaviyaTechnical\ServiceGenerator\Console\MakeModel;
use RaviyaTechnical\ServiceGenerator\Console\MakeService;

class ServiceGeneratorServiceProvider extends ServiceProvider
{

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeService::class,
                MakeModel::class
            ]);
        }
    }
}
