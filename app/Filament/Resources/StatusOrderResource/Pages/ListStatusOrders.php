<?php

namespace App\Filament\Resources\StatusOrderResource\Pages;

use App\Filament\Resources\StatusOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatusOrders extends ListRecords
{
    protected static string $resource = StatusOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
