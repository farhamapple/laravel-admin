<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class QuestionsModel{

    public static function get_all(){
        $questions = DB::table('questions')
                    ->leftJoin('answers','questions.id','=','answers.question_id')
                    ->select('questions.id', 'questions.title', 'questions.question', 'answers.id as answer_id','answers.answer')
                    ->get();

        return $questions;
    }

    public static function get_question_by_id($pertanyaan_id){
        $question = DB::table('questions')
                    ->where('id', $pertanyaan_id)
                    ->first();

        return $question;
    }

    public static function save($data){
        $new_question = DB::table('questions')->insert($data);

        return $new_question;
    }

    public static function find_by_id($id){
        $item = DB::table('questions')->where('id', $id)->first();

        return $item;
    }

    public static function update($id, $request){
        $update_item = DB::table('questions')
                      ->where('id', $id)
                      ->update([
                          'title'        => $request['title'],
                          'question' => $request['question'],
                      ]);
        return $update_item;
    }


    public static function destroy($id){
        $deleted_item = DB::table('questions')->where('id', $id)->delete();

        return $deleted_item;
    }


}
