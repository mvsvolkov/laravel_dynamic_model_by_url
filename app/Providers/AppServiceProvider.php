<?php

namespace App\Providers;

use App\Models\AbstractUser;
use App\Models\RemoteUser;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $currentUrlPath = parse_url(request()->url(), PHP_URL_PATH);

        app()->bind(AbstractUser::class, User::class);

        /**
         * Может есть более хороший способ получить параметр из url - стоит поискать
         * Но маршрутизатор еще не подключен. Поэтому пример напрямую работает с url 
         */
        if (Str::startsWith($currentUrlPath, '/users/remote')) {
            app()->bind(AbstractUser::class, RemoteUser::class);
        }
    }
}
