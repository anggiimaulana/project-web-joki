<?php

namespace App\Filament\Resources\KategoriBlogResource\Pages;

use App\Filament\Resources\KategoriBlogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriBlog extends EditRecord
{
    protected static string $resource = KategoriBlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
