<?php

namespace App\Http\Controllers;

use App\Models\Haken;
use Illuminate\Http\Request;
use App\Http\Requests\HakenStoreRequest;
use App\Http\Requests\HakenUpdateRequest;


class HakenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hakens = Haken::all();
        $user = auth()->user();
        
        return view('haken.index', compact('hakens', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('haken.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HakenStoreRequest $request)
    {
        //dd($request);
        $inputs = $request->validated();
        
        $haken = new Haken();
        $haken->name = $request->name;
        $haken->yomigana = $request->yomigana;   
        $haken->company = $request->company;
        $haken->number = $request->number;
        $haken->depart = $request->depart;
        $haken->section = $request->section;
        $haken->job = $request->job;
        $haken->firstday = $request->firstday;
        $haken->startday = $request->startday;
        $haken->endday = $request->endday;
        $haken->worktype = $request->worktype;
        $haken->conterm = $request->conterm;
        $haken->cost = $request->cost;
        $haken->tcostm = $request->tcostm;
        $haken->tcostd = $request->tcostd;
        $haken->troute = $request->troute;
        $haken->pnumber = $request->pnumber;
        $haken->pname = $request->pname;
        $haken->tcontent = $request->tcontent;
        $haken->aname = $request->aname;
        $haken->aemail = $request->aemail;
        $haken->body = $request->body;
        $haken->confirmer = $request->confirmer;
        $haken->cemail = $request->cemail;
        $haken->costmemo = $request->costmemo;
        $haken->circulator1 = $request->circulator1;
        $haken->circulator2 = $request->circulator2;
        $haken->circulator3 = $request->circulator3;
        $haken->circulator4 = $request->circulator4;
        $haken->sccmail1 = $request->sccmail1;
        $haken->sccmail2 = $request->sccmail2;
        $haken->sccmail3 = $request->sccmail3;
        $haken->sccmail4 = $request->sccmail4;
        $haken->sccmail5 = $request->sccmail5;
        $haken->hccmail1 = $request->hccmail1;
        $haken->hccmail2 = $request->hccmail2;
        $haken->hccmail3 = $request->hccmail3;
        $haken->hccmail4 = $request->hccmail4;
        $haken->hccmail5 = $request->hccmail5;
        $haken->user_id = auth()->user()->id;
        $haken->save();
            
        
        return to_route('haken.create')->with('message', '??????????????????????????????');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Haken  $haken
     * @return \Illuminate\Http\Response
     */
    public function show(Haken $haken)
    {
        return view('haken.show', compact('haken'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Haken  $haken
     * @return \Illuminate\Http\Response
     */
    public function edit(Haken $haken)
    {
        return view('haken.edit', compact('haken'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Haken  $haken
     * @return \Illuminate\Http\Response
     */
    public function update(HakenUpdateRequest $request, Haken $haken)
    {
        $inputs = $request->validated();
        
        $haken->name = $request->name;
        $haken->yomigana = $request->yomigana;   
        $haken->company = $request->company;
        $haken->number = $request->number;
        $haken->depart = $request->depart;
        $haken->section = $request->section;
        $haken->job = $request->job;
        $haken->firstday = $request->firstday;
        $haken->startday = $request->startday;
        $haken->endday = $request->endday;
        $haken->worktype = $request->worktype;
        $haken->conterm = $request->conterm;
        $haken->cost = $request->cost;
        $haken->tcostm = $request->tcostm;
        $haken->tcostd = $request->tcostd;
        $haken->troute = $request->troute;
        $haken->pnumber = $request->pnumber;
        $haken->pname = $request->pname;
        $haken->tcontent = $request->tcontent;
        $haken->aname = $request->aname;
        $haken->aemail = $request->aemail;
        $haken->body = $request->body;
        $haken->confirmer = $request->confirmer;
        $haken->cemail = $request->cemail;
        $haken->costmemo = $request->costmemo;
        $haken->circulator1 = $request->circulator1;
        $haken->circulator2 = $request->circulator2;
        $haken->circulator3 = $request->circulator3;
        $haken->circulator4 = $request->circulator4;
        $haken->sccmail1 = $request->sccmail1;
        $haken->sccmail2 = $request->sccmail2;
        $haken->sccmail3 = $request->sccmail3;
        $haken->sccmail4 = $request->sccmail4;
        $haken->sccmail5 = $request->sccmail5;
        $haken->hccmail1 = $request->hccmail1;
        $haken->hccmail2 = $request->hccmail2;
        $haken->hccmail3 = $request->hccmail3;
        $haken->hccmail4 = $request->hccmail4;
        $haken->hccmail5 = $request->hccmail5;
        $haken->user_id = auth()->user()->id;
        $haken->save();
            
        
        return to_route('haken.show', $haken)->with('message', '??????????????????????????????');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Haken  $haken
     * @return \Illuminate\Http\Response
     */
    public function destroy(Haken $haken)
    {
        $haken->delete();
        
        return to_route('haken.index')->with('message', '?????????????????????????????????');
    }
    
    public function ringi(Haken $haken)
    {
        return view('haken.ringi', compact('haken'));
    }
    
    public function shinki(Haken $haken)
    {
        return view('haken.shinki', compact('haken'));
    }
    
    public function mkaku(Haken $haken)
    {
        $user = auth()->user();
        return view('haken.mkaku', compact('haken', 'user'));
    }
    
    public function hkaku(Haken $haken)
    {
        $user = auth()->user();
        return view('haken.hkaku', compact('haken', 'user'));
    }
    
    public function stop()
    {
        $stops = Haken::onlyTrashed()->get();
        
        $user = auth()->user();
        
        return view('haken.stop', compact('stops', 'user'));
    }
    
    public function stopshow($id)
    {
        
        $stop = Haken::onlyTrashed()->where('id', $id)->first();
        //dd($stop);
        return view('haken.stopshow', compact('stop'));
    }
    
    public function revival($stop)
    {
        //dd($stop);
        Haken::onlyTrashed()->where('id', $stop)->restore();
        //Haken::find($stop)->restore();
        
        return to_route('haken.index')->with('message', '?????????????????????????????????');
    }
}
