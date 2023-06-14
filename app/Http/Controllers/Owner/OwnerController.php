<?php

namespace App\Http\Controllers\Owner;
use App\Http\Controllers\Controller;
use App\Models\event;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $event=event::with('eventType')->get();
        return view('myEvents', compact('event'));
    }
}
