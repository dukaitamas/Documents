<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

// 'api' => [
//     \App\Http\Middleware\EncryptCookies::class,
//     \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
//     \Illuminate\Session\Middleware\StartSession::class,
//     \Illuminate\View\Middleware\ShareErrorsFromSession::class,
//     \App\Http\Middleware\VerifyCsrfToken::class,
//     \Illuminate\Routing\Middleware\SubstituteBindings::class,
//     \App\Http\Middleware\CheckToken::class, // your custom middleware for token authentication
// ],