<?php

namespace App\Filament\Resources\CardsResource\Pages;

use App\Filament\Resources\CardsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCards extends ListRecords
{
    protected static string $resource = CardsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
