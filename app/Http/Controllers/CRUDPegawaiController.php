<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hewan;

class CRUDPegawaiController extends Controller
{
    // Display the list of records with search functionality
    public function index(Request $request)
    {
        // Get the search query from the input
        $search = $request->input('search');

        // Query the database with optional search
        $hewans = Hewan::when($search, function ($query, $search) {
            return $query->where('namahewan', 'LIKE', "%{$search}%")
                         ->orWhere('kodehewan', 'LIKE', "%{$search}%"); // Make sure 'kodehewan' column exists in the 'hewan' table
        })->get();

        return view('hewan.index', compact('hewans', 'search'));
    }

    // Get the record for editing
    public function edit($kodehewan)
    {
        $hewan = Hewan::findOrFail($kodehewan);
        return view('hewan.edit', compact('hewan'));
    }

    // Update the record
    public function update(Request $request, $kodehewan)
    {
        $request->validate([
            'namahewan' => 'required|string|max:30',
            'jumlahhewan' => 'required|integer',
            'tersedia' => 'required|in:Y,N',
        ]);

        $hewan = Hewan::findOrFail($kodehewan);
        $hewan->update($request->all());

        return redirect()->route('hewan.index')->with('success', 'Hewan berhasil diperbarui.');
    }

    public function store(Request $request)
{
    $request->validate([
        'kodehewan' => 'required|string|max:10',
        'namahewan' => 'required|string|max:30',
        'jumlahhewan' => 'required|integer',
        'tersedia' => 'required|in:Y,N',
    ]);

    Hewan::create($request->all());

    return redirect()->route('hewan.index')->with('success', 'Hewan berhasil ditambahkan.');
}
    // Other CRUD methods can go here...
}
