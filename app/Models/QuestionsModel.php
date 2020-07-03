<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class QuestionsModel{

    public static function get_all(){
        $questions = DB::table('questions')
                    ->leftJoin('answers','questions.id','=','answers.question_id')
                    ->select('questions.id', 'questions.title', 'questions.question', 'answers.answer')
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


}
