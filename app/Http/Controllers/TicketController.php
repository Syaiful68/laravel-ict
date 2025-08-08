<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Ticket::all();
        return Inertia::render('Ticketing/index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Ticketing/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'category' => 'required',
            'subcategory' => 'required',
            'description' => 'required'
        ]);
        // dd($request->category['name']);

        $query = Ticket::query()->latest()->first();
        if ($query === null) {
            $n = 1;
        } else {
            $n = $query->id + 1;
        }

        $h = 'ICT';
        $code = $h . str_pad($n, 5, "0", STR_PAD_LEFT) . "-2025";

        dd($request->all());
        if ($request->file !== null) {
            $file = $request->file('file');
            $hashName = $file->getClientOriginalName();
            $path = $file->storeAs('Ticket', $file->hashName(), 'public');
            $uri = Storage::url($path);

            Ticket::create([
                'code_ticket' => $code,
                'categories' => $request->category['name'],
                'subcategories' => $request->subcategory,
                'description' => $request->description,
                'file_name' => $hashName,
                'file_path' => $uri,
                'user_id' => 1
            ]);
        }
        Ticket::create([
            'code_ticket' => $code,
            'categories' => $request->category['name'],
            'subcategories' => $request->subcategory,
            'description' => $request->description,
            'user_id' => 1
        ]);

        return to_route('ticket.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Ticket::query()->where('code_ticket', $id)->first();
        return Inertia::render('Ticketing/detail', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = Ticket::query()->where('code_ticket', $id)->first();
        $data->update([
            'status' => $request->status,
            'handling' => $request->handle
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Ticket::query()->where('code_ticket', $id)->first();
        $data->delete();
    }
}
