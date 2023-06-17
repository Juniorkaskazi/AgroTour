<?php

namespace App\Filament\Resources\UserFarmsResource\Pages;

use App\Filament\Resources\UserFarmsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageUserFarms extends ManageRecords
{
    protected static string $resource = UserFarmsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
