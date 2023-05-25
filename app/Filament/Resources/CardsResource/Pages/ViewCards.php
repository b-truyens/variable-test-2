<?php

namespace App\Filament\Resources\CardsResource\Pages;

use App\Filament\Resources\CardsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCards extends ViewRecord
{
    protected static string $resource = CardsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            PostResource\Widgets\CardsOverview::class
        ];
    }
}