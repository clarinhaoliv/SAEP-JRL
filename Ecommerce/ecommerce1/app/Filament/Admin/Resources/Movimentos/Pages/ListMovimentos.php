<?php

namespace App\Filament\Admin\Resources\Movimentos\Pages;

use App\Filament\Admin\Resources\Movimentos\MovimentoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMovimentos extends ListRecords
{
    protected static string $resource = MovimentoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
