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
        //
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
        return view("organizers/createOrganizers", [
            'organizers' => $organizers,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
