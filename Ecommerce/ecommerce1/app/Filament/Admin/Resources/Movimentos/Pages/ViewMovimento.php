<?php

namespace App\Filament\Admin\Resources\Movimentos\Pages;

use App\Filament\Admin\Resources\Movimentos\MovimentoResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMovimento extends ViewRecord
{
    protected static string $resource = MovimentoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
