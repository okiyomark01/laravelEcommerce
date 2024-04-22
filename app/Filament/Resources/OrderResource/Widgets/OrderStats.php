<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;

class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Orders', Order::query()->where('status', 'new')->count()),
            Stat::make('Processing', Order::query()->where('status', 'processing')->count()),
            Stat::make('Delivered', Order::query()->where('status', 'delivered')->count()),
            Stat::make('Cancelled', Order::query()->where('status', 'cancelled')->count()),
            //Stat::make('Average Price', Number::currency(Order::query()->avg('grand_total'), 'Ksh'))
        ];
    }
}
