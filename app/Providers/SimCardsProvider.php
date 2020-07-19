<?php

namespace App\Providers;

use App\API\SimCardsAPI\KyevstarAPI;
use App\API\SimCardsAPI\LifeAPI;
use App\API\SimCardsAPI\VodafoneAPI;
use Illuminate\Support\ServiceProvider;

class SimCardsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(KyevstarAPI::class, function (){
            $kyevstar = new KyevstarAPI();
            return $kyevstar->useService();
        });
        $this->app->bind(VodafoneAPI::class, function (){
            $vodafone = new VodafoneAPI();
            return $vodafone->useService();
        });
        $this->app->bind(LifeAPI::class, function (){
            $life = new LifeAPI();
            return $life->useService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
