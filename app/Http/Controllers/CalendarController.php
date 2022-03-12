<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class CalendarController extends Controller
{

    public function index()
    {
        $calanders = Todo::all();
        return view('calanders',compact('calanders'));
    }


    public function create()
    {
        return view('calanders.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
             'title' => 'required',
             'starttime' => 'required',
             'endtime' => 'required',
        ]);

        $todo = Todo::create([ 
             'title' => $request->title, 
             'starttime' => $request->starttime,
             'endtime' => $request->endtime, 
        ]);

        return $this->index();
    }

    public function show($id)
    {
        $todo= Todo::find($id); 
        return view('calendar.show',compact('todo'));
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
