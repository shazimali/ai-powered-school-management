<?php

namespace App\Filament\Resources\Periods\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class PeriodForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('timetable_id')
                    ->required()
                    ->numeric(),
                TextInput::make('subject_id')
                    ->required()
                    ->numeric(),
                TextInput::make('teacher_id')
                    ->required()
                    ->numeric(),
                TimePicker::make('start_time')
                    ->required(),
                TimePicker::make('end_time')
                    ->required(),
                TextInput::make('order')
                    ->required()
                    ->numeric(),
            ]);
    }
}
