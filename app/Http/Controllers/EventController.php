<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Console\Scheduling\Event as SchedulingEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event as FacadesEvent;

class EventController extends Controller
{

        public function show()
        {
            $events = Event::all();

            return view('event', ['event' => $events]);




        }



}

