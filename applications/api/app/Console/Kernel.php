<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Api;
use DB;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')
                 ->hourly();
        $schedule->call(function(){
            $json = Api::requestApi('https://us.mzoneweb.net/api/v2/vehiclegroups/1bca1382-b20f-442b-8c68-be29d51ff0f7/lastknownpositions.json');
            $obj = json_decode($json, true);
            foreach ($obj['Items'] as $item) {
                DB::insert('insert into PosicionesVehiculos (telcelServerTimestamp, vehicleId, description, unitId, positionX, positionY, location) values (?, ?, ?, ?, ?, ?, ?)', [$item['LocalTimestamp'], $item['Id'], $item['Description'], $item['UnitId'], $item['Position']['0'], $item['Position']['1'], $item['Location']]);
            }
        })->everyFiveMinutes();//->everyMinute();
    }
}
