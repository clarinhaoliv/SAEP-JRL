<?php

namespace App\Filament\Admin\Resources\Produtos\Pages;

use App\Filament\Admin\Resources\Produtos\ProdutoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProdutos extends ListRecords
{
    protected static string $resource = ProdutoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
