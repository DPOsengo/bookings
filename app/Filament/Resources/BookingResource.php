<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
            Forms\Components\Select::make('user_id')
                ->label('Utilisateur')
                ->options(User::all()->pluck('name', 'id'))
                ->searchable()
                ->required()
                ->default(auth()->id()),
                Select::make('property_id')
                    ->relationship('property', 'name')
                    ->required(),
                DatePicker::make('start_date')->required(),
                DatePicker::make('end_date')->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
            TextColumn::make('user.name')->sortable()->label('User'),
            TextColumn::make('property.name')->sortable()->label('Property'),
                TextColumn::make('start_date')->sortable(),
                TextColumn::make('end_date')->sortable(),
            ])
            ->filters([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
