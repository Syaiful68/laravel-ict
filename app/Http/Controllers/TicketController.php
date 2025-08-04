<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
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
        return Inertia::render('Ticket/index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Ticket/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'type' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);

        $code = 'BBA000009';
        Ticket::create([
            'code' => $code,
            'type' => $request->type,
            'category' => $request->category,
            'description' => $request->description,
            'user_id' => 1
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Ticket::query()->where('code_ticket', $id)->first();
        return Inertia::render('Ticket/detail', [
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
