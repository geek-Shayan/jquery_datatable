<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function list()
    {
        // $people = new People();
        // $people->name= 'sadi'; 
        // $people->phone= "0142";
        // $people->email= 'aple@gil.com'; 
        // $people->save();

        // $people1 = new People();
        // $people1->name= 'dgri'; 
        // $people1->phone= "56789";
        // $people1->email= 'examfdgple@gdl.com'; 
        // $people1->save();

        // $people2 = new People();
        // $people2->name= 'gtr'; 
        // $people2->phone= "5399";
        // $people2->email= 'eerploe@pogdl.com'; 
        // $people2->save();

        $peoples = People::all();
        return view('simple_datatable', compact('peoples'));

    }


    public function dataTable()
    {
        // $people = new People();
        // $people->name= 'sadi'; 
        // $people->phone= "01423456789";
        // $people->email= 'example@gmail.com'; 
        // $people->save();

        $peoples = People::all();
        return view('jquery_datatable', compact('peoples'));
    }
}
