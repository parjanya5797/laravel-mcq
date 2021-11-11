<?php

namespace App\Providers;

use App\Contracts\Frontend\QuestionFrontendRepositoryInterface;
use App\Contracts\QuestionRepositoryInterface;
use App\Repository\Frontend\QuestionFrontendRepository;
use App\Repository\QuestionRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
    * Register services.
    *
    * @return void
    */
    public function register()
    {
    }

    /**
    * Bootstrap services.
    *
    * @return void
    */
    public function boot()
    {
        $this->app->bind(QuestionRepositoryInterface::class, QuestionRepository::class);
        $this->app->bind(QuestionFrontendRepositoryInterface::class, QuestionFrontendRepository::class);

    }
}
