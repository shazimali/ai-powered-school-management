<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

class TimetableCalendar extends Page
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;

    protected string $view = 'filament.pages.timetable-calendar';

    public function mount(): void
    {
        abort_unless(auth()->user()->hasRole('super_admin'), 403);
    }
}
