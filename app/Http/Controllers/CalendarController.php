<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;

class CalendarController extends Controller
{

    public function index()
    {
        $calanders = Calendar::all();
        return view('calendars',compact('calendars'));
    }


    public function create()
    {
        return view('calendars.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
             'title' => 'required',
             'starttime' => 'required',
             'endtime' => 'required',
        ]);

        $calendar = Calendar::create([ 
             'title' => $request->title, 
             'starttime' => $request->starttime,
             'endtime' => $request->endtime, 
        ]);

        return $this->index();
    }

    public function show($id)
    {
        $calendar= Calendar::find($id); 
        return view('calendars.show',compact('calendars'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
