<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Organizers;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class master_events extends Controller
{
    public function index()
    {
        $events = Events::all();
        return view("master_events/master_events", [
            "events" => $events
        ]);
    }
        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Events::all();
        $organizers = Organizers::all();
        return view("master_events/createMaster_events", [
            'events' => $events,
            'organizers' => $organizers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'venue' => 'required|string|max:255',
            'organizer_id' => 'required|exists:organizers,id', // Assuming organizer id is passed
            'booking_url' => 'required|max:255',
            'description' => 'required|string',
            'tags' => 'required|string',
        ]);
        $bookingurl = 'https://www.' . $validatedData['booking_url'] . '.com';

        // Create new organizer
        $events = new Events();
        $events->title = $validatedData['title'];
        $events->date = $validatedData['date'];
        $events->start_time = $validatedData['start_time'];
        $events->venue = $validatedData['venue'];
        $events->organizer_id = $validatedData['organizer_id'];
        $events->booking_url = $bookingurl;
        $events->description = $validatedData['description'];
        $events->tags = $validatedData['tags'];
        $events->event_category_id = 1;
        $events->save();

        // Events::create($validatedData);

        // Redirect or return response
        return redirect()->route('master_events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $events = Events::query()->where('id', $id)->firstOrFail();
        return view("master_events/detailEvents", [
            'event' => $events,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $events = Events::query()->where('id', $id)->firstOrFail();
        $oraganizers = Organizers::all();
        return view("master_events/editMaster_events", [
            'events' => $events,
            'organizers' => $oraganizers,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'venue' => 'required|string|max:255',
            'organizer_id' => 'required|exists:organizers,id', // Assuming organizer id is passed
            'booking_url' => 'required|max:255',
            'description' => 'required|string',
            'tags' => 'required|string',
        ]);

        $bookingurl = 'https://www.' . $validatedData['booking_url'] . '.com';

        // Create new organizer
        $events = Events::findOrFail($id);
        $events->title = $validatedData['title'];
        $events->date = $validatedData['date'];
        $events->start_time = $validatedData['start_time'];
        $events->venue = $validatedData['venue'];
        $events->organizer_id = $validatedData['organizer_id'];
        $events->booking_url = $bookingurl;
        $events->description = $validatedData['description'];
        $events->tags = $validatedData['tags'];
        $events->event_category_id = 1;
        $events->save();

        return redirect()->route('master_events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $events = Events::findOrFail($id);
        $events->delete();

        return redirect()->route('master_events.index');
    }
}
