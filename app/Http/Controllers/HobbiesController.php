<?php

namespace App\Http\Controllers;

use App\Models\Hobbies;
use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $hobbies = new Hobbies;
        $hobbies->name = $request->name;
        $hobbies->hobbies = $request->hobbies;
        $hobbies->save();
        return redirect()->route('home')->with('success_message',"Welcome to our site <strong> $request->name </strong>");
    }

    public function list()
    {
        $data['hobbies']=Hobbies::get()  ;
        return view('list',$data);
    }

    public function show(Hobbies $hobby)
    {
        $data['hobby']=$hobby;
        return view('detail',$data);
    }
    public function destroy(Hobbies $hobby){

        $hobby->delete();
        return redirect()->route('list')->with('delete_message',"Record Deleted Successfully.");
    }

}
