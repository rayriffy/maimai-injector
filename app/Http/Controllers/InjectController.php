<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\POPS;
use App\NICO;
use App\TOHO;
use App\SEGA;
use App\GAME;
use App\ORIG;

class InjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response('{ "response": "OK","site":[{"url":"'.route('inject.create').'","description":"Inserting Data","remark":"This system has not capability to check duplicate data. Please becareful while inserting data."},{"url":"'.url()->current().'/{CATEGORY}","description":"Showing data on prefered category","remark":"Allowed URL: pops,nico,toho,sega,game,orig [CASE SENSITIVE]"}]}')->header('Content-Type','application/json');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->get('cat') == 'pops') {
            POPS::firstOrCreate($request->except(['cat','_token']));
        }
        else if($request->get('cat') == 'nico') {
            NICO::firstOrCreate($request->except(['cat','_token']));
        }
        else if($request->get('cat') == 'toho') {
            TOHO::firstOrCreate($request->except(['cat','_token']));
        }
        else if($request->get('cat') == 'sega') {
            SEGA::firstOrCreate($request->except(['cat','_token']));
        }
        else if($request->get('cat') == 'game') {
            GAME::firstOrCreate($request->except(['cat','_token']));
        }
        else if($request->get('cat') == 'orig') {
            ORIG::firstOrCreate($request->except(['cat','_token']));
        }
        return response('{ "response": "Created","site":[{"url":"'.route('inject.create').'","description":"Inserting Data","remark":"This system has not capability to check duplicate data. Please becareful while inserting data."},{"url":"'.url()->current().'/{CATEGORY}","description":"Showing data on prefered category","remark":"Allowed URL: pops,nico,toho,sega,game,orig [CASE SENSITIVE]"}]}')->header('Content-Type','application/json');
        //return redirect('/');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id == 'pops') {
            $data = POPS::get();
        }
        else if($id == 'nico') {
            $data = NICO::get();
        }
        else if($id == 'toho') {
            $data = TOHO::get();
        }
        else if($id == 'sega') {
            $data = SEGA::get();
        }
        else if($id == 'game') {
            $data = GAME::get();
        }
        else if($id == 'orig') {
            $data = ORIG::get();
        }
        else {
            return response('{ "response": "Not found" }')->header('Content-Type','application/json');
        }
        return view('page.show')->with('data', $data)->with('cat', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=explode(".",$id);
        if($data[0] == 'pops') {
            $res = POPS::findOrFail($data[1]);
        }
        else if($data[0] == 'nico') {
            $res = NICO::findOrFail($data[1]);
        }
        else if($data[0] == 'toho') {
            $res = TOHO::findOrFail($data[1]);
        }
        else if($data[0] == 'sega') {
            $res = SEGA::findOrFail($data[1]);
        }
        else if($data[0] == 'game') {
            $res = GAME::findOrFail($data[1]);
        }
        else if($data[0] == 'orig') {
            $res = ORIG::findOrFail($data[1]);
        }
        return view('page.edit')->with('cat', $data[0])->with('data', $res);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=explode(".",$id);
        if($data[0] == 'pops') {
            $res = POPS::findOrFail($data[1]);
            $res->update($request->all());
        }
        else if($data[0] == 'nico') {
            $res = NICO::findOrFail($data[1]);
            $res->update($request->all());
        }
        else if($data[0] == 'toho') {
            $res = TOHO::findOrFail($data[1]);
            $res->update($request->all());
        }
        else if($data[0] == 'sega') {
            $res = SEGA::findOrFail($data[1]);
            $res->update($request->all());
        }
        else if($data[0] == 'game') {
            $res = GAME::findOrFail($data[1]);
            $res->update($request->all());
        }
        else if($data[0] == 'orig') {
            $res = ORIG::findOrFail($data[1]);
            $res->update($request->all());
        }
        return response('{ "response": "Updated" }')->header('Content-Type','application/json');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=explode(".",$id);
        if($data[0] == 'pops') {
            $res = POPS::whereId($data[1])->delete();
        }
        else if($data[0] == 'nico') {
            $res = NICO::whereId($data[1])->delete();
        }
        else if($data[0] == 'toho') {
            $res = TOHO::whereId($data[1])->delete();
        }
        else if($data[0] == 'sega') {
            $res = SEGA::whereId($data[1])->delete();
        }
        else if($data[0] == 'game') {
            $res = GAME::whereId($data[1])->delete();
        }
        else if($data[0] == 'orig') {
            $res = ORIG::whereId($data[1])->delete();
        }
        return response('{ "response": "Deleted" }')->header('Content-Type','application/json');
    }
}
