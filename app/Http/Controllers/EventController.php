<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Console\Scheduling\Event as SchedulingEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event as FacadesEvent;

class EventController extends Controller
{

        public function index()
        {
            $events = Event::all();

            return view('events', ['events' => $events]);




        }



}

