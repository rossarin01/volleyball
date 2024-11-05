<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\world;

class WorldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = World::orderBy('id', 'desc')->paginate(50);
         return view('world.index', compact('data'))->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('world.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
             'w_date',
             'w_round',
             'w_time',
             'w_event',
             'w_teamone',
             'w_score',
             'w_teamtwo',

             ]);
            
             World::create($request->all());
             return redirect()->route('world.index')->with('success', 'world data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(World $world)
    {
        return view('world.show', compact('world'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(World $world)
    {
        return view('world.edit', compact('world'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, World $world)
    {
        $request->validate([
             'w_date'=>'required',
             'w_round'=>'required',
             'w_time'=>'required',
             'w_event'=>'required',
             'w_teamone'=>'required',
             'w_score'=>'required',
             'w_teamtwo'=>'required',
         ]);
             $world->update($request->all());
             return redirect()->route('world.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(World $world)
    {
        $world->delete();
        return redirect()->route('world.index')->with('success', 'world data created successfully.');
    }
}
