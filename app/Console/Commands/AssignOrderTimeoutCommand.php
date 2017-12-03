<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\OrderDriver as mOrderDriver;
use App\Models\Order as mOrder;

class AssignOrderTimeoutCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assignOrderTimeout';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

//        SELECT order.status as order_status,order.id as order_id,order_driver.id as order_driver_id,order_driver.status as order_driver_status FROM `order` INNER join order_driver where order.id=order_driver.order_id ORDER BY `commission` DESC


//        php /home1/fintolog/public_html/sahalat/artisan assignOrderTimeout


        $pastFiveMinutes = date('Y-m-d H:i:s', strtotime('-5 minutes'));


        $orderDriverResults = mOrderDriver::where('status', '=', config('array.order_driver_status_pending_index'))
            ->where('updated_at', '<', $pastFiveMinutes)->get();


        foreach ($orderDriverResults as $orderDriverResult) {

            $orderDriverResult->update(['status' => config('array.order_driver_status_reject_index'),'notification'=>0]);

            if (isset($orderDriverResult->order->id)) {

                $orderDriverResult->order->update(['status' => config('array.order_status_payed_index'),'notification'=>0]);
            }


        }


    }
}
