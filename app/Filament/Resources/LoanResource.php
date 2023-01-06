<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LoanResource\Pages;
use App\Filament\Resources\LoanResource\RelationManagers;
use App\Models\Loan;
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


class LoanResource extends Resource
{
    protected static ?string $model = Loan::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
        
                TextInput::make('name')->autofocus()->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('amount')->required(),
                TextInput::make('category')->required(),
                TextInput::make('phone')->autofocus()->required(),
                TextInput::make('address')->required(),
                TextInput::make('Reason')->autofocus()->required(),
                TextInput::make('Identity')->autofocus()->required(),
                TextInput::make('Income')->required(),
                TextInput::make('loanReason')->required(),
                TextInput::make('companyName')->required(),
                TextInput::make('companyNo')->required(),
                TextInput::make('loanDuration')->required(),
                TextInput::make('employmentStatus')->required(),
                TextInput::make('bank')->required(),
                TextInput::make('bankStatement')->required(),
                TextInput::make('occupation')->required(),
                TextInput::make('monthlyAllowance')->required(),
                TextInput::make('city')->required(),
                TextInput::make('user_id')->required(),
                TextInput::make('status')->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable(),
                TextColumn::make('email')->sortable(),
                TextColumn::make('amount')->sortable(),
                TextColumn::make('category')->sortable(),
                TextColumn::make('phone')->sortable(),
                TextColumn::make('address')->sortable(),
                TextColumn::make('Reason')->sortable(),
                TextColumn::make('Identity')->sortable(),
                TextColumn::make('Income')->sortable(),
                TextColumn::make('loanReason')->sortable(),
                TextColumn::make('companyName')->sortable(),
                TextColumn::make('companyNo')->sortable(),
                TextColumn::make('loanDuration')->sortable(),
                TextColumn::make('employmentStatus')->sortable(),
                TextColumn::make('bank')->sortable(),
                TextColumn::make('bankStatement')->sortable(),
                TextColumn::make('occupation')->sortable(),
                TextColumn::make('monthlyAllowance')->sortable(),
                TextColumn::make('city')->sortable(),
                TextColumn::make('user_id')->sortable(),
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
            'index' => Pages\ListLoans::route('/'),
            'create' => Pages\CreateLoan::route('/create'),
            'edit' => Pages\EditLoan::route('/{record}/edit'),
        ];
    }    
}
