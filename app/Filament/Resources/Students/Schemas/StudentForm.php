<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('class_id')
                    ->label('Class')
                    ->relationship('class', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('section_id')
                    ->label('Section')
                    ->relationship('section', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('roll_no')
                    ->required(),
                DatePicker::make('dob'),
            ]);
    }
}
