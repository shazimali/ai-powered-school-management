<?php

namespace App\Http\Controllers;

use App\Models\Period;
use Illuminate\Http\Request;

class TimeTableController extends Controller
{
    public function index()
    {
        return Period::with(['subject', 'teacher'])
            ->get()
            ->map(fn($p) => [
                'id' => $p->id,
                'title' => $p->subject->name . ' - ' . $p->teacher->name,
                'start' => $p->start_time,
                'end' => $p->end_time,
            ]);
    }

    public function update(Request $request, Period $period)
    {
        $period->update([
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return response()->noContent();
    }
}
