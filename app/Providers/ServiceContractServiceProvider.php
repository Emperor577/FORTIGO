<?php


namespace App\Providers;

use App\Services\Message\MessageService;
use App\Services\Message\Interfaces\MessageService as MessageInterface;
use Illuminate\Support\ServiceProvider;

class ServiceContractServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MessageInterface::class, MessageService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
