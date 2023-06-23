<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OwnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $events = event::with('eventType', 'user')->paginate(10);

        $eventTypes = DB::table('event_type')
            ->join('event', 'event_type.id', '=', 'event.id_type')
            ->select('event_type.name', DB::raw('COUNT(event.id) as count'))
            ->groupBy('event_type.name')
            ->get();

        $totalCount = $eventTypes->sum('count');

        $data = [];
        foreach ($eventTypes as $eventType) {
            $percentage = ($eventType->count / $totalCount) * 100;
            $data[] = [
                'name' => $eventType->name,
                'percentage' => $percentage,
            ];
        }
        return view('reservations', compact('events','data'));
    }
}
