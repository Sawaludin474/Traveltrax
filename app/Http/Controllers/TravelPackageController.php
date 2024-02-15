<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $totalTravelPackages = TravelPackage::count();
    $travelPackages = TravelPackage::orderBy('title', 'asc')->paginate(9);

    return view('backend.packages.index', compact('travelPackages', 'totalTravelPackages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'about' => 'required|string',
            'departure_date' => 'required|date',
            'duration' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|integer',
        ]);


        $travelPackage = TravelPackage::create([
                'title' => $request->input('title'),
                'location' => $request->input('location'),
                'about' => $request->input('about'),
                'departure_date' => $request->input('departure_date'),
                'duration' => $request->input('duration'),
                'type' => $request->input('type'),
                'price' => $request->input('price'),
        ]);

        if ($request->hasFile('images')) {
            // dd($request);
            foreach ($request->file('images') as $image) {

                $path = $image->store('galleries');
                // dd($path);

                $travelPackage->gallery()->create([
                    'image' => $path,
                ]);
            }
        }

        $galleries = $travelPackage->galleries;


        return redirect()->route('travelpackages.index', compact('galleries'))->with('success', 'Travel package created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $travelPackages = TravelPackage::with('gallery')->FindOrfail($id);
        // return $travelPackages;
        
        return view('backend.packages.show',compact('travelPackages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $travelPackage = TravelPackage::findOrFail($id);
        return view('backend.packages.edit', compact('travelPackage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    
    {
    $request->validate([
        'title' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'about' => 'required|string',
        'departure_date' => 'required|date',
        'duration' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'price' => 'required|integer',
    ]);

    // Find the TravelPackage by ID
    $travelPackage = TravelPackage::findOrFail($id);

    // Update the TravelPackage using update method
    $travelPackage->update([
        'title' => $request->input('title'),
        'location' => $request->input('location'),
        'about' => $request->input('about'),
        'departure_date' => $request->input('departure_date'),
        'duration' => $request->input('duration'),
        'type' => $request->input('type'),
        'price' => $request->input('price'),
    ]);

    // Handle image upload if 'images' is present in the request
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('galleries');
            $travelPackage->gallery()->create([
                'image' => $path,
            ]);
        }
    }

    // Retrieve galleries associated with the travel package
    $galleries = $travelPackage->galleries;

    // Redirect to the index route with success message and galleries data
    return redirect()->route('travelpackages.index', compact('galleries'))->with('success', 'Travel package updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $travelPackage = TravelPackage::findOrFail($id);
            $travelPackage->delete();
    
            return redirect()->route('travelpackages.index')->with('success', 'Travel package deleted successfully!');
        }
    }
}
