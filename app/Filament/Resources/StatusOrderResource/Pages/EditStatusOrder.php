<?php

namespace App\Filament\Resources\StatusOrderResource\Pages;

use App\Filament\Resources\StatusOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatusOrder extends EditRecord
{
    protected static string $resource = StatusOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
