<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bed;

class BedController extends Controller
{
    public function index()
    {
        // Mengambil semua data tempat tidur dari database
        $beds = Bed::all();
    
        return view('book.form', compact('beds'));
    }

    public function store(Request $request)
{
    $selectedBeds = $request->input('selected_beds'); // Ambil nilai data-bed-id dari formulir

    // Loop melalui data-bed-id yang dipilih dan simpan ke database
    foreach ($selectedBeds as $bedDataId) {
        $bed = new Bed();
        $bed->id = $bedDataId; // Isi kolom id dengan data-bed-id
        $bed->name = 'nama tempat tidur'; // Isi nama tempat tidur sesuai kebutuhan
        $bed->is_booked = true; // Tentukan apakah tempat tidur sudah dipesan
        $bed->save();
    }

    return redirect()->back()->with('success', 'Selected beds saved successfully.');
}

}
