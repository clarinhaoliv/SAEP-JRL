<?php

namespace App\Filament\Resources\MovimentoResource\Pages;

use App\Models\Produto;
use App\Filament\Resources\MovimentoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMovimento extends CreateRecord
{
    protected static string $resource = MovimentoResource::class;
    //hook - Verificar se há estoque suficiente

    protected function beforeCreate(): void
    {
        $data = $this->data;
        $produto = Produto::find($data['produto_id']);
        $quantidade = (int)$data['quantidade'];
        $tipo = $data['tipo'];

            if ($tipo === 'Saida' && $quantidade> $produto->estoque){ //-> acessar propriedades  métodos
                Notification::make() //make: Cria uma notificação aparecendo em vermelho
                    ->title('Estoque insuficiente') 
                    ->body("Estoque de '{$produto->nome}' é de apenas {$produto->$estoque} unidades.")
                    ->danger() //estilo vermelho
                    ->send(); //Enviar a notificação para o usuario no painel admin
                $this->halt(); //execute imediatamente
            }
    }

    protected function afterCreate(): void
    {
        $movimento = $this->getRecord();
        $produto = $movimento->produto;
        if ($movimento->tipo === 'entrada'){
            $produto->increment('estoque', $movimento->quantidade);
        } else {
            $produto->decrement('estoque', $movimento->quantidade);
        }
    }
}
