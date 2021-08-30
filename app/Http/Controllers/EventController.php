<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Console\Scheduling\Event as SchedulingEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        foreach ($events as $event) {
            echo 'Date : ' . $event->date;
            echo 'Title : ' . $event->title;
            echo 'Description : ' . $event->description;
            echo 'Poster : ' . $event->poster;
        

        }
    }
}
