<?php

namespace App\Providers;

use App\add_bookTicket_interface;
use App\Add_Movie_Interface;
use App\Add_Actor_Interface;

use App\Add_Theatre_Interface;
use App\AdminDataInterface;
use App\CustomerDataInterface;
use App\repository\Add_Actor_Repository;
use App\repository\Add_BookTicket_Repository;
use App\repository\Add_Movie_Repository;
use App\repository\Add_Theatre_Repository;
use App\repository\AdminDataRepository;
use App\repository\CustomerDataRepository;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            CustomerDataInterface::class,
            CustomerDataRepository::class);
        $this->app->bind(
            AdminDataInterface::class,
            AdminDataRepository::class);
        $this->app->bind(
            Add_Movie_Interface::class,
            Add_Movie_Repository::class);
        $this->app->bind(
            Add_Actor_Interface::class,
            Add_Actor_Repository::class);

        $this->app->bind(
            Add_Theatre_Interface::class,
            Add_Theatre_Repository::class);

        $this->app->bind(
            add_bookTicket_interface::class,
            Add_BookTicket_Repository::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

    }
}
