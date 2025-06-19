<?php

namespace App\Filament\Resources\KategoriBlogResource\Pages;

use App\Filament\Resources\KategoriBlogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriBlogs extends ListRecords
{
    protected static string $resource = KategoriBlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
