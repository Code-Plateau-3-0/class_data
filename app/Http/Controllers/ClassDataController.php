<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class ClassDataController extends Controller
{
    //

    public function home(){
        return view('home');
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $data = new Detail;      // create instance of Detail model class
        $data->firstname = $request->input('firstname');    // get data from input field named firstname
        $data->lastname = $request->input('lastname');    // get data from input field named lastname
        $data->save();      // save data to DB

        return redirect('/show')->with('data',$data);   // redirect to show route and pass [data variable] to the view
    }

    public function show(){
        $data = Detail::all();

        return view('show')->with('data', $data);
    }

    public function delete($id){
        $data = Detail::find($id);    // get item/element by its ID
        $data -> delete();            // delete that particular item

        return redirect('show');
    }

    public function edit($id){
        $data = Detail::find($id);  // get item/element by its ID

        return view('edit', ['data'=>$data]);
    }

    public function update(Request $request, $id){
        $data = Detail::find($id);      // get data/item by its id
        $data->firstname = $request->input('firstname');    // get new input data and replace with existing data
        $data->lastname = $request->input('lastname');      // get new input data and replace with existing data
        $data->save();      // save to DB

        return redirect('show')->with('data', $data);
    }
}
