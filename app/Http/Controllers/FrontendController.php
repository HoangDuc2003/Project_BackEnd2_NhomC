<?php

namespace App\Http\Controllers;

use App\Models\Films;
// use App\Models\Cin;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $films = Films::all();

        return view('Frontend.index')->with("films",$films);
    }
    public function cart()
    {
        return view('Frontend.pages.cart');
    }

    public function single()
    {
        return view('Frontend.pages.single');
    }

    public function find(string $tukhoa)
    {
        $tukhoa = ($request->has('tukhoa'))? $request->query('tukhoa'):"";
        $tukhoa = trim(strip_tags($tukhoa));
        $listsp=[];
        if ($tukhoa!=""){
            $listsp = DB::table("films")->where("film_name", "film_description", "%$tukhoa%")->get();
        }
        return view('timkiem', ['tukhoa'=> $tukhoa , 'listsp'=>$listsp]);
    }
}
