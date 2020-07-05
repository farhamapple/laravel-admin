<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswersModel;
use App\Models\QuestionsModel;

class AnswerController extends Controller
{
    //
    public function index($pertanyaan_id){

        $answer = AnswersModel::get_answer_by_question_id($pertanyaan_id);
       // dd($answer);
        return view('answers.view', ['answer' => $answer]);
    }

    public function create($pertanyaan_id){
        $question = QuestionsModel::get_question_by_id($pertanyaan_id);

        return view('answers.create', ['question' => $question]);
    }

    public function store(Request $request){
        $data = $request->all();
       unset($data['_token']);

       $answer = AnswersModel::save($data);
       if($answer){
            return redirect('/pertanyaan');
       }
    }

    public function destroy($id){
        $deleted = AnswersModel::destroy($id);

        return redirect('/pertanyaan');
    }

}
