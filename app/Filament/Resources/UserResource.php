<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
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

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->autofocus()->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('phone')->autofocus()->required(),
                TextInput::make('address')->required(),
                TextInput::make('city')->autofocus()->required(),
                TextInput::make('state')->required(),
                TextInput::make('zip')->autofocus()->required(),
                TextInput::make('country')->autofocus()->required(),
                TextInput::make('balance')->autofocus()->required(),
                TextInput::make('universalAccount')->autofocus()->required(),
                TextInput::make('savingsAccount')->autofocus()->required(),
                TextInput::make('currentAccount')->autofocus()->required(),
                TextInput::make('loanBalance')->autofocus()->required(),
                TextInput::make('loanPayed')->autofocus()->required(),
                TextInput::make('loanRate')->autofocus()->required(),
                TextInput::make('kycFee')->autofocus()->required(),
                TextInput::make('sent')->autofocus()->required(),
                TextInput::make('recieved')->autofocus()->required(),
                TextInput::make('MaintenanceFee')->autofocus()->required(),
                TextInput::make('CardActivationFee')->autofocus()->required(),
                TextInput::make('level')->autofocus()->required(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->sortable(),
                TextColumn::make('email')->sortable(),
                TextColumn::make('phone')->sortable(),
                TextColumn::make('address')->sortable(),
                TextColumn::make('city')->sortable(),
                TextColumn::make('state')->sortable(),
                TextColumn::make('zip')->sortable(),
                TextColumn::make('country')->sortable(),
                TextColumn::make('balance')->sortable(),
                TextColumn::make('universalAccount')->sortable(),
                TextColumn::make('savingsAccount')->sortable(),
                TextColumn::make('currentAccount')->sortable(),
                TextColumn::make('loanBalance')->sortable(),
                TextColumn::make('loanPayed')->sortable(),
                TextColumn::make('loanRate')->sortable(),
                TextColumn::make('sent')->sortable(),
                TextColumn::make('recieved')->sortable(),
               
                TextColumn::make('kycFee')->sortable(),
                TextColumn::make('MaintenanceFee')->sortable(),
                TextColumn::make('CardActivationFee')->sortable(),

                TextColumn::make('level')->sortable(),
                TextColumn::make('status')->sortable(),
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
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }    
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
