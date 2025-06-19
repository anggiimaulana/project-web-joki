<?php

namespace App\Filament\Resources\KategoriJokiResource\Pages;

use App\Filament\Resources\KategoriJokiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriJoki extends EditRecord
{
    protected static string $resource = KategoriJokiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
