<?php

namespace App\Http\Controllers;

use App\Models\Haken;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        //dd($request);
        $inputs = $request->validate([
            'name'=>'required|max:100',
            'yomigana'=>'required|max:200',
            'company'=>'required|max:100',
            'number'=>'required|max:100',
            'depart'=>'required|max:100',
            'section'=>'required|max:100',
            'job'=>'required|max:100',
            'firstday'=>'required|date|different:endday',
            'startday'=>'required|date|different:endday',
            'endday'=>'required|date',
            'worktype'=>'required|max:100',
            'conterm'=>'required|numeric|between:0.5,9',
            'cost'=>'required|integer|min:100',
            'tcostm'=>'nullable|integer|min:1',
            'tcostd'=>'nullable|integer|min:1',
            'troute'=>'nullable|max:100',
            'pnumber'=>'nullable|max:100',
            'pname'=>'nullable|max:100',
            'tcontent'=>'required|max:300',
            'aname'=>'required|max:100',
            'aemail'=>'required|email|max:100',
            'body'=>'nullable|max:500',
            'confirmer'=>'required|max:100',
            'cemail'=>'required|email|max:100',
            'costmemo'=>'nullable|max:500',
            'circulator1'=>'nullable|max:100',
            'circulator2'=>'nullable|max:100',
            'circulator3'=>'nullable|max:100',
            'circulator4'=>'nullable|max:100'
        ]);
        
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
        $haken->user_id = auth()->user()->id;
        $haken->save();
            
        
        return to_route('haken.create')->with('message', 'データを保存しました');
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
    public function update(Request $request, Haken $haken)
    {
        $inputs = $request->validate([
            'name'=>'required|max:100',
            'yomigana'=>'required|max:200',
            'company'=>'required|max:100',
            'number'=>'required|max:100',
            'depart'=>'required|max:100',
            'section'=>'required|max:100',
            'job'=>'required|max:100',
            'firstday'=>'required|date|different:endday',
            'startday'=>'required|date|different:endday',
            'endday'=>'required|date',
            'worktype'=>'required|max:100',
            'conterm'=>'required|numeric|between:0.5,9',
            'cost'=>'required|integer|min:100',
            'tcostm'=>'nullable|integer|min:1',
            'tcostd'=>'nullable|integer|min:1',
            'troute'=>'nullable|max:100',
            'pnumber'=>'nullable|max:100',
            'pname'=>'nullable|max:100',
            'tcontent'=>'required|max:300',
            'aname'=>'required|max:100',
            'aemail'=>'required|email|max:100',
            'body'=>'nullable|max:500',
            'confirmer'=>'required|max:100',
            'cemail'=>'required|email|max:100',
            'costmemo'=>'nullable|max:500',
            'circulator1'=>'nullable|max:100',
            'circulator2'=>'nullable|max:100',
            'circulator3'=>'nullable|max:100',
            'circulator4'=>'nullable|max:100'
        ]);
        
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
        $haken->user_id = auth()->user()->id;
        $haken->save();
            
        
        return to_route('haken.show', $haken)->with('message', 'データを更新しました');
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
        
        return to_route('haken.index')->with('message', '派遣の方を削除しました');
    }
    
    public function ringi(Haken $haken)
    {
        return view('haken.ringi', compact('haken'));
    }
    
    public function shinki(Haken $haken)
    {
        return view('haken.shinki', compact('haken'));
    }
}
