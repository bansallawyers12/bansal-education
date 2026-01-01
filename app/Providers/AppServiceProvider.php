<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ContactRequest;

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
    public function boot(): void
    {
        // Share unread contact requests count with all admin views
        View::composer('admin.layouts.app', function ($view) {
            $unreadCount = ContactRequest::where('is_read', false)->count();
            $view->with('unreadContactRequestsCount', $unreadCount);
        });
    }
}
