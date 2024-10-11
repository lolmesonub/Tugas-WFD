<?php

namespace App\Http\Controllers;

use App\Models\Organizers;
use Illuminate\Http\Request;

class OrganizersController extends Controller
{
    public function index()
    {
        $organizers = Organizers::all();
        return view("organizers/organizers", [
            "organizers" => $organizers
        ]);
    }
        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $organizers = Organizers::all();
        return view("organizers/createOrganizers", [
            'organizers' => $organizers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'facebook_link' => 'required|string',
            'x_link' => 'required|string',
            'website_link' => 'required|string',
            'description' => 'required|string|max:500',
        ]);

        $facebookUrl = 'https://www.facebook.com/' . $validatedData['facebook_link'];
        $xUrl = 'https://x.com/' . $validatedData['x_link']; // Formerly Twitter
        $websiteUrl = 'https://www.' . $validatedData['website_link'] . '.com';

        // Create new organizer
        $organizers = new Organizers();
        $organizers->name = $validatedData['name'];
        $organizers->facebook_link = $facebookUrl;
        $organizers->x_link = $xUrl;
        $organizers->website_link = $websiteUrl;
        $organizers->description = $validatedData['description'];
        $organizers->save();

        // Redirect or show success message
        return redirect()->route('organizers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $organizers = Organizers::query()->where('id', $id)->firstOrFail();
        return view("organizers/detailOrganizers", [
            'organizers' => $organizers,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $organizers = Organizers::query()->where('id', $id)->firstOrFail();
        return view("organizers/editOrganizers", [
            'organizers' => $organizers,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'facebook_link' => 'required|string',
            'x_link' => 'required|string',
            'website_link' => 'required|string',
            'description' => 'required|string|max:500',
        ]);

        // Find the organizer by ID
        $organizers = Organizers::findOrFail($id);

        // Construct the URLs based on the new input data
        $facebookUrl = 'https://www.facebook.com/' . $validatedData['facebook_link'];
        $xUrl = 'https://x.com/' . $validatedData['x_link']; // Formerly Twitter
        $websiteUrl = 'https://www.' . $validatedData['website_link'] . '.com';

        // Update the organizer details
        $organizers->name = $validatedData['name'];
        $organizers->facebook_link = $facebookUrl;
        $organizers->x_link = $xUrl;
        $organizers->website_link = $websiteUrl;
        $organizers->description = $validatedData['description'];

        // Save the updated organizer
        $organizers->save();

        // Redirect to the organizer list or the show page with a success message
        return redirect()->route('organizers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $organizers = Organizers::findOrFail($id);
        $organizers->delete();

        return redirect()->route('organizers.index');
    }
}
