<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\event;
use App\Models\eventType;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ClientController extends Controller

{

    public function create()
    {
        $event=eventType::all();
        return view('reservation', ['event'=> $event]);
    }


    public function store(Request $request){
        
        $user = DB::table('users')->where('email', Auth::user()->email)->first();
        $userId = $user->id;

        DB::table('event')->insert([
            'name' => $request->name,
            'id_type' => $request->events,
            'theme' => $request->themes,
            'date_event' => $request->date,
            'time_event' => $request->time,
            'id_user'=> $userId,
        ]);
        return redirect()->route('reservation');
    }
}
