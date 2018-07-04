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
        return response('{ "response": "OK","site":[{"url":"https://maiinjector.rayriffy.com/inject/create","description":"Inserting Data","remark":"This system has not capability to check duplicate data. Please becareful while inserting data."},{"url":"https://maiinjector.rayriffy.com/inject/{CATEGORY}","description":"Showing data on prefered category","remark":"Allowed URL: pops,nico,toho,sega,game,orig [CASE SENSITIVE]"}]}')->header('Content-Type','application/json');
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
            POPS::create($request->all());
        }
        else if($request->get('cat') == 'nico') {
            NICO::create($request->all());
        }
        else if($request->get('cat') == 'toho') {
            TOHO::create($request->all());
        }
        else if($request->get('cat') == 'sega') {
            SEGA::create($request->all());
        }
        else if($request->get('cat') == 'game') {
            GAME::create($request->all());
        }
        else if($request->get('cat') == 'orig') {
            ORIG::create($request->all());
        }
        return response('{ "response": "Done" }')->header('Content-Type','application/json');
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
        //
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
    }
}
