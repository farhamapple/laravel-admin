<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemsModel;


class ItemContoller extends Controller
{
    //
    public function index(){
        $items = ItemsModel::get_all();
        //dd($items);
        //compact < array assosiatip  == ['items' => $item]
        return view('items.index', compact('items'));
    }

    public function create(){

        return view('items.create');
    }

    public function store(Request $request){
       // dd($request->all());
       $data = $request->all();
       unset($data['_token']);

       $item = ItemsModel::save($data);
       if($item){
            return view('items.index');
       }
    }
}
