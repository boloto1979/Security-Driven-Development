<?php

namespace Sdd;

use Illuminate\Support\ServiceProvider;

class SddServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $stubsPath = __DIR__ . '/stubs'; 

        $this->publishes([
            "$stubsPath/AuthenticationService.stub" => app_path('Security/AuthenticationService.php'),
            "$stubsPath/AuthorizationService.stub" => app_path('Security/AuthorizationService.php'),
            "$stubsPath/DataValidationService.stub" => app_path('Security/DataValidationService.php'),
            "$stubsPath/AuthenticationTests.stub" => base_path('tests/Security/AuthenticationTests.php'),
            "$stubsPath/AuthorizationTests.stub" => base_path('tests/Security/AuthorizationTests.php'),
            "$stubsPath/DataValidationTests.stub" => base_path('tests/Security/DataValidationTests.php'),
        ], 'sdd-security');
    }

    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
            ]);
        }
    }
}
