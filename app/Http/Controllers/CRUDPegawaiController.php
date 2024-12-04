<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hewan;

class CRUDPegawaiController extends Controller
{
    // Display the list of records with search functionality and pagination
    public function index(Request $request)
    {
        $search = $request->input('search');

        $hewans = Hewan::when($search, function ($query, $search) {
            return $query->where('namahewan', 'LIKE', "%{$search}%")
                         ->orWhere('kodehewan', 'LIKE', "%{$search}%");
        })->paginate(10); // Paginate results

        return view('hewan.index', compact('hewans', 'search'));
    }

    // Get the record for editing
    public function edit($kodehewan)
    {
        $hewan = Hewan::findOrFail($kodehewan); // This will throw a 404 if not found
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
        $hewan->update($request->only(['namahewan', 'jumlahhewan', 'tersedia'])); // Mass assignment with only specific fields

        return redirect()->route('hewan.index')->with('success', 'Hewan berhasil diperbarui.');
    }

    // Store a new record
    public function store(Request $request)
    {
        $request->validate([
            'kodehewan' => 'required|string|max:10',
            'namahewan' => 'required|string|max:30',
            'jumlahhewan' => 'required|integer',
            'tersedia' => 'required|in:Y,N',
        ]);

        Hewan::create($request->only(['kodehewan', 'namahewan', 'jumlahhewan', 'tersedia'])); // Mass assignment with only specific fields

        return redirect()->route('hewan.index')->with('success', 'Hewan berhasil ditambahkan.');
    }
}
