<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function home()
     {
         return view('welcome');
     }
    public function index()
    {
        //
        $events = Registration::all();
        return view('index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'location' => 'required',
        ]);

        $data = $request->except('_token');
        Registration::create($data);
        return redirect()->route('event.index')->withSuccess('Data Inserted!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('index', compact('event.edit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event = Registration::findOrFail($id); 
        return view('edit', compact('event'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'date' => 'required',
        'location' => 'required',
    ]);

    $data = $request->except('_token', '_method');
    Registration::where('id', $id)->update($data);
    return redirect()->route('event.index')->withSuccess('Data Updated');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Registration::where('id', $id)->delete();
        return redirect()->route('event.index')->withSuccess('Data Deleted');
    }
}
