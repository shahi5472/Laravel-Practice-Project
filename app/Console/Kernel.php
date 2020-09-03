<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\HourlyUpdate::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
<<<<<<< HEAD
        $schedule->command('hour:update')->everyMinute();
        $schedule->command('inspire')->everyMinute();

        $schedule->command('hour:update')
            ->everyMinute()
            ->runInBackground();
=======
        // $schedule->command('inspire')->hourly();
        $schedule->command('command:sendemail')->everyFiveMinutes();
>>>>>>> e256422327d17a27efc7cc3d20ef8f94af8601ca
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
