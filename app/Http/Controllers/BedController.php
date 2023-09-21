<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bed;

class BedController extends Controller
{
    public function store(Request $request)
{
    $selectedBeds = $request->input('selected_beds');

    // Store the selected bed data in the database
    foreach ($selectedBeds as $bed) {
        Bed::create(['name' => $bed]);
    }
    Bed::whereIn('name', $selectedBeds)->update(['is_booked' => true]);


    return redirect()->back()->with('success', 'Selected beds saved successfully.');
}
}
