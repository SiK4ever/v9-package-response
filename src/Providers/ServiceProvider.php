<?php

namespace V9\Response\Providers;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use V9\Response\Http\Json\Factory;
use V9\Response\Http\Json\JsonResponseInterface;
use V9\Response\Http\HttpFactory;
use V9\Response\Http\HttpFactoryInterface;

class ServiceProvider extends IlluminateServiceProvider
{
    public function register(): void
    {
        $this->app->bind(HttpFactoryInterface::class, HttpFactory::class);
        $this->app->bind(JsonResponseInterface::class, Factory::class);
    }
}
