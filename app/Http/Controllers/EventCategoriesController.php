<?php

namespace App\Http\Controllers;

use App\Models\Event_Categories;
use Illuminate\Http\Request;

class EventCategoriesController extends Controller
{
    public function index()
    {
        $event_categories = Event_Categories::all();
        return view("event_categories/event_categories", [
            "event_categories" => $event_categories
        ]);
    }
        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $event_categories = Event_Categories::all();
        return view("event_categories/createEvent_categories", [
            'event_categories' => $event_categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $event_categories = new Event_Categories();
        $event_categories->name = $validatedData['name'];
        $event_categories->save();

        return redirect()->route('event_categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event_categories = Event_Categories::query()->where('id', $id)->firstOrFail();
        return view("event_categories/editEvent_categories", [
            'event_categories' => $event_categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $event_categories = Event_Categories::findOrFail($id);
        $event_categories->name = $validatedData['name'];
        $event_categories->save();

        return redirect()->route('event_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event_categories = Event_Categories::findOrFail($id);
        $event_categories->delete();

        return redirect()->route('event_categories.index');
    }
}
