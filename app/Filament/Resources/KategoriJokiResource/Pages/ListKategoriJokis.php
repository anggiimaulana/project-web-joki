<?php

namespace App\Filament\Resources\KategoriJokiResource\Pages;

use App\Filament\Resources\KategoriJokiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriJokis extends ListRecords
{
    protected static string $resource = KategoriJokiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
