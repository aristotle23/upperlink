<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function setItem(){
        $name = request('name');
        $amount = request('amount');
        $quantity = request('quantity');
        $pic = request()->file('pic')->store('public/images');

        DB::insert("insert into item (name, amount, quantity, picture) VALUES (?,?,?,?)",array($name,$amount,$quantity,$pic));
        return view('newitem');
    }
    public function delete(){

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
