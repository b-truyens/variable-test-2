<?php

namespace App\Filament\Resources\CardsResource\Pages;

use App\Filament\Resources\CardsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCards extends CreateRecord
{
    protected static string $resource = CardsResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }
}
