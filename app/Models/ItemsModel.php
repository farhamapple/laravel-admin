<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ItemsModel{

    public static function get_all(){
        $items = DB::table('items')->get();

        return $items;
    }

    public static function save($data){
        $new_item = DB::table('items')->insert($data);

        return $new_item;
    }

    public static function find_by_id($id){
        $item = DB::table('items')->where('id', $id)->first();

        return $item;
    }

    public static function update($id, $request){
        $update_item = DB::table('items')
                      ->where('id', $id)
                      ->update([
                          'name'        => $request['name'],
                          'description' => $request['description'],
                          'price'       => $request['price'],
                          'stock'       => $request['stock']
                      ]);
        return $update_item;
    }

    public static function destroy($id){
        $deleted_item = DB::table('items')->where('id', $id)->delete();

        return $deleted_item;
    }


}
