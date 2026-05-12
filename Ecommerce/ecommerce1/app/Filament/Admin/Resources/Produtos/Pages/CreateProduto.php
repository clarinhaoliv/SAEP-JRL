<?php

namespace App\Filament\Admin\Resources\Produtos\Pages;

use App\Filament\Admin\Resources\Produtos\ProdutoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProduto extends CreateRecord
{
    protected static string $resource = ProdutoResource::class;
}
