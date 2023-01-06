<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BankTransactionResource\Pages;
use App\Filament\Resources\BankTransactionResource\RelationManagers;
use App\Models\BankTransaction;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class BankTransactionResource extends Resource
{
    protected static ?string $model = BankTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('amount')->autofocus()->required(),
                TextInput::make('narration')->autofocus()->required(),
                TextInput::make('description')->autofocus()->required(),
                TextInput::make('type')->autofocus()->required(),
                TextInput::make('user_id')->autofocus()->required(),
                TextInput::make('transaction_code')->autofocus()->required(),   
                TextInput::make('status')->autofocus()->required(),       
                TextInput::make('from_account')->autofocus()->required(),       
                TextInput::make('to_account')->autofocus()->required(),       
                TextInput::make('account_number')->autofocus()->required(),       
                TextInput::make('Bank')->autofocus()->required(),       
                TextInput::make('currency')->autofocus()->required(),      
                      
   
     ]);
    }
    
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('amount')->sortable(),
                TextColumn::make('narration')->sortable(),
                TextColumn::make('description')->sortable(),
                TextColumn::make('type')->sortable(),
                TextColumn::make('user_id')->sortable(),
                TextColumn::make('transaction_code')->sortable(),
                TextColumn::make('from_account')->sortable(),
                TextColumn::make('to_account')->sortable(),
                TextColumn::make('account_number')->sortable(),
                TextColumn::make('Bank')->sortable(),
                TextColumn::make('currency')->sortable(),
                TextColumn::make('transaction_code')->sortable(),
                TextColumn::make('deleted_at')
                ->dateTime('d-M-Y')
                ->sortable()
                ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime('d-M-Y')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBankTransactions::route('/'),
            'create' => Pages\CreateBankTransaction::route('/create'),
            'edit' => Pages\EditBankTransaction::route('/{record}/edit'),
        ];
    }    
}
