<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class AnswersModel{

    public static function save($data){
        $new_answer = DB::table('answers')->insert($data);

        return $new_answer;
    }

    public static function get_answer_by_question_id($id){
        $answer = DB::table('questions')
                    ->leftJoin('answers','questions.id','=','answers.question_id')
                    ->select('questions.id', 'questions.title', 'questions.question', 'answers.answer')
                    ->where('questions.id', $id)
                    ->first();

        return $answer;
    }

}
