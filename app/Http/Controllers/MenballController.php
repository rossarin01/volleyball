<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menball;

class MenballController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = menball::orderBy('id', 'desc')->paginate(50);
        return view('menball.index', compact('data'))->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menball.create');
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
            'date',
            'round',
            'time',
            'event',
            'teamone',
            'score',
            'teamtwo',

            ]);
           
            menball::create($request->all());
            return redirect()->route('menball.index')->with('success', 'menball data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menball $menball)
    {
        return view('menball.show', compact('menball'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menball $menball)
    {
        return view('menball.edit', compact('menball'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menball $menball)
    {
        $request->validate([
            'date'=>'required',
            'round'=>'required',
            'time'=>'required',
            'event'=>'required',
            'teamone'=>'required',
            'score'=>'required',
            'teamtwo'=>'required',
        ]);
            $menball->update($request->all());
            return redirect()->route('menball.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menball $menball)
    {
        $menball->delete();
        return redirect()->route('menball.index')->with('success', 'menball data deleted successfully.');
    }
}
