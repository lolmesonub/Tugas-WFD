<?php

namespace App\Http\Controllers;

use App\Models\Events;
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
        return view("master_events/createMaster_events", [
            'events' => $events,
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
            'venue' => 'required|string|max:255',
            'organizer_id' => 'required|exists:organizers,id', // Assuming organizer id is passed
            'booking_url' => 'required|url|max:255',
            'description' => 'required|string',
            'tags' => 'required|string',
        ]);

        // // Create new organizer
        // $events = new Events();
        // $events->title = $validatedData['title'];
        // $events->date = $validatedData['date'];
        // $events->venue = $validatedData['venue'];
        // $events->organizer_id = $validatedData['organizer_id'];
        // $events->booking_url = $validatedData['booking_url'];
        // $events->description = $validatedData['description'];
        // $events->tags = $validatedData['tags'];
        // $events->save();

        Events::create($validatedData);

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
        return view("master_events/editMaster_events", [
            'events' => $events,
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
            'venue' => 'required|string|max:255',
            'organizer_id' => 'required|exists:organizers,id', // Assuming organizer id is passed
            'booking_url' => 'required|url|max:255',
            'description' => 'required|string',
            'tags' => 'required|string',
        ]);

        $events = new Events();
        $events->title = $validatedData['title'];
        $events->date = $validatedData['date'];
        $events->venue = $validatedData['venue'];
        $events->organizer_id = $validatedData['organizer_id'];
        $events->booking_url = $validatedData['booking_url'];
        $events->description = $validatedData['description'];
        $events->tags = $validatedData['tags'];
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
