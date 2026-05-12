<?php

namespace App\Filament\Admin\Resources\Produtos\Pages;

use App\Filament\Admin\Resources\Produtos\ProdutoResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditProduto extends EditRecord
{
    protected static string $resource = ProdutoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
